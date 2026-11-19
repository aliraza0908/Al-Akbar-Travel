// Umrah Group Packages — loads live data from data/umrah-packages.json and renders flight cards.
// Plain JavaScript, no framework. Only runs on pages that contain #uqApp.
(function () {
  'use strict';
  var root = document.getElementById('uqApp');
  if (!root) return;

  var API_URL = root.getAttribute('data-api') || 'data/umrah-packages.json';
  var WA_NUMBER = (root.getAttribute('data-whatsapp') || '').replace(/[^0-9]/g, '');
  var AGENT = (root.getAttribute('data-agent') || '').trim();   // set on the B2B page: agency (username)
  var PAGE_SIZE = 12;
  // Complimentary items are set in Admin → Umrah Packages → Live Group Packages
  var COMPLIMENTARY = [];
  try { COMPLIMENTARY = JSON.parse(root.getAttribute('data-complimentary') || '[]'); } catch (e) {}
  if (!Array.isArray(COMPLIMENTARY)) COMPLIMENTARY = [];
  // Gift icon chosen by its name (so it stays right whatever the order or custom list):
  //   Taif Ziyarat ⛰️ · Madina Ziyarat 🕌 · Umrah from Taif / Makkah Ziyarat 🕋 · anything else 🎁
  function compIcon(name) {
    var n = String(name || '').toLowerCase();
    if (/umrah|makkah|makka|mecca|kaaba|haram/.test(n)) return '🕋';
    if (/madina|madinah|medina|nabawi/.test(n)) return '🕌';
    if (/taif|mountain/.test(n)) return '⛰️';
    if (/transport|bus|car|transfer/.test(n)) return '🚌';
    if (/zamzam|water/.test(n)) return '💧';
    return '🎁';
  }
  var MONTHS = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

  var $ = function (id) { return document.getElementById(id); };
  var els = {
    list: $('uqList'), search: $('uqSearch'), sectors: $('uqSectors'), duration: $('uqDuration'),
    month: $('uqMonth'), sort: $('uqSort'), airlines: $('uqAirlines'), minR: $('uqMin'), maxR: $('uqMax'),
    minV: $('uqMinVal'), maxV: $('uqMaxVal'), fill: $('uqRangeFill'), makkah: $('uqMakkah'), madinah: $('uqMadinah'),
    reset: $('uqReset'), sideCount: $('uqSideCount'), sumFlights: $('uqSumFlights'), sumPkgs: $('uqSumPkgs'),
    pillFlights: $('uqPillFlights'), pillPkgs: $('uqPillPkgs'), live: $('uqLive'), sidebar: $('uqSidebar'),
    filterToggle: $('uqFilterToggle')
  };

  var all = [];            // groups from the API
  var view = [];           // groups after filters (each with .visible package list)
  var shown = 0;
  var state = { q: '', sector: 'all', airline: 'all', nights: '', month: '', sort: 'date', min: 0, max: 0, priceMin: 0, priceMax: 0, makkah: '', madinah: '' };

  // ---------- helpers ----------
  function esc(s) {
    return String(s == null ? '' : s).replace(/[&<>"']/g, function (c) {
      return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[c];
    });
  }
  function safeUrl(u) { return /^https?:\/\//i.test(u || '') ? u : ''; }
  function money(n) { return (Number(n) || 0).toLocaleString('en-US'); }
  function dParts(iso) {
    var m = /^(\d{4})-(\d{2})-(\d{2})/.exec(iso || '');
    return m ? { y: +m[1], m: +m[2] - 1, d: +m[3] } : null;
  }
  function fmtDate(iso) { var p = dParts(iso); return p ? (p.d < 10 ? '0' : '') + p.d + ' ' + MONTHS[p.m] : '—'; }
  function monthKey(iso) { var p = dParts(iso); return p ? p.y + '-' + (p.m < 9 ? '0' : '') + (p.m + 1) : ''; }
  function monthLabel(key) { var p = key.split('-'); return MONTHS[+p[1] - 1] + ' ' + p[0]; }
  function sectorOf(g) { return (g.from || '?') + '-' + (g.to || '?'); }
  function uniq(arr) { return arr.filter(function (v, i) { return v && arr.indexOf(v) === i; }); }
  function waLink(text) { return 'https://wa.me/' + WA_NUMBER + '?text=' + encodeURIComponent(text); }

  // ---------- load ----------
  function load() {
    els.list.innerHTML = '<div class="uq-state"><div class="uq-spinner"></div>Loading live Umrah packages…</div>';
    fetch(API_URL, { headers: { 'Accept': 'application/json' }, credentials: 'same-origin' })
      .then(function (r) { return r.json().catch(function () { throw new Error('bad json'); }); })
      .then(function (data) {
        if (!data || !data.ok || !Array.isArray(data.groups)) throw new Error((data && data.error) || 'unavailable');
        all = data.groups.filter(function (g) { return g && Array.isArray(g.packages) && (g.packages.length || g.ticketPrice > 0); });
        if (!all.length) throw new Error('empty');
        setLive(data);
        buildFilters();
        apply();
      })
      .catch(function () {
        els.list.innerHTML = '<div class="uq-state"><p><strong>Live packages could not be loaded right now.</strong></p>' +
          '<p>Please try again, or message us on WhatsApp for today\'s group rates.</p>' +
          '<p><button type="button" class="uq-pill uq-pill-dark" id="uqRetry">↻ Try again</button> ' +
          '<a class="uq-pill uq-pill-wa" target="_blank" rel="noopener" href="' + esc(waLink('Assalam o Alaikum, please share your latest Umrah group packages.')) + '">💬 WhatsApp Us</a></p></div>';
        var retry = $('uqRetry'); if (retry) retry.addEventListener('click', load);
        if (els.live) { els.live.textContent = 'Offline'; els.live.classList.add('is-stale'); }
      });
  }

  function setLive(data) {
    if (!els.live) return;
    var stale = data.source === 'stale';
    els.live.textContent = stale ? 'Recently Updated' : 'Live Availability';
    els.live.classList.toggle('is-stale', stale);
    if (data.updated) els.live.title = 'Last updated: ' + new Date(data.updated).toLocaleString();
  }

  // ---------- filters UI ----------
  function buildFilters() {
    var sectors = uniq(all.map(sectorOf)).sort();
    els.sectors.innerHTML = '<button type="button" class="uq-sector active" data-sector="all">All</button>' +
      sectors.map(function (s) { return '<button type="button" class="uq-sector" data-sector="' + esc(s) + '">' + esc(s) + '</button>'; }).join('');

    var nights = uniq(all.map(function (g) { return String(g.nights); })).sort(function (a, b) { return a - b; });
    els.duration.innerHTML = '<option value="">All</option>' + nights.map(function (n) { return '<option value="' + esc(n) + '">' + esc(n) + ' Nights</option>'; }).join('');

    var months = uniq(all.map(function (g) { return monthKey(g.dep && g.dep.date); })).sort();
    els.month.innerHTML = '<option value="">Any</option>' + months.map(function (m) { return '<option value="' + esc(m) + '">' + esc(monthLabel(m)) + '</option>'; }).join('');

    var mk = [], md = [], prices = [];
    all.forEach(function (g) {
      g.packages.forEach(function (p) { mk.push(p.mk); md.push(p.md); prices.push(p.sharing); });
      if (g.ticketPrice) prices.push(g.ticketPrice);
    });
    els.makkah.innerHTML = '<option value="">All Makkah Hotels</option>' + uniq(mk).sort().map(function (h) { return '<option>' + esc(h) + '</option>'; }).join('');
    els.madinah.innerHTML = '<option value="">All Madinah Hotels</option>' + uniq(md).sort().map(function (h) { return '<option>' + esc(h) + '</option>'; }).join('');

    state.priceMin = Math.floor(Math.min.apply(null, prices) / 1000) * 1000;
    state.priceMax = Math.ceil(Math.max.apply(null, prices) / 1000) * 1000;
    [els.minR, els.maxR].forEach(function (r) { r.min = state.priceMin; r.max = state.priceMax; r.step = 1000; });
    els.minR.value = state.min = state.priceMin;
    els.maxR.value = state.max = state.priceMax;
    paintRange();
  }

  function paintRange() {
    var span = (state.priceMax - state.priceMin) || 1;
    var a = (state.min - state.priceMin) / span * 100, b = (state.max - state.priceMin) / span * 100;
    els.fill.style.left = a + '%';
    els.fill.style.width = Math.max(0, b - a) + '%';
    els.minV.textContent = money(state.min);
    els.maxV.textContent = money(state.max);
  }

  function renderAirlines(base) {
    var counts = {}, names = {}, logos = {};
    base.forEach(function (g) { counts[g.airline] = (counts[g.airline] || 0) + 1; names[g.airline] = g.airlineName || g.airline; logos[g.airline] = g.logo; });
    var codes = uniq(all.map(function (g) { return g.airline; })).sort(function (a, b) { return String(names[a] || a).localeCompare(names[b] || b); });
    var html = opt('all', 'All', '', base.length);
    codes.forEach(function (c) {
      var g = all.filter(function (x) { return x.airline === c; })[0];
      html += opt(c, g.airlineName || c, g.logo, counts[c] || 0);
    });
    els.airlines.innerHTML = html;
    function opt(val, label, logo, n) {
      var on = state.airline === val;
      return '<label class="uq-airline-opt' + (on ? ' active' : '') + '"><input type="radio" name="uqAirline" value="' + esc(val) + '"' + (on ? ' checked' : '') + '>' +
        (safeUrl(logo) ? '<img src="' + esc(logo) + '" alt="" loading="lazy" onerror="this.style.visibility=\'hidden\'">' : '') +
        '<span>' + esc(label) + '</span><span class="uq-n">' + n + '</span></label>';
    }
  }

  // ---------- filtering ----------
  function pkgMatches(p) {
    if (p.sharing < state.min || p.sharing > state.max) return false;
    if (state.makkah && p.mk !== state.makkah) return false;
    if (state.madinah && p.md !== state.madinah) return false;
    return true;
  }
  function groupMatches(g, ignoreAirline) {
    if (!ignoreAirline && state.airline !== 'all' && g.airline !== state.airline) return false;
    if (state.sector !== 'all' && sectorOf(g) !== state.sector) return false;
    if (state.nights && String(g.nights) !== state.nights) return false;
    if (state.month && monthKey(g.dep && g.dep.date) !== state.month) return false;
    if (state.q) {
      var q = state.q;
      var hay = [g.code, g.title, g.airline, g.airlineName, sectorOf(g), g.dep && g.dep.flight, g.ret && g.ret.flight].join(' ').toLowerCase();
      if (hay.indexOf(q) === -1) {
        var hit = g.packages.some(function (p) { return (p.code + ' ' + p.mk + ' ' + p.md).toLowerCase().indexOf(q) !== -1; });
        if (!hit) return false;
      }
    }
    return true;
  }

  function apply() {
    var withPkgs = [];
    all.forEach(function (g) {
      var vis = g.packages.filter(pkgMatches);
      // Ticket-only seats (manual flights): match on price, not on hotel filters
      var tk = g.ticketPrice > 0 && !state.makkah && !state.madinah && g.ticketPrice >= state.min && g.ticketPrice <= state.max;
      if (vis.length || tk) {
        withPkgs.push({ g: g, pkgs: vis, ticket: tk, min: vis.length ? Math.min.apply(null, vis.map(function (p) { return p.sharing; })) : g.ticketPrice });
      }
    });
    renderAirlines(withPkgs.filter(function (x) { return groupMatches(x.g, true); }).map(function (x) { return x.g; }));
    view = withPkgs.filter(function (x) { return groupMatches(x.g, false); });

    var by = {
      date: function (a, b) { return String(a.g.dep.date).localeCompare(String(b.g.dep.date)) || a.min - b.min; },
      priceAsc: function (a, b) { return a.min - b.min; },
      priceDesc: function (a, b) { return b.min - a.min; },
      seats: function (a, b) { return b.g.seats - a.g.seats; },
      nights: function (a, b) { return b.g.nights - a.g.nights || a.min - b.min; }
    };
    view.sort(by[state.sort] || by.date);

    var pk = view.reduce(function (s, x) { return s + x.pkgs.length; }, 0);
    els.sumFlights.textContent = view.length;
    els.sumPkgs.textContent = pk;
    els.sideCount.textContent = view.length + ' Flights';
    if (els.pillFlights) { els.pillFlights.textContent = all.length; els.pillPkgs.textContent = all.reduce(function (s, g) { return s + g.packages.length; }, 0); }

    shown = 0;
    els.list.innerHTML = '';
    if (!view.length) {
      els.list.innerHTML = '<div class="uq-empty"><p><strong>No packages match these filters.</strong></p><p><button type="button" class="uq-pill uq-pill-dark" data-uq-reset>Reset filters</button></p></div>';
      return;
    }
    more();
  }

  function more() {
    var old = $('uqMoreWrap'); if (old) old.remove();
    var html = '';
    view.slice(shown, shown + PAGE_SIZE).forEach(function (x, i) { html += card(x, shown + i); });
    shown = Math.min(view.length, shown + PAGE_SIZE);
    els.list.insertAdjacentHTML('beforeend', html);
    if (shown < view.length) {
      els.list.insertAdjacentHTML('beforeend', '<div class="uq-more" id="uqMoreWrap"><button type="button" class="btn btn-primary" id="uqMore">Show more flights (' + (view.length - shown) + ' left)</button></div>');
    }
  }

  // ---------- rendering ----------
  // Cards added by Admin can have several flights (stops on the way, return from another city, stay notes)
  function legs(g) {
    if (!Array.isArray(g.segments) || !g.segments.length) return leg(g.dep) + leg(g.ret);
    return g.segments.map(function (sgm, n) {
      var startRet = sgm.dir === 'ret' && (n === 0 || g.segments[n - 1].dir !== 'ret');
      return (startRet ? '<div class="uq-leg-sep">↩ Return</div>' : '') + leg(sgm) + (sgm.stay ? '<div class="uq-stay">⏸ ' + esc(sgm.stay) + '</div>' : '');
    }).join('');
  }
  function leg(l) {
    if (!l) return '';
    return '<div class="uq-leg">' +
      '<div class="uq-leg-row"><span><b>' + esc(l.flight || 'TBA') + '</b>&nbsp; ' + esc(fmtDate(l.date)) + '</span>' + (l.bag ? '<span class="uq-bag">Baggage: ' + esc(l.bag) + '</span>' : '') + '</div>' +
      '<div class="uq-leg-row"><b>' + esc((l.from || '') + '-' + (l.to || '')) + '</b><span>' + esc((l.etd || '--:--') + ' - ' + (l.eta || '--:--')) + '</span></div></div>';
  }

  // Card colour chosen in Admin / B2B for a manually added flight (otherwise the airline colour from CSS is used)
  function shade(hex, amt) {
    var n = parseInt(hex.slice(1), 16), r = n >> 16, g = (n >> 8) & 255, b = n & 255, t = amt < 0 ? 0 : 255, p = Math.abs(amt);
    return '#' + [r, g, b].map(function (c) { return ('0' + Math.round((t - c) * p + c).toString(16)).slice(-2); }).join('');
  }
  function cardColor(g) {
    if (!g.manual || !/^#[0-9a-f]{6}$/i.test(g.color || '')) return '';
    return ' style="--c1:' + shade(g.color, -0.45) + ';--c2:' + g.color + ';--cx:' + shade(g.color, 0.25) + '"';
  }

  function card(x, idx) {
    var g = x.g, low = g.seats > 0 && g.seats <= 5;
    var logo = safeUrl(g.logo)
      ? '<img src="' + esc(g.logo) + '" alt="' + esc(g.airlineName) + '" loading="lazy" onerror="this.outerHTML=\'<span>' + esc(g.airline) + '</span>\'">'
      : '<span>' + esc(g.airline) + '</span>';
    // API flights use the gift list from Admin settings; manually added flights use their own list (can be empty)
    var comp = g.manual ? (Array.isArray(g.complimentary) ? g.complimentary : []) : COMPLIMENTARY;
    var n = x.pkgs.length;
    return '<article class="uq-card' + (comp.length ? '' : ' uq-no-comp') + '" data-airline="' + esc(g.airline) + '" data-idx="' + idx + '"' + cardColor(g) + '>' +
      '<div class="uq-card-main">' +
        '<div class="uq-panel"><div class="uq-logo">' + logo + '</div><div><span class="uq-gold-chip">✈ ' + esc(g.airline) + '</span><div class="uq-airline-name">' + esc(g.airlineName) + '</div></div></div>' +
        '<div class="uq-dep"><span class="uq-gold-chip">✈ ' + esc(sectorOf(g)) + '</span><small>Departure</small><strong>' + esc(fmtDate(g.dep.date)) + '</strong><span class="uq-group-code">' + esc(g.code) + '</span>' +
          (g.tag ? '<span class="uq-tag">' + esc(g.tag) + '</span>' : '') + '</div>' +
        '<div class="uq-panel' + (low ? ' uq-seats-low' : '') + '"><span class="uq-big">' + esc(g.seats) + '</span><span class="uq-badge">' + (g.seats === 1 ? 'SEAT' : 'SEATS') + '</span></div>' +
        '<div class="uq-flight"><div class="uq-strip">' + esc(g.title || g.code) + '</div><div class="uq-flight-body"><div class="uq-legs">' + legs(g) + '</div>' +
          '<div class="uq-nights"><span class="uq-big">' + esc(g.nights) + '</span><span class="uq-badge">NIGHTS</span></div></div><div class="uq-strip">' + esc(g.title || g.code) + '</div></div>' +
        (comp.length ? '<div class="uq-comp"><div class="uq-comp-head">🎁 COMPLIMENTARY <i>GIFT</i></div>' +
          comp.map(function (c) { return '<div class="uq-comp-item">' + compIcon(c) + ' ' + esc(c) + '</div>'; }).join('') + '</div>' : '') +
        '<div class="uq-price"><div><small>🏷 Starting From</small><div class="uq-amount"><em>PKR</em>' + money(x.min) + '</div><div class="uq-per">' + (n ? 'per person (sharing)' : 'per seat (ticket only)') + '</div>' +
          (n && x.ticket ? '<div class="uq-per">🎫 Ticket only: PKR ' + money(g.ticketPrice) + '</div>' : '') + '</div>' +
          '<div style="display:flex;flex-direction:column;gap:7px;align-items:center"><span class="uq-pill uq-pill-dark">' +
            (n ? '📦 ' + n + ' Package' + (n === 1 ? '' : 's') + ' Available' : '🎫 Ticket Only') + '</span>' +
          '<button type="button" class="uq-pill uq-pill-wa" data-uq-book="' + idx + '">💬 Book Now</button></div></div>' +
      '</div>' +
      (n ? '<button type="button" class="uq-toggle" aria-expanded="false" data-uq-toggle="' + idx + '"><span class="uq-chev">⌄</span> <span class="uq-toggle-text">SHOW PACKAGE DETAILS</span> <span class="uq-count">' + n + ' Packages</span></button>' +
      '<div class="uq-details" hidden></div>' : '') +
    '</article>';
  }

  function hotelCell(name, dist, img, map, city, idx, pi) {
    return '<td class="uq-hotel"><b>' + esc(name || '—') + '</b>' + (dist ? '<span>' + esc(dist) + '</span>' : '<span></span>') +
      '<button type="button" class="uq-mini" data-uq-hotel="' + idx + ':' + pi + ':' + city + '">📍 Show Location</button>' +
      (safeUrl(img) ? '<button type="button" class="uq-mini" data-uq-hotel="' + idx + ':' + pi + ':' + city + '">🖼 View Gallery</button>' : '') + '</td>';
  }

  function details(x, idx) {
    var rows = x.pkgs.map(function (p, pi) {
      return '<tr class="uq-row"><td><div class="uq-pkg-code">' + esc(p.code) + '</div><div class="uq-pkg-n">🕋 Makkah: ' + esc(p.mkN) + ' Nights<br>🕌 Madinah: ' + esc(p.mdN) + ' Nights<br><b>Total: ' + esc(p.nights || x.g.nights) + ' Nights</b></div></td>' +
        hotelCell(p.mk, p.mkDist, p.mkImg, p.mkMap, 'mk', idx, pi) + hotelCell(p.md, p.mdDist, p.mdImg, p.mdMap, 'md', idx, pi) +
        priceCell('Sharing', p.sharing) + priceCell('Quad', p.quad) + priceCell('Triple', p.triple) + priceCell('Double', p.double) +
        '<td class="num" data-label=""><button type="button" class="uq-pill uq-pill-wa" data-uq-book="' + idx + ':' + pi + '">Book</button></td></tr>' +
        '<tr class="uq-extra"><td colspan="8">Child Without Bed: <b>PKR ' + money(p.child) + '</b> &nbsp;|&nbsp; Infant Price: <b>PKR ' + money(p.infant) + '</b></td></tr>';
    }).join('');
    return '<h4>📦 Available Packages (' + x.pkgs.length + ' Packages)</h4><div style="overflow-x:auto"><table class="uq-table"><thead><tr>' +
      '<th>Package</th><th>Makkah Hotel</th><th>Madinah Hotel</th><th class="num">Sharing</th><th class="num">Quad</th><th class="num">Triple</th><th class="num">Double</th><th class="num"></th>' +
      '</tr></thead><tbody>' + rows + '</tbody></table></div>';
    function priceCell(label, v) { return '<td class="num" data-label="' + label + '">' + (v ? 'PKR ' + money(v) : 'On Request') + '</td>'; }
  }

  // ---------- modals ----------
  var hotelModal = $('uqHotelModal'), bookModal = $('uqBookModal'), lastFocus = null;
  function openModal(m) { lastFocus = document.activeElement; m.hidden = false; var f = m.querySelector('input,button.uq-modal-close'); if (f) f.focus(); }
  function closeModal(m) { m.hidden = true; if (lastFocus && lastFocus.focus) lastFocus.focus(); }
  [hotelModal, bookModal].forEach(function (m) {
    if (!m) return;
    m.addEventListener('click', function (ev) { if (ev.target === m || ev.target.closest('[data-uq-close]')) closeModal(m); });
  });
  document.addEventListener('keydown', function (ev) {
    if (ev.key !== 'Escape') return;
    [hotelModal, bookModal].forEach(function (m) { if (m && !m.hidden) closeModal(m); });
  });

  function showHotel(idx, pi, city) {
    var x = view[idx], p = x && x.pkgs[pi]; if (!p) return;
    var name = city === 'mk' ? p.mk : p.md, dist = city === 'mk' ? p.mkDist : p.mdDist,
        img = safeUrl(city === 'mk' ? p.mkImg : p.mdImg), map = safeUrl(city === 'mk' ? p.mkMap : p.mdMap);
    if (!map) map = 'https://www.google.com/maps/search/?api=1&query=' + encodeURIComponent(name + ' ' + (city === 'mk' ? 'Makkah' : 'Madinah'));
    $('uqHotelTitle').textContent = name;
    $('uqHotelCity').textContent = (city === 'mk' ? 'Makkah' : 'Madinah') + ' Hotel';
    $('uqHotelDist').textContent = dist || 'Distance on request';
    var im = $('uqHotelImg');
    if (img) { im.hidden = false; im.src = img; im.alt = name; } else { im.hidden = true; im.removeAttribute('src'); }
    $('uqHotelMap').href = map;
    openModal(hotelModal);
  }

  var booking = null;
  function showBook(idx, pi) {
    var x = view[idx]; if (!x) return;
    booking = { g: x.g, p: pi == null ? null : x.pkgs[pi], min: x.min };
    var g = x.g, p = booking.p;
    $('uqBookSub').textContent = g.airlineName + ' · ' + sectorOf(g) + ' · ' + fmtDate(g.dep.date) + ' · ' + g.nights + ' Nights · ' + g.code + (p ? ' · ' + p.code : '');
    var room = $('uqBookRoom');
    var src = p || x.pkgs[0] || {};
    var opts = [['Sharing', src.sharing], ['Quad', src.quad], ['Triple', src.triple], ['Double', src.double]].filter(function (r) { return r[1]; });
    if (!p && x.ticket) opts.push(['Ticket Only (no hotel)', g.ticketPrice]);
    room.innerHTML = opts.map(function (r) { return '<option value="' + esc(r[0]) + '">' + esc(r[0]) + (p || !x.pkgs.length ? ' — PKR ' + money(r[1]) : '') + '</option>'; }).join('');
    $('uqBookErr').hidden = true;
    openModal(bookModal);
  }

  var bookForm = $('uqBookForm');
  if (bookForm) {
    bookForm.addEventListener('submit', function (ev) {
      ev.preventDefault();
      var name = $('uqBName').value.trim(), phone = $('uqBPhone').value.trim();
      if (!name || phone.replace(/[^0-9]/g, '').length < 10) { $('uqBookErr').hidden = false; return; }
      var b = booking, g = b.g, p = b.p;
      var lines = [
        'Assalam o Alaikum Al Akbar Travel, I want to book this Umrah group package:' + (AGENT ? '\n🏢 B2B Agent: ' + AGENT : ''),
        '✈ ' + g.airlineName + ' (' + g.airline + ') ' + sectorOf(g),
        '📅 Departure: ' + fmtDate(g.dep.date) + ' ' + (g.dep.date || '').slice(0, 4) + ' | ' + g.nights + ' Nights',
        '🎫 Group: ' + g.code + (g.title ? ' (' + g.title + ')' : '') + (g.route ? '\n🛫 Route: ' + g.route : '')
      ];
      if (Array.isArray(g.segments) && g.segments.length > 2) {
        g.segments.forEach(function (sg, n) {
          lines.push((n + 1) + ') ' + [sg.flight, fmtDate(sg.date), sg.from + '-' + sg.to, sg.etd, sg.eta].filter(Boolean).join(' ') + (sg.stay ? ' (Stay: ' + sg.stay + ')' : ''));
        });
      }
      if (p) {
        lines.push('📦 Package: ' + p.code);
        lines.push('🕋 Makkah: ' + p.mk + ' (' + p.mkN + 'N)');
        lines.push('🕌 Madinah: ' + p.md + ' (' + p.mdN + 'N)');
      } else {
        lines.push('💰 Starting from PKR ' + money(b.min) + (b.g.packages.length ? ' (sharing)' : ' per seat (ticket only)'));
      }
      lines.push('🛏 Room: ' + $('uqBookRoom').value);
      lines.push('👤 Name: ' + name);
      lines.push('📞 Phone: ' + phone);
      var city = $('uqBCity').value.trim(); if (city) lines.push('🏙 City: ' + city);
      lines.push('👨‍👩‍👧 Adults: ' + ($('uqBAdults').value || 1) + ', Children: ' + ($('uqBChildren').value || 0) + ', Infants: ' + ($('uqBInfants').value || 0));
      var msg = $('uqBMsg').value.trim(); if (msg) lines.push('📝 ' + msg);
      window.open(waLink(lines.join('\n')), '_blank', 'noopener');
      closeModal(bookModal);
    });
  }

  // ---------- events ----------
  var timer;
  els.search.addEventListener('input', function () {
    clearTimeout(timer);
    timer = setTimeout(function () { state.q = els.search.value.trim().toLowerCase(); apply(); }, 200);
  });
  els.sectors.addEventListener('click', function (ev) {
    var b = ev.target.closest('[data-sector]'); if (!b) return;
    state.sector = b.getAttribute('data-sector');
    els.sectors.querySelectorAll('.uq-sector').forEach(function (s) { s.classList.toggle('active', s === b); });
    apply();
  });
  els.duration.addEventListener('change', function () { state.nights = els.duration.value; apply(); });
  els.month.addEventListener('change', function () { state.month = els.month.value; apply(); });
  els.sort.addEventListener('change', function () { state.sort = els.sort.value; apply(); });
  els.makkah.addEventListener('change', function () { state.makkah = els.makkah.value; apply(); });
  els.madinah.addEventListener('change', function () { state.madinah = els.madinah.value; apply(); });
  els.airlines.addEventListener('change', function (ev) { if (ev.target.name === 'uqAirline') { state.airline = ev.target.value; apply(); } });
  function onRange(ev) {
    var a = +els.minR.value, b = +els.maxR.value;
    if (a > b) { if (ev && ev.target === els.minR) { a = b; els.minR.value = a; } else { b = a; els.maxR.value = b; } }
    state.min = a; state.max = b; paintRange();
    clearTimeout(timer); timer = setTimeout(apply, 120);
  }
  els.minR.addEventListener('input', onRange);
  els.maxR.addEventListener('input', onRange);

  function resetAll() {
    state.q = ''; state.sector = 'all'; state.airline = 'all'; state.nights = ''; state.month = ''; state.makkah = ''; state.madinah = '';
    state.min = state.priceMin; state.max = state.priceMax;
    els.search.value = ''; els.duration.value = ''; els.month.value = ''; els.makkah.value = ''; els.madinah.value = '';
    els.minR.value = state.min; els.maxR.value = state.max; paintRange();
    els.sectors.querySelectorAll('.uq-sector').forEach(function (s) { s.classList.toggle('active', s.getAttribute('data-sector') === 'all'); });
    apply();
  }
  els.reset.addEventListener('click', resetAll);
  if (els.filterToggle) {
    els.filterToggle.addEventListener('click', function () {
      var open = els.sidebar.classList.toggle('open');
      els.filterToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
  }

  els.list.addEventListener('click', function (ev) {
    var t = ev.target.closest('[data-uq-toggle],[data-uq-hotel],[data-uq-book],#uqMore,[data-uq-reset]');
    if (!t) return;
    if (t.id === 'uqMore') { more(); return; }
    if (t.hasAttribute('data-uq-reset')) { resetAll(); return; }
    if (t.hasAttribute('data-uq-toggle')) {
      var idx = +t.getAttribute('data-uq-toggle'), panel = t.nextElementSibling, open = t.getAttribute('aria-expanded') !== 'true';
      if (open && !panel.innerHTML) panel.innerHTML = details(view[idx], idx);   // build table on first open
      panel.hidden = !open;
      t.setAttribute('aria-expanded', open ? 'true' : 'false');
      t.querySelector('.uq-toggle-text').textContent = open ? 'HIDE PACKAGE DETAILS' : 'SHOW PACKAGE DETAILS';
      return;
    }
    if (t.hasAttribute('data-uq-hotel')) {
      var h = t.getAttribute('data-uq-hotel').split(':');
      showHotel(+h[0], +h[1], h[2]);
      return;
    }
    if (t.hasAttribute('data-uq-book')) {
      var bk = t.getAttribute('data-uq-book').split(':');
      showBook(+bk[0], bk.length > 1 ? +bk[1] : null);
    }
  });

  load();
})();
