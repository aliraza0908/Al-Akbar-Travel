/**
 * Al Akbar Travel & Tours (Pvt) Ltd.
 * Future-Ready Creative Luxury Experience Engine
 * Powered by Lenis, GSAP, ScrollTrigger & Kinetic Micro-Interactions
 */

(function () {
  'use strict';

  // ==========================================================================
  // 1. Lenis Smooth Inertia Scroll Synchronized with GSAP
  // ==========================================================================
  var lenis = null;
  var isReducedMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  if (typeof window.Lenis !== 'undefined' && !isReducedMotion) {
    lenis = new window.Lenis({
      duration: 1.15,
      easing: function (t) { return Math.min(1, 1.001 - Math.pow(2, -10 * t)); },
      smoothWheel: true,
      touchMultiplier: 1.3,
      infinite: false
    });

    function raf(time) {
      lenis.raf(time);
      requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);

    if (window.gsap && window.ScrollTrigger) {
      window.gsap.registerPlugin(window.ScrollTrigger);
      lenis.on('scroll', window.ScrollTrigger.update);

      window.gsap.ticker.add(function (time) {
        lenis.raf(time * 1000);
      });
      window.gsap.ticker.lagSmoothing(0);
    }

    // Smooth anchor navigation
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
      anchor.addEventListener('click', function (e) {
        var href = this.getAttribute('href');
        if (href.length > 1) {
          var target = document.querySelector(href);
          if (target) {
            e.preventDefault();
            lenis.scrollTo(target, { offset: -90, duration: 1.2 });
          }
        }
      });
    });
  }

  // ==========================================================================
  // 2. Ambient Starlight & Luxury Dust Particle Canvas
  // ==========================================================================
  var canvas = document.getElementById('ambientLuxuryCanvas');
  if (canvas && !isReducedMotion) {
    var ctx = canvas.getContext('2d');
    var particles = [];
    var particleCount = window.innerWidth < 768 ? 25 : 45;
    var mouse = { x: -1000, y: -1000 };

    function resizeCanvas() {
      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;
    }
    resizeCanvas();
    window.addEventListener('resize', resizeCanvas);

    window.addEventListener('mousemove', function (e) {
      mouse.x = e.clientX;
      mouse.y = e.clientY;
    });

    function Particle() {
      this.reset();
    }
    Particle.prototype.reset = function () {
      this.x = Math.random() * canvas.width;
      this.y = Math.random() * canvas.height;
      this.size = Math.random() * 1.8 + 0.6;
      this.baseX = this.x;
      this.baseY = this.y;
      this.speedX = (Math.random() - 0.5) * 0.35;
      this.speedY = -Math.random() * 0.45 - 0.15;
      this.opacity = Math.random() * 0.6 + 0.2;
      this.pulseSpeed = Math.random() * 0.02 + 0.005;
      this.pulse = Math.random() * Math.PI;
    };

    Particle.prototype.update = function () {
      this.y += this.speedY;
      this.x += this.speedX;
      this.pulse += this.pulseSpeed;

      // Mouse subtle repulsion
      var dx = mouse.x - this.x;
      var dy = mouse.y - this.y;
      var dist = Math.sqrt(dx * dx + dy * dy);
      if (dist < 140) {
        var force = (140 - dist) / 140;
        this.x -= (dx / dist) * force * 1.5;
        this.y -= (dy / dist) * force * 1.5;
      }

      if (this.y < 0) this.y = canvas.height;
      if (this.x < 0) this.x = canvas.width;
      if (this.x > canvas.width) this.x = 0;
    };

    Particle.prototype.draw = function () {
      var currentOpacity = this.opacity * (0.6 + 0.4 * Math.sin(this.pulse));
      ctx.save();
      ctx.beginPath();
      ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
      // Ocean Breeze + Arctic Aqua Luxury palette on light canvas
      if (this.x % 3 === 0) {
        ctx.fillStyle = 'rgba(53, 191, 199, ' + (currentOpacity * 0.45) + ')'; // Bright Aqua
        ctx.shadowColor = 'rgba(53, 191, 199, 0.25)';
      } else if (this.x % 3 === 1) {
        ctx.fillStyle = 'rgba(18, 107, 145, ' + (currentOpacity * 0.35) + ')'; // Ocean Blue
        ctx.shadowColor = 'rgba(18, 107, 145, 0.2)';
      } else {
        ctx.fillStyle = 'rgba(213, 174, 104, ' + (currentOpacity * 0.4) + ')'; // Champagne
        ctx.shadowColor = 'rgba(213, 174, 104, 0.25)';
      }
      ctx.shadowBlur = 8;
      ctx.fill();
      ctx.restore();
    };

    for (var i = 0; i < particleCount; i++) {
      particles.push(new Particle());
    }

    function animateParticles() {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      for (var i = 0; i < particles.length; i++) {
        particles[i].update();
        particles[i].draw();
      }
      requestAnimationFrame(animateParticles);
    }
    requestAnimationFrame(animateParticles);
  }

  // ==========================================================================
  // 3. Floating Island Navigation Scroll Reactivity
  // ==========================================================================
  var islandNav = document.getElementById('islandNav');
  if (islandNav) {
    var handleNavScroll = function () {
      if (window.scrollY > 40) {
        islandNav.classList.add('scrolled');
      } else {
        islandNav.classList.remove('scrolled');
      }
    };
    window.addEventListener('scroll', handleNavScroll, { passive: true });
    handleNavScroll();
  }

  // ==========================================================================
  // 4. Magnetic Interactive Buttons
  // ==========================================================================
  var magneticElements = document.querySelectorAll('.magnetic-btn, .btn-primary, .btn-gold, .drawer-trigger-btn, .theme-toggle-btn, .floating-wa-beacon');
  if (!isReducedMotion && window.matchMedia('(pointer: fine)').matches) {
    magneticElements.forEach(function (el) {
      el.addEventListener('mousemove', function (e) {
        var rect = el.getBoundingClientRect();
        var x = e.clientX - rect.left - rect.width / 2;
        var y = e.clientY - rect.top - rect.height / 2;
        el.style.transform = 'translate3d(' + (x * 0.22) + 'px, ' + (y * 0.22) + 'px, 0)';
      });
      el.addEventListener('mouseleave', function () {
        el.style.transform = 'translate3d(0, 0, 0)';
      });
    });
  }

  // ==========================================================================
  // 5. 3D Tilt Cards with Specular Mouse Reflection
  // ==========================================================================
  var tiltCards = document.querySelectorAll('[data-tilt], .tilt-card, .flight-ticket-card, .umrah-luxury-card, .bento-card, .visa-card, .tour-card');
  if (!isReducedMotion && window.matchMedia('(pointer: fine)').matches) {
    tiltCards.forEach(function (card) {
      card.addEventListener('mousemove', function (e) {
        var rect = card.getBoundingClientRect();
        var x = e.clientX - rect.left;
        var y = e.clientY - rect.top;
        var centerX = rect.width / 2;
        var centerY = rect.height / 2;
        var rotateX = ((y - centerY) / centerY) * -1.5;
        var rotateY = ((x - centerX) / centerX) * 1.5;

        card.style.transform = 'perspective(1600px) rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg) scale3d(1.008, 1.008, 1)';
        card.style.setProperty('--mouse-x', x + 'px');
        card.style.setProperty('--mouse-y', y + 'px');
      });

      card.addEventListener('mouseleave', function () {
        card.style.transform = 'perspective(1600px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)';
      });
    });
  }

  // ==========================================================================
  // 6. 180° Airport Swap Interactive Button
  // ==========================================================================
  var airportSwapBtn = document.getElementById('airportSwapBtn');
  var searchOrigin = document.getElementById('searchOrigin');
  var searchDestination = document.getElementById('searchDestination');
  var isSwapped = false;

  if (airportSwapBtn && searchOrigin && searchDestination) {
    airportSwapBtn.addEventListener('click', function () {
      isSwapped = !isSwapped;
      airportSwapBtn.style.transform = isSwapped ? 'rotate(180deg) scale(1.1)' : 'rotate(0deg) scale(1.1)';

      var tempVal = searchOrigin.value;
      searchOrigin.value = searchDestination.value;
      searchDestination.value = tempVal;

      // Subtle pulse feedback
      [searchOrigin, searchDestination].forEach(function (el) {
        el.style.transition = 'background-color 0.3s, transform 0.2s';
        el.style.backgroundColor = 'rgba(53, 191, 199, 0.22)';
        setTimeout(function () {
          el.style.backgroundColor = '';
        }, 300);
      });
    });
  }

  // ==========================================================================
  // 7. Unified Sovereign Luxury Dark Theme (Single Permanent Theme)
  try {
    localStorage.removeItem('alakbar-theme');
    document.body.classList.remove('light');
  } catch (e) {}

  // 8. Sovereign Slide-Over Luxury Drawer
  // ==========================================================================
  var drawerOverlay = document.getElementById('luxuryDrawerOverlay');
  var drawerPane = document.getElementById('luxuryDrawer');
  var openDrawerBtns = document.querySelectorAll('[data-open-drawer]');
  var closeDrawerBtns = document.querySelectorAll('[data-close-drawer]');

  function openDrawer() {
    if (drawerOverlay && drawerPane) {
      drawerOverlay.classList.add('active');
      drawerPane.classList.add('open');
      document.body.style.overflow = 'hidden';
      if (lenis) lenis.stop();
    }
  }

  function closeDrawer() {
    if (drawerOverlay && drawerPane) {
      drawerPane.classList.remove('open');
      drawerOverlay.classList.remove('active');
      document.body.style.overflow = '';
      if (lenis) lenis.start();
    }
  }

  openDrawerBtns.forEach(function (btn) { btn.addEventListener('click', openDrawer); });
  closeDrawerBtns.forEach(function (btn) { btn.addEventListener('click', closeDrawer); });

  if (drawerOverlay) {
    drawerOverlay.addEventListener('click', function (e) {
      if (e.target === drawerOverlay) closeDrawer();
    });
  }

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      closeDrawer();
      closeB2B();
    }
  });

  // ==========================================================================
  // 9. B2B Partner Portal Modal
  // ==========================================================================
  var b2bModal = document.getElementById('b2bModal');
  var openB2bBtns = document.querySelectorAll('[data-open-b2b]');
  var closeB2bBtns = document.querySelectorAll('[data-close-b2b]');

  function openB2B(e) {
    if (b2bModal) {
      if (e) e.preventDefault();
      b2bModal.classList.add('active');
      document.body.style.overflow = 'hidden';
      if (lenis) lenis.stop();
    }
  }

  function closeB2B() {
    if (b2bModal) {
      b2bModal.classList.remove('active');
      document.body.style.overflow = '';
      if (lenis) lenis.start();
    }
  }

  openB2bBtns.forEach(function (btn) { btn.addEventListener('click', openB2B); });
  closeB2bBtns.forEach(function (btn) { btn.addEventListener('click', closeB2B); });

  if (b2bModal) {
    b2bModal.addEventListener('click', function (e) {
      if (e.target === b2bModal) closeB2B();
    });
  }

  // ==========================================================================
  // 10. Hero Multi-Tab Search Console Switcher & Redirection
  // ==========================================================================
  var searchTabBtns = document.querySelectorAll('.search-tab-btn');
  var heroSearchForm = document.getElementById('heroSearchForm');
  if (searchTabBtns.length && heroSearchForm) {
    var originSelect = document.getElementById('searchOrigin');
    var destSelect = document.getElementById('searchDestination');
    var originLabel = document.getElementById('searchOriginLabel');
    var destLabel = document.getElementById('searchDestLabel');
    var submitBtn = document.getElementById('searchSubmitBtn');

    var searchConfigs = {
      flights: {
        page: 'flights.php',
        originLabel: 'DEPARTURE AIRPORT',
        destLabel: 'DESTINATION AIRPORT',
        origins: ['Lahore (LHE)', 'Karachi (KHI)', 'Islamabad (ISB)', 'Multan (MUX)', 'Sialkot (SKT)', 'Faisalabad (LYP)'],
        dests: ['Dubai (DXB)', 'Jeddah (JED)', 'Madinah (MED)', 'Barcelona (BCN)', 'London (LHR)', 'Manchester (MAN)', 'Doha (DOH)', 'Istanbul (IST)', 'Baku (GYD)', 'Bangkok (BKK)', 'Kuala Lumpur (KUL)'],
        btnText: 'Explore Flight Deals →'
      },
      umrah: {
        page: 'umrah.php',
        originLabel: 'DEPARTURE CITY',
        destLabel: 'SACRED DESTINATION',
        origins: ['Lahore (Allama Iqbal)', 'Islamabad (Intl)', 'Karachi (Jinnah Intl)', 'Multan', 'Sialkot'],
        dests: ['Makkah & Madinah (VIP)', 'Makkah Direct (Clock Tower)', 'Madinah First (Markaziah)', 'Executive VIP Custom Private'],
        btnText: 'View Umrah 2026 Packages →'
      },
      visas: {
        page: 'visas.php',
        originLabel: 'CITIZENSHIP / RESIDENCE',
        destLabel: 'TARGET DESTINATION',
        origins: ['Pakistan Passport', 'Overseas Pakistani (GCC)', 'UK / European Resident'],
        dests: ['Saudi Arabia Tourist E-Visa', 'Dubai / UAE 30 & 60 Days', 'Turkey E-Visa & Sticker', 'Baku (Azerbaijan) Fast', 'Malaysia & Thailand Tourist', 'UK & Schengen Assessment'],
        btnText: 'Check Visa Requirements →'
      },
      tours: {
        page: 'tours.php',
        originLabel: 'STARTING POINT',
        destLabel: 'EXPEDITION HUB',
        origins: ['Pakistan Departures', 'Custom Regional Joiner'],
        dests: ['Baku Explorer (5 Days)', 'Turkey Grand Tour (7 Days)', 'Thailand Paradise (6 Days)', 'Dubai Luxury Staycation (5 Days)', 'Hunza & Skardu Expedition (7 Days)'],
        btnText: 'Explore Curated Tours →'
      },
      hotels: {
        page: 'hotels.php',
        originLabel: 'CITY / DISTRICT',
        destLabel: 'HOTEL CATEGORY',
        origins: ['Makkah Al Mukarramah', 'Madinah Al Munawwarah', 'Dubai Central', 'Istanbul Taksim'],
        dests: ['5-Star Haram Front Row (Clock Tower)', '4-Star Luxury Walking Distance', 'Premium Economy Shuttle Direct', 'Executive VIP Suite Club'],
        btnText: 'Search Live Room Tariff →'
      }
    };

    searchTabBtns.forEach(function (tab) {
      tab.addEventListener('click', function () {
        searchTabBtns.forEach(function (t) { t.classList.remove('active'); });
        tab.classList.add('active');

        var tabKey = tab.getAttribute('data-tab') || 'flights';
        var cfg = searchConfigs[tabKey] || searchConfigs.flights;

        heroSearchForm.setAttribute('data-target-page', cfg.page);
        if (originLabel) originLabel.textContent = cfg.originLabel;
        if (destLabel) destLabel.textContent = cfg.destLabel;
        if (submitBtn) submitBtn.innerHTML = cfg.btnText;

        if (originSelect && cfg.origins) {
          originSelect.innerHTML = cfg.origins.map(function (o) { return '<option value="' + o + '">' + o + '</option>'; }).join('');
        }
        if (destSelect && cfg.dests) {
          destSelect.innerHTML = cfg.dests.map(function (d) { return '<option value="' + d + '">' + d + '</option>'; }).join('');
        }
      });
    });

    heroSearchForm.addEventListener('submit', function (e) {
      e.preventDefault();
      var targetPage = heroSearchForm.getAttribute('data-target-page') || 'flights.php';
      var origin = originSelect ? originSelect.value : '';
      var dest = destSelect ? destSelect.value : '';
      var date = document.getElementById('searchDateInput') ? document.getElementById('searchDateInput').value : '';
      var cabin = document.getElementById('searchCabinClass') ? document.getElementById('searchCabinClass').value : '';

      var params = new URLSearchParams();
      if (origin) params.append('origin', origin);
      if (dest) params.append('dest', dest);
      if (date) params.append('date', date);
      if (cabin) params.append('cabin', cabin);

      window.location.href = targetPage + (params.toString() ? '?' + params.toString() : '');
    });
  }

  // ==========================================================================
  // 11. Quick Route Chips Action
  // ==========================================================================
  document.querySelectorAll('.quick-route-chip').forEach(function (chip) {
    chip.addEventListener('click', function () {
      var dest = chip.getAttribute('data-dest');
      if (dest && searchDestination) {
        searchDestination.value = dest;
        var submit = document.getElementById('searchSubmitBtn');
        if (submit) {
          submit.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
          submit.style.transform = 'scale(1.05)';
          setTimeout(function () { submit.style.transform = ''; }, 300);
        }
      }
    });
  });

  // ==========================================================================
  // 12. GSAP ScrollTrigger Animations & Parallax
  // ==========================================================================
  if (window.gsap && window.ScrollTrigger && !isReducedMotion) {
    // Staggered reveal for cards & sections
    var revealElements = document.querySelectorAll('.reveal');
    revealElements.forEach(function (el) {
      window.gsap.fromTo(el, 
        { opacity: 0, y: 35 },
        {
          opacity: 1,
          y: 0,
          duration: 0.9,
          ease: 'power3.out',
          scrollTrigger: {
            trigger: el,
            start: 'top 88%',
            toggleActions: 'play none none none'
          }
        }
      );
    });

    // Parallax background shifts on hero elements
    var heroGlow = document.querySelector('.hero-backdrop-glow');
    if (heroGlow) {
      window.gsap.to(heroGlow, {
        y: 120,
        ease: 'none',
        scrollTrigger: {
          trigger: '.hero',
          start: 'top top',
          end: 'bottom top',
          scrub: true
        }
      });
    }

    // Number Counter Animation
    document.querySelectorAll('[data-count]').forEach(function (counter) {
      var targetVal = parseInt(counter.getAttribute('data-count'), 10);
      var suffix = counter.getAttribute('data-suffix') || '';
      if (!isNaN(targetVal)) {
        var obj = { val: 0 };
        window.gsap.to(obj, {
          val: targetVal,
          duration: 2,
          ease: 'power2.out',
          scrollTrigger: {
            trigger: counter,
            start: 'top 92%',
            toggleActions: 'play none none none'
          },
          onUpdate: function () {
            counter.textContent = Math.floor(obj.val).toLocaleString() + suffix;
          }
        });
      }
    });
  }

})();
