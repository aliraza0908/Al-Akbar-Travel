<?php
$pageTitle = "Makkah & Madinah Hotels Tariff 2026 — Al Akbar Travel & Tours";
$pageDesc = "Verified per-bed room rates and hotel tariffs for Makkah Clock Tower, Anjum Hotel, and Madinah Markaziah stays within walking distance of Haram.";
$currentPage = "hotels";
$extraCss = '<style>
.tariff-section { padding: 40px 0 80px; }
.tariff-card {
  background: var(--glass-card);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-md);
  border: 1.5px solid var(--border);
  overflow: hidden;
  margin-bottom: 40px;
  transition: all 0.3s ease;
}
.tariff-head {
  background: linear-gradient(135deg, #126B91 0%, #17364B 100%);
  color: #fff;
  padding: 22px 30px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  border-bottom: 3px solid var(--aqua);
}
.tariff-head h2 { font-size: 1.5rem; color: #ffffff; margin: 0; display: flex; align-items: center; gap: 10px; }
.tariff-head .subtitle { font-size: 0.9rem; color: var(--gold-bright); margin: 4px 0 0; }
.tariff-table-wrap { overflow-x: auto; -webkit-overflow-scrolling: touch; }
.tariff-table { width: 100%; border-collapse: collapse; text-align: center; font-size: 0.88rem; min-width: 980px; }
.tariff-table th { background: linear-gradient(135deg, #126B91 0%, #17364B 100%); color: #ffffff; font-weight: 800; text-transform: uppercase; letter-spacing: 0.04em; padding: 14px 10px; border: 1px solid rgba(255, 255, 255, 0.1); font-size: 0.82rem; }
.tariff-table th.col-hotel { text-align: left; padding-left: 20px; width: 26%; }
.tariff-table td { padding: 12px 10px; border: 1px solid var(--border); vertical-align: middle; color: var(--ink); }
.tariff-table tr:nth-child(even) td { background: rgba(255, 255, 255, 0.02); }
body.light .tariff-table tr:nth-child(even) td { background: #f8f6f0; }
.tariff-table tr:hover td { background: rgba(212, 175, 55, 0.08); }
body.light .tariff-table tr:hover td { background: #ede6d8; }
.tariff-table td.hotel-cell { text-align: left; padding-left: 20px; }
.hotel-title { font-weight: 800; font-size: 0.98rem; color: var(--ink); display: flex; align-items: center; gap: 8px; flex-wrap: wrap; }
.hotel-sub { font-size: 0.78rem; color: var(--gold-bright); font-weight: 700; margin-top: 3px; text-transform: uppercase; }
.badge-star { display: inline-block; background: rgba(212, 175, 55, 0.15); color: var(--gold-bright); border: 1px solid var(--gold); border-radius: 4px; font-size: 0.72rem; font-weight: 800; padding: 2px 7px; }
.badge-dist { display: inline-block; background: rgba(255, 255, 255, 0.06); color: var(--ink-secondary); border-radius: 4px; font-weight: 700; font-size: 0.8rem; padding: 2px 8px; border: 1px solid var(--border); }
.rate-val { font-weight: 800; font-size: 0.96rem; color: var(--gold-bright); }
.rate-na { color: var(--muted); font-size: 0.8rem; }
.inquire-btn-cell { background: #25d366 !important; color: #fff !important; border-radius: 999px; padding: 6px 14px; font-size: 0.76rem; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 5px; transition: transform 0.2s; }
.inquire-btn-cell:hover { transform: scale(1.06); text-decoration: none; }
.tariff-controls { display: flex; align-items: center; justify-content: space-between; gap: 16px; margin-bottom: 28px; flex-wrap: wrap; }
.tariff-filter-btns { display: flex; gap: 10px; flex-wrap: wrap; }
.tariff-filter-btn { background: var(--bg-surface); border: 1.5px solid var(--border); border-radius: var(--radius-pill); padding: 9px 22px; font-weight: 700; font-size: 0.9rem; color: var(--ink); cursor: pointer; transition: all 0.2s; font-family: inherit; }
.tariff-filter-btn.active, .tariff-filter-btn:hover { background: linear-gradient(135deg, #126B91 0%, #17364B 100%); color: #ffffff; border-color: transparent; box-shadow: var(--shadow-md); }
.tariff-search-box { position: relative; max-width: 360px; width: 100%; }
.tariff-search-box input { width: 100%; padding: 10px 16px 10px 40px; border-radius: var(--radius-pill); border: 1.5px solid var(--border); outline: none; font-size: 0.92rem; background: var(--bg-surface); color: var(--ink); font-family: inherit; }
.tariff-search-box::before { content: "🔍"; position: absolute; left: 14px; top: 11px; font-size: 0.9rem; pointer-events: none; }
</style>';
$extraJs = '<script>
(function() {
  const tabs = document.querySelectorAll("[data-tariff-tab]");
  const search = document.getElementById("hotelSearch");
  const makkahCard = document.getElementById("makkahTariffCard");
  const madinahCard = document.getElementById("madinahTariffCard");
  const rows = document.querySelectorAll(".tariff-table tbody tr");

  tabs.forEach(tab => {
    tab.addEventListener("click", () => {
      tabs.forEach(t => t.classList.remove("active"));
      tab.classList.add("active");
      const val = tab.getAttribute("data-tariff-tab");
      if (val === "all") {
        if (makkahCard) makkahCard.style.display = "";
        if (madinahCard) madinahCard.style.display = "";
      } else if (val === "makkah") {
        if (makkahCard) makkahCard.style.display = "";
        if (madinahCard) madinahCard.style.display = "none";
      } else if (val === "madinah") {
        if (makkahCard) makkahCard.style.display = "none";
        if (madinahCard) madinahCard.style.display = "";
      }
    });
  });

  if (search) {
    search.addEventListener("input", () => {
      const q = search.value.toLowerCase().trim();
      rows.forEach(r => {
        const text = r.innerText.toLowerCase();
        r.style.display = (q === "" || text.includes(q)) ? "" : "none";
      });
    });
  }
})();
</script>';
include 'includes/header.php';
?>

<!-- ==========================================================================
     CINEMATIC OCEAN LUXURY HERO — SANCTUARY HOTELS (PENTHOUSE SUITES)
     ========================================================================== -->
<section class="hero-inner hero-hotels section-pearl">
  <div class="hero-backdrop-glow"></div>
  <div class="container hero-content">
    <div class="hero-pill-badge reveal stagger-1">
      <span class="pulse-badge-gold"></span>
      <span>VERIFIED HARAM HOTELS · OFFICIAL 2026 TARIFF CHART</span>
    </div>
    
    <h1 class="reveal stagger-2">
      <span class="ocean-gradient-text font-display">SANCTUARY SUITES.</span><br>
      MAKKAH &amp; MADINAH HOTEL TARIFFS
    </h1>
    
    <p class="hero-subtitle reveal stagger-3">
      Guaranteed corporate contracted room rates for Makkah Clock Tower, Anjum Hotel, and Madinah Central Markaziah stays within walking distance of the Holy Mosques.
    </p>
    
    <div class="hero-actions reveal stagger-4">
      <a class="btn btn-whatsapp btn-lg" href="https://wa.me/923078455527?text=Assalam%20o%20Alaikum!%20I%20would%20like%20to%20inquire%20about%20Makkah%20and%20Madinah%20hotel%20rates." target="_blank" rel="noopener">
        <?php echo luxIcon('whatsapp', 'lux-icon', 18); ?> Inquire Room Rates on WhatsApp
      </a>
      <a class="btn btn-outline btn-lg" href="tel:+923078455527">
        <?php echo luxIcon('phone', 'lux-icon', 18); ?> Call Desk: 0307-8455527
      </a>
    </div>
    
    <div class="hero-trust-bar reveal stagger-5">
      <div class="trust-card">
        <div class="trust-card-icon"><?php echo luxIcon('kaaba', 'lux-icon', 24); ?></div>
        <div>
          <div class="trust-card-val">0-Step Haram</div>
          <div class="trust-card-lbl">Direct Courtyard Access</div>
        </div>
      </div>
      <div class="trust-card">
        <div class="trust-card-icon"><?php echo luxIcon('star', 'lux-icon', 24); ?></div>
        <div>
          <div class="trust-card-val">3★, 4★, 5★</div>
          <div class="trust-card-lbl">Every Budget Level</div>
        </div>
      </div>
      <div class="trust-card">
        <div class="trust-card-icon"><?php echo luxIcon('hotel', 'lux-icon', 24); ?></div>
        <div>
          <div class="trust-card-val">Quad/Triple/Dbl</div>
          <div class="trust-card-lbl">Transparent Per-Bed Rates</div>
        </div>
      </div>
      <div class="trust-card">
        <div class="trust-card-icon"><?php echo luxIcon('voucher', 'lux-icon', 24); ?></div>
        <div>
          <div class="trust-card-val">Instant Voucher</div>
          <div class="trust-card-lbl">Official Booking Slips</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Existing Info Card with Madinah Photo (Soft Sky Blue section) -->
<section class="section-sky" style="background:#E5F2F8;padding:60px 0;"><div class="container">
  <div class="info-card reveal">
    <h3>Book Your Stay With Al Akbar Travel</h3>
    <p class="muted">Whether you need luxury 5-star clock tower hotels with Kaaba views, comfortable 3-star saver hotels near Haram in Makkah and Madinah, or worldwide business and holiday stays — we arrange confirmed bookings with the best corporate rates.</p>
    <p class="center" style="margin-top:20px">
      <img src="assets/images/hotels_hero_luxury.jpg" alt="Luxury 5-Star Haram Front Hotel Suites" style="border-radius:14px;max-height:360px;width:100%;object-fit:cover;box-shadow:var(--shadow-md);" loading="lazy">
    </p>
  </div>
</div></section>

<!-- Hotel Tariff Section -->
<section class="tariff-section section-pearl" style="background:#F7FAFC;">
  <div class="container">
    
    <div class="section-head" style="margin-bottom:20px">
      <div class="section-head-main">
        <p class="eyebrow">Official Hotel Rates &amp; Tariffs</p>
        <h2>Makkah &amp; Madinah Hotels Rate Chart</h2>
      </div>
      <p class="muted section-desc">Sharing, Quint, Quad, Triple and Double room rates across top Makkah and Madinah hotels with distances from Haram.</p>
    </div>

    <!-- Filter & Search Controls -->
    <div class="tariff-controls">
      <div class="tariff-filter-btns">
        <button type="button" class="tariff-filter-btn active" data-tariff-tab="all">All Hotels</button>
        <button type="button" class="tariff-filter-btn" data-tariff-tab="makkah">🕋 Makkah Hotels (16)</button>
        <button type="button" class="tariff-filter-btn" data-tariff-tab="madinah">🕌 Madinah Hotels (17)</button>
      </div>
      <div class="tariff-search-box">
        <input type="text" id="hotelSearch" placeholder="Search hotel name, location or distance...">
      </div>
    </div>

    <!-- MAKKAH HOTELS TABLE -->
    <div class="tariff-card reveal" id="block-makkah">
      <div class="tariff-head">
        <div>
          <h2><?php echo luxIcon('kaaba', 'lux-icon', 24); ?> Makkah Mukarramah Hotels</h2>
          <p class="subtitle">Complete hotel options, walking distances &amp; room sharing rates</p>
        </div>
        <a class="btn btn-whatsapp btn-sm" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel%21%20I%20want%20to%20inquire%20about%20Makkah%20Hotel%20rates." target="_blank" rel="noopener">💬 WhatsApp Inquiry</a>
      </div>

      <div class="tariff-table-wrap">
        <table class="tariff-table">
          <thead>
            <tr>
              <th class="col-hotel">Makkah Hotel</th>
              <th>Distance</th>
              <th>Room Type</th>
              <th>Nights Upto</th>
              <th>Sharing</th>
              <th>Quint <span style="font-weight:500;font-size:0.7rem">(Limited)</span></th>
              <th>Quad</th>
              <th>TRP</th>
              <th>DBL</th>
              <th style="width:90px">Inquire</th>
            </tr>
          </thead>
          <tbody>
                                          <tr class="hotel-row" data-search="ajwa ziafa or similar azizia shuttle servise">
                  <td class="hotel-cell">
                    <div class="hotel-title">
                      <span>AJWA ZIAFA OR SIMILAR</span>
                      <span class="badge-star">2 STAR</span>
                    </div>
                    <div class="hotel-sub">AZIZIA</div>
                  </td>
                  <td><span class="badge-dist">SHUTTLE SERVISE</span></td>
                  <td><span class="badge-room">SHARING</span></td>
                  <td style="font-size:0.75rem;font-weight:600;color:#555">29 SEP TO 20 OCT</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td>
                    <a class="inquire-btn-cell" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel%21%20I%20want%20to%20book%20Makkah%20Hotel%3A%20AJWA%20ZIAFA%20OR%20SIMILAR" target="_blank" rel="noopener">Book</a>
                  </td>
                </tr>
                                                        <!-- Multi-Period Hotel (VOCO) -->
                                  <tr class="hotel-row" data-search="hotel number one 3 ibrahim khalil road shuttle servise">
                                          <td class="hotel-cell" rowspan="4">
                        <div class="hotel-title">
                          <span>HOTEL NUMBER ONE 3</span>
                          <span class="badge-star">3 STAR</span>
                        </div>
                        <div class="hotel-sub">IBRAHIM KHALIL ROAD</div>
                                              </td>
                      <td rowspan="4"><span class="badge-dist">SHUTTLE SERVISE</span></td>
                      <td rowspan="4"><span class="badge-room">SHARING</span></td>
                                        <td style="font-size:0.75rem;font-weight:700;color:#0a1a30">01 NOV TO 15 DEC</td>
                    <td class="rate-val">15</td>
                    <td class="rate-val">75</td>
                    <td class="rate-val">75</td>
                    <td class="rate-val">75</td>
                    <td class="rate-val">75</td>
                                          <td rowspan="4">
                        <a class="inquire-btn-cell" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel%21%20I%20want%20to%20book%20Makkah%20Hotel%3A%20HOTEL%20NUMBER%20ONE%203" target="_blank" rel="noopener">Book</a>
                      </td>
                                      </tr>
                                  <tr class="hotel-row" data-search="hotel number one 3 ibrahim khalil road shuttle servise">
                                        <td style="font-size:0.75rem;font-weight:700;color:#0a1a30">15 DEC TO 05 FEB</td>
                    <td class="rate-val">17</td>
                    <td class="rate-val">85</td>
                    <td class="rate-val">85</td>
                    <td class="rate-val">85</td>
                    <td class="rate-val">85</td>
                                      </tr>
                                  <tr class="hotel-row" data-search="hotel number one 3 ibrahim khalil road shuttle servise">
                                        <td style="font-size:0.75rem;font-weight:700;color:#0a1a30">05 FEB TO 27 FEB (RAMZAN 1ST &amp; 2ND ASHRA)</td>
                    <td class="rate-val">31</td>
                    <td class="rate-val">155</td>
                    <td class="rate-val">155</td>
                    <td class="rate-val">155</td>
                    <td class="rate-val">155</td>
                                      </tr>
                                  <tr class="hotel-row" data-search="hotel number one 3 ibrahim khalil road shuttle servise">
                                        <td style="font-size:0.75rem;font-weight:700;color:#0a1a30">27 FEB TO 10 MAR (RAMZAN LAST ASHRA)</td>
                    <td class="rate-val">50</td>
                    <td class="rate-val">250</td>
                    <td class="rate-val">250</td>
                    <td class="rate-val">250</td>
                    <td class="rate-val">250</td>
                                      </tr>
                                                                        <tr class="hotel-row" data-search="qila ajyad main ajyad road 1000 meter, comp/shuttle">
                  <td class="hotel-cell">
                    <div class="hotel-title">
                      <span>QILA AJYAD</span>
                      <span class="badge-star">2 STAR</span>
                    </div>
                    <div class="hotel-sub">MAIN AJYAD ROAD</div>
                  </td>
                  <td><span class="badge-dist">1000 METER, COMP/SHUTTLE</span></td>
                  <td><span class="badge-room">SHARING</span></td>
                  <td style="font-size:0.75rem;font-weight:600;color:#555">29 SEP TO 20 OCT</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td>
                    <a class="inquire-btn-cell" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel%21%20I%20want%20to%20book%20Makkah%20Hotel%3A%20QILA%20AJYAD" target="_blank" rel="noopener">Book</a>
                  </td>
                </tr>
                                                        <tr class="hotel-row" data-search="dyar matar ibrahim khalil road, misfillah 1200 meter">
                  <td class="hotel-cell">
                    <div class="hotel-title">
                      <span>DYAR MATAR</span>
                      <span class="badge-star">ECONOMY</span>
                    </div>
                    <div class="hotel-sub">IBRAHIM KHALIL ROAD, MISFILLAH</div>
                  </td>
                  <td><span class="badge-dist">1200 METER</span></td>
                  <td><span class="badge-room">SHARING</span></td>
                  <td style="font-size:0.75rem;font-weight:600;color:#555">29 SEP TO 20 OCT</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td>
                    <a class="inquire-btn-cell" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel%21%20I%20want%20to%20book%20Makkah%20Hotel%3A%20DYAR%20MATAR" target="_blank" rel="noopener">Book</a>
                  </td>
                </tr>
                                                        <tr class="hotel-row" data-search="jada khalil main ibrahim khalil road 1200 meter">
                  <td class="hotel-cell">
                    <div class="hotel-title">
                      <span>JADA KHALIL</span>
                      <span class="badge-star">2 STAR</span>
                    </div>
                    <div class="hotel-sub">MAIN IBRAHIM KHALIL ROAD</div>
                  </td>
                  <td><span class="badge-dist">1200 METER</span></td>
                  <td><span class="badge-room">SHARING</span></td>
                  <td style="font-size:0.75rem;font-weight:600;color:#555">29 SEP TO 20 OCT</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td>
                    <a class="inquire-btn-cell" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel%21%20I%20want%20to%20book%20Makkah%20Hotel%3A%20JADA%20KHALIL" target="_blank" rel="noopener">Book</a>
                  </td>
                </tr>
                                                        <tr class="hotel-row" data-search="lolo touheed main ibrahim khalil road 900 meter">
                  <td class="hotel-cell">
                    <div class="hotel-title">
                      <span>LOLO TOUHEED</span>
                      <span class="badge-star">2 STAR</span>
                    </div>
                    <div class="hotel-sub">MAIN IBRAHIM KHALIL ROAD</div>
                  </td>
                  <td><span class="badge-dist">900 METER</span></td>
                  <td><span class="badge-room">SHARING</span></td>
                  <td style="font-size:0.75rem;font-weight:600;color:#555">29 SEP TO 20 OCT</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td>
                    <a class="inquire-btn-cell" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel%21%20I%20want%20to%20book%20Makkah%20Hotel%3A%20LOLO%20TOUHEED" target="_blank" rel="noopener">Book</a>
                  </td>
                </tr>
                                                        <!-- Multi-Period Hotel (VOCO) -->
                                  <tr class="hotel-row" data-search="fundaq haris in side kubri ibrahim khalil road 800 meter">
                                          <td class="hotel-cell" rowspan="2">
                        <div class="hotel-title">
                          <span>FUNDAQ HARIS</span>
                          <span class="badge-star">STAR</span>
                        </div>
                        <div class="hotel-sub">IN SIDE KUBRI IBRAHIM KHALIL ROAD</div>
                                              </td>
                      <td rowspan="2"><span class="badge-dist">800 METER</span></td>
                      <td rowspan="2"><span class="badge-room">SHARING</span></td>
                                        <td style="font-size:0.75rem;font-weight:700;color:#0a1a30">01 NOV TO 15 DEC</td>
                    <td class="rate-na">N/A</td>
                    <td class="rate-na">N/A</td>
                    <td class="rate-na">N/A</td>
                    <td class="rate-na">N/A</td>
                    <td class="rate-na">N/A</td>
                                          <td rowspan="2">
                        <a class="inquire-btn-cell" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel%21%20I%20want%20to%20book%20Makkah%20Hotel%3A%20FUNDAQ%20HARIS" target="_blank" rel="noopener">Book</a>
                      </td>
                                      </tr>
                                  <tr class="hotel-row" data-search="fundaq haris in side kubri ibrahim khalil road 800 meter">
                                        <td style="font-size:0.75rem;font-weight:700;color:#0a1a30">15 DEC TO 05 FEB</td>
                    <td class="rate-na">N/A</td>
                    <td class="rate-na">N/A</td>
                    <td class="rate-val"></td>
                    <td class="rate-val"></td>
                    <td class="rate-val"></td>
                                      </tr>
                                                                        <tr class="hotel-row" data-search="multiqa ibadat &amp; tara jawrat hijra road misfillah 750-800 meter">
                  <td class="hotel-cell">
                    <div class="hotel-title">
                      <span>MULTIQA IBADAT &amp; TARA JAWRAT</span>
                      <span class="badge-star">STAR</span>
                    </div>
                    <div class="hotel-sub">HIJRA ROAD MISFILLAH</div>
                  </td>
                  <td><span class="badge-dist">750-800 METER</span></td>
                  <td><span class="badge-room">SHARING</span></td>
                  <td style="font-size:0.75rem;font-weight:600;color:#555">29 SEP TO 20 OCT</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td>
                    <a class="inquire-btn-cell" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel%21%20I%20want%20to%20book%20Makkah%20Hotel%3A%20MULTIQA%20IBADAT%20%26%20TARA%20JAWRAT" target="_blank" rel="noopener">Book</a>
                  </td>
                </tr>
                                                        <tr class="hotel-row" data-search="zad al bait ibrahim khalil road 750 meter">
                  <td class="hotel-cell">
                    <div class="hotel-title">
                      <span>ZAD AL BAIT</span>
                      <span class="badge-star">2 STAR</span>
                    </div>
                    <div class="hotel-sub">IBRAHIM KHALIL ROAD</div>
                  </td>
                  <td><span class="badge-dist">750 METER</span></td>
                  <td><span class="badge-room">SHARING</span></td>
                  <td style="font-size:0.75rem;font-weight:600;color:#555">29 SEP TO 20 OCT</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td>
                    <a class="inquire-btn-cell" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel%21%20I%20want%20to%20book%20Makkah%20Hotel%3A%20ZAD%20AL%20BAIT" target="_blank" rel="noopener">Book</a>
                  </td>
                </tr>
                                                        <tr class="hotel-row" data-search="makaram hijra ex burj abbas hijra road 650 meter">
                  <td class="hotel-cell">
                    <div class="hotel-title">
                      <span>MAKARAM HIJRA EX BURJ ABBAS</span>
                      <span class="badge-star">3 STAR</span>
                    </div>
                    <div class="hotel-sub">HIJRA ROAD</div>
                  </td>
                  <td><span class="badge-dist">650 METER</span></td>
                  <td><span class="badge-room">SHARING</span></td>
                  <td style="font-size:0.75rem;font-weight:600;color:#555">29 SEP TO 20 OCT</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td>
                    <a class="inquire-btn-cell" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel%21%20I%20want%20to%20book%20Makkah%20Hotel%3A%20MAKARAM%20HIJRA%20EX%20BURJ%20ABBAS" target="_blank" rel="noopener">Book</a>
                  </td>
                </tr>
                                                        <tr class="hotel-row" data-search="jafria (masar al aeez 2) hijra road misfillah 550-600 meter">
                  <td class="hotel-cell">
                    <div class="hotel-title">
                      <span>JAFRIA (MASAR AL AEEZ 2)</span>
                      <span class="badge-star">ECONOMY PLUS</span>
                    </div>
                    <div class="hotel-sub">HIJRA ROAD MISFILLAH</div>
                  </td>
                  <td><span class="badge-dist">550-600 METER</span></td>
                  <td><span class="badge-room">SHARING</span></td>
                  <td style="font-size:0.75rem;font-weight:600;color:#555">29 SEP TO 20 OCT</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td>
                    <a class="inquire-btn-cell" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel%21%20I%20want%20to%20book%20Makkah%20Hotel%3A%20JAFRIA%20%28MASAR%20AL%20AEEZ%202%29" target="_blank" rel="noopener">Book</a>
                  </td>
                </tr>
                                                        <tr class="hotel-row" data-search="jawrat bait (arafat zehbi) ibrahim khalil road 600 meter">
                  <td class="hotel-cell">
                    <div class="hotel-title">
                      <span>JAWRAT BAIT (ARAFAT ZEHBI)</span>
                      <span class="badge-star">STAR</span>
                    </div>
                    <div class="hotel-sub">IBRAHIM KHALIL ROAD</div>
                  </td>
                  <td><span class="badge-dist">600 METER</span></td>
                  <td><span class="badge-room">SHARING</span></td>
                  <td style="font-size:0.75rem;font-weight:600;color:#555">29 SEP TO 20 OCT</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td>
                    <a class="inquire-btn-cell" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel%21%20I%20want%20to%20book%20Makkah%20Hotel%3A%20JAWRAT%20BAIT%20%28ARAFAT%20ZEHBI%29" target="_blank" rel="noopener">Book</a>
                  </td>
                </tr>
                                                        <tr class="hotel-row" data-search="mira shaeb haram facing. front row. ghaza side 400 meter">
                  <td class="hotel-cell">
                    <div class="hotel-title">
                      <span>MIRA SHAEB</span>
                      <span class="badge-star">3 STAR</span>
                    </div>
                    <div class="hotel-sub">HARAM FACING. FRONT ROW. GHAZA SIDE</div>
                  </td>
                  <td><span class="badge-dist">400 METER</span></td>
                  <td><span class="badge-room">SHARING</span></td>
                  <td style="font-size:0.75rem;font-weight:600;color:#555">29 SEP TO 20 OCT</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td>
                    <a class="inquire-btn-cell" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel%21%20I%20want%20to%20book%20Makkah%20Hotel%3A%20MIRA%20SHAEB" target="_blank" rel="noopener">Book</a>
                  </td>
                </tr>
                                                        <tr class="hotel-row" data-search="mather al jewar or similar hijra road 550 meter">
                  <td class="hotel-cell">
                    <div class="hotel-title">
                      <span>MATHER AL JEWAR OR SIMILAR</span>
                      <span class="badge-star">3 STAR</span>
                    </div>
                    <div class="hotel-sub">HIJRA ROAD</div>
                  </td>
                  <td><span class="badge-dist">550 METER</span></td>
                  <td><span class="badge-room">SHARING</span></td>
                  <td style="font-size:0.75rem;font-weight:600;color:#555">29 SEP TO 20 OCT</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td>
                    <a class="inquire-btn-cell" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel%21%20I%20want%20to%20book%20Makkah%20Hotel%3A%20MATHER%20AL%20JEWAR%20OR%20SIMILAR" target="_blank" rel="noopener">Book</a>
                  </td>
                </tr>
                                                        <tr class="hotel-row" data-search="blora moazan ibrahim khalil road 350-400 meter">
                  <td class="hotel-cell">
                    <div class="hotel-title">
                      <span>BLORA MOAZAN</span>
                      <span class="badge-star">2 STAR</span>
                    </div>
                    <div class="hotel-sub">IBRAHIM KHALIL ROAD</div>
                  </td>
                  <td><span class="badge-dist">350-400 METER</span></td>
                  <td><span class="badge-room">SHARING</span></td>
                  <td style="font-size:0.75rem;font-weight:600;color:#555">29 SEP TO 20 OCT</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td>
                    <a class="inquire-btn-cell" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel%21%20I%20want%20to%20book%20Makkah%20Hotel%3A%20BLORA%20MOAZAN" target="_blank" rel="noopener">Book</a>
                  </td>
                </tr>
                                                        <tr class="hotel-row" data-search="emar andulusia main ibrahim khalil road misfillah 300 meter">
                  <td class="hotel-cell">
                    <div class="hotel-title">
                      <span>EMAR ANDULUSIA</span>
                      <span class="badge-star">3 STAR</span>
                    </div>
                    <div class="hotel-sub">MAIN IBRAHIM KHALIL ROAD MISFILLAH</div>
                  </td>
                  <td><span class="badge-dist">300 METER</span></td>
                  <td><span class="badge-room">ROOM BASIS</span></td>
                  <td style="font-size:0.75rem;font-weight:600;color:#555">29 SEP TO 20 OCT</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td>
                    <a class="inquire-btn-cell" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel%21%20I%20want%20to%20book%20Makkah%20Hotel%3A%20EMAR%20ANDULUSIA" target="_blank" rel="noopener">Book</a>
                  </td>
                </tr>
                                    </tbody>
        </table>
      </div>
    </div>

    <!-- MADINAH HOTELS TABLE -->
    <div class="tariff-card reveal" id="block-madinah">
      <div class="tariff-head" style="border-bottom-color:#10b981">
        <div>
          <h2 style="color:#a7f3d0">🕌 Madinah Munawwarah Hotels</h2>
          <p class="subtitle">Complete hotel options, Markazia distances &amp; room sharing rates</p>
        </div>
        <a class="btn btn-whatsapp btn-sm" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel%21%20I%20want%20to%20inquire%20about%20Madinah%20Hotel%20rates." target="_blank" rel="noopener">💬 WhatsApp Inquiry</a>
      </div>

      <div class="tariff-table-wrap">
        <table class="tariff-table">
          <thead>
            <tr>
              <th class="col-hotel">Madinah Hotel</th>
              <th>Distance</th>
              <th>Room Type</th>
              <th>Nights Upto</th>
              <th>Sharing</th>
              <th>Quint <span style="font-weight:500;font-size:0.7rem">(Limited)</span></th>
              <th>Quad</th>
              <th>TRP</th>
              <th>DBL</th>
              <th style="width:90px">Inquire</th>
            </tr>
          </thead>
          <tbody>
                                          <tr class="hotel-row" data-search="retaj al madina qurbab road 1200 shuttle service">
                  <td class="hotel-cell">
                    <div class="hotel-title">
                      <span>RETAJ AL MADINA</span>
                      <span class="badge-star">2 STAR</span>
                    </div>
                    <div class="hotel-sub">QURBAB ROAD</div>
                  </td>
                  <td><span class="badge-dist">1200 SHUTTLE SERVICE</span></td>
                  <td><span class="badge-room">SHARING</span></td>
                  <td style="font-size:0.75rem;font-weight:600;color:#555">29 SEP TO 20 OCT</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td>
                    <a class="inquire-btn-cell" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel%21%20I%20want%20to%20book%20Madinah%20Hotel%3A%20RETAJ%20AL%20MADINA" target="_blank" rel="noopener">Book</a>
                  </td>
                </tr>
                                                        <tr class="hotel-row" data-search="kinan madina qurbab road bilal masjid side 900 meter">
                  <td class="hotel-cell">
                    <div class="hotel-title">
                      <span>KINAN MADINA</span>
                      <span class="badge-star">ECONOMY PLUS</span>
                    </div>
                    <div class="hotel-sub">QURBAB ROAD BILAL MASJID SIDE</div>
                  </td>
                  <td><span class="badge-dist">900 METER</span></td>
                  <td><span class="badge-room">SHARING</span></td>
                  <td style="font-size:0.75rem;font-weight:600;color:#555">29 SEP TO 20 OCT</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td>
                    <a class="inquire-btn-cell" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel%21%20I%20want%20to%20book%20Madinah%20Hotel%3A%20KINAN%20MADINA" target="_blank" rel="noopener">Book</a>
                  </td>
                </tr>
                                                        <tr class="hotel-row" data-search="shaza hijra shahram-e-salam side 850 meter">
                  <td class="hotel-cell">
                    <div class="hotel-title">
                      <span>SHAZA HIJRA</span>
                      <span class="badge-star">2 STAR</span>
                    </div>
                    <div class="hotel-sub">SHAHRAM-E-SALAM SIDE</div>
                  </td>
                  <td><span class="badge-dist">850 METER</span></td>
                  <td><span class="badge-room">SHARING</span></td>
                  <td style="font-size:0.75rem;font-weight:600;color:#555">29 SEP TO 20 OCT</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td>
                    <a class="inquire-btn-cell" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel%21%20I%20want%20to%20book%20Madinah%20Hotel%3A%20SHAZA%20HIJRA" target="_blank" rel="noopener">Book</a>
                  </td>
                </tr>
                                                        <tr class="hotel-row" data-search="rol al salam back side of widyar al madina 800-850 meter">
                  <td class="hotel-cell">
                    <div class="hotel-title">
                      <span>ROL AL SALAM</span>
                      <span class="badge-star">STAR</span>
                    </div>
                    <div class="hotel-sub">BACK SIDE OF WIDYAR AL MADINA</div>
                  </td>
                  <td><span class="badge-dist">800-850 METER</span></td>
                  <td><span class="badge-room">SHARING</span></td>
                  <td style="font-size:0.75rem;font-weight:600;color:#555">29 SEP TO 20 OCT</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td>
                    <a class="inquire-btn-cell" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel%21%20I%20want%20to%20book%20Madinah%20Hotel%3A%20ROL%20AL%20SALAM" target="_blank" rel="noopener">Book</a>
                  </td>
                </tr>
                                                        <tr class="hotel-row" data-search="shaza aman shahram-e-salam side 750 meter">
                  <td class="hotel-cell">
                    <div class="hotel-title">
                      <span>SHAZA AMAN</span>
                      <span class="badge-star">STAR</span>
                    </div>
                    <div class="hotel-sub">SHAHRAM-E-SALAM SIDE</div>
                  </td>
                  <td><span class="badge-dist">750 METER</span></td>
                  <td><span class="badge-room">SHARING</span></td>
                  <td style="font-size:0.75rem;font-weight:600;color:#555">29 SEP TO 20 OCT</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td>
                    <a class="inquire-btn-cell" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel%21%20I%20want%20to%20book%20Madinah%20Hotel%3A%20SHAZA%20AMAN" target="_blank" rel="noopener">Book</a>
                  </td>
                </tr>
                                                        <tr class="hotel-row" data-search="shaza munawara king fahad road opposite top 10 750-800 meter">
                  <td class="hotel-cell">
                    <div class="hotel-title">
                      <span>SHAZA MUNAWARA</span>
                      <span class="badge-star">2 STAR</span>
                    </div>
                    <div class="hotel-sub">KING FAHAD ROAD OPPOSITE TOP 10</div>
                  </td>
                  <td><span class="badge-dist">750-800 METER</span></td>
                  <td><span class="badge-room">SHARING</span></td>
                  <td style="font-size:0.75rem;font-weight:600;color:#555">29 SEP TO 20 OCT</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td>
                    <a class="inquire-btn-cell" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel%21%20I%20want%20to%20book%20Madinah%20Hotel%3A%20SHAZA%20MUNAWARA" target="_blank" rel="noopener">Book</a>
                  </td>
                </tr>
                                                        <tr class="hotel-row" data-search="dar ajyal 1 shumalia ladies gate side 750 meter">
                  <td class="hotel-cell">
                    <div class="hotel-title">
                      <span>DAR AJYAL 1</span>
                      <span class="badge-star">ECONOMY PLUS</span>
                    </div>
                    <div class="hotel-sub">SHUMALIA LADIES GATE SIDE</div>
                  </td>
                  <td><span class="badge-dist">750 METER</span></td>
                  <td><span class="badge-room">SHARING</span></td>
                  <td style="font-size:0.75rem;font-weight:600;color:#555">29 SEP TO 20 OCT</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td>
                    <a class="inquire-btn-cell" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel%21%20I%20want%20to%20book%20Madinah%20Hotel%3A%20DAR%20AJYAL%201" target="_blank" rel="noopener">Book</a>
                  </td>
                </tr>
                                                        <tr class="hotel-row" data-search="abdullah fouzan (dyar hijaz) qurbab road bilal masjid side 600 meter">
                  <td class="hotel-cell">
                    <div class="hotel-title">
                      <span>ABDULLAH FOUZAN (DYAR HIJAZ)</span>
                      <span class="badge-star">ECONOMY</span>
                    </div>
                    <div class="hotel-sub">QURBAB ROAD BILAL MASJID SIDE</div>
                  </td>
                  <td><span class="badge-dist">600 METER</span></td>
                  <td><span class="badge-room">SHARING</span></td>
                  <td style="font-size:0.75rem;font-weight:600;color:#555">29 SEP TO 20 OCT</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td>
                    <a class="inquire-btn-cell" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel%21%20I%20want%20to%20book%20Madinah%20Hotel%3A%20ABDULLAH%20FOUZAN%20%28DYAR%20HIJAZ%29" target="_blank" rel="noopener">Book</a>
                  </td>
                </tr>
                                                        <tr class="hotel-row" data-search="karam al dhabiya qurbab road bilal masjid side 550 meter">
                  <td class="hotel-cell">
                    <div class="hotel-title">
                      <span>KARAM AL DHABIYA</span>
                      <span class="badge-star">STAR</span>
                    </div>
                    <div class="hotel-sub">QURBAB ROAD BILAL MASJID SIDE</div>
                  </td>
                  <td><span class="badge-dist">550 METER</span></td>
                  <td><span class="badge-room">SHARING</span></td>
                  <td style="font-size:0.75rem;font-weight:600;color:#555">29 SEP TO 20 OCT</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td>
                    <a class="inquire-btn-cell" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel%21%20I%20want%20to%20book%20Madinah%20Hotel%3A%20KARAM%20AL%20DHABIYA" target="_blank" rel="noopener">Book</a>
                  </td>
                </tr>
                                                        <tr class="hotel-row" data-search="rou al zehbi qurbab road bilal masjid side 550 meter">
                  <td class="hotel-cell">
                    <div class="hotel-title">
                      <span>ROU AL ZEHBI</span>
                      <span class="badge-star">STAR</span>
                    </div>
                    <div class="hotel-sub">QURBAB ROAD BILAL MASJID SIDE</div>
                  </td>
                  <td><span class="badge-dist">550 METER</span></td>
                  <td><span class="badge-room">SHARING</span></td>
                  <td style="font-size:0.75rem;font-weight:600;color:#555">29 SEP TO 20 OCT</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td>
                    <a class="inquire-btn-cell" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel%21%20I%20want%20to%20book%20Madinah%20Hotel%3A%20ROU%20AL%20ZEHBI" target="_blank" rel="noopener">Book</a>
                  </td>
                </tr>
                                                        <tr class="hotel-row" data-search="nasar plus qurbab road bilal masjid side 500 meter">
                  <td class="hotel-cell">
                    <div class="hotel-title">
                      <span>NASAR PLUS</span>
                      <span class="badge-star">ECONOMY PLUS</span>
                    </div>
                    <div class="hotel-sub">QURBAB ROAD BILAL MASJID SIDE</div>
                  </td>
                  <td><span class="badge-dist">500 METER</span></td>
                  <td><span class="badge-room">SHARING</span></td>
                  <td style="font-size:0.75rem;font-weight:600;color:#555">29 SEP TO 20 OCT</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td>
                    <a class="inquire-btn-cell" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel%21%20I%20want%20to%20book%20Madinah%20Hotel%3A%20NASAR%20PLUS" target="_blank" rel="noopener">Book</a>
                  </td>
                </tr>
                                                        <tr class="hotel-row" data-search="mahad al madina 2 near bilal masjid 450-500 meter">
                  <td class="hotel-cell">
                    <div class="hotel-title">
                      <span>MAHAD AL MADINA 2</span>
                      <span class="badge-star">STAR</span>
                    </div>
                    <div class="hotel-sub">NEAR BILAL MASJID</div>
                  </td>
                  <td><span class="badge-dist">450-500 METER</span></td>
                  <td><span class="badge-room">SHARING</span></td>
                  <td style="font-size:0.75rem;font-weight:600;color:#555">29 SEP TO 20 OCT</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td>
                    <a class="inquire-btn-cell" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel%21%20I%20want%20to%20book%20Madinah%20Hotel%3A%20MAHAD%20AL%20MADINA%202" target="_blank" rel="noopener">Book</a>
                  </td>
                </tr>
                                                        <tr class="hotel-row" data-search="diyar al aws entrance of quba street 450 meter">
                  <td class="hotel-cell">
                    <div class="hotel-title">
                      <span>DIYAR AL AWS</span>
                      <span class="badge-star">ECONOMY PLUS</span>
                    </div>
                    <div class="hotel-sub">ENTRANCE OF QUBA STREET</div>
                  </td>
                  <td><span class="badge-dist">450 METER</span></td>
                  <td><span class="badge-room">SHARING</span></td>
                  <td style="font-size:0.75rem;font-weight:600;color:#555">29 SEP TO 20 OCT</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td>
                    <a class="inquire-btn-cell" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel%21%20I%20want%20to%20book%20Madinah%20Hotel%3A%20DIYAR%20AL%20AWS" target="_blank" rel="noopener">Book</a>
                  </td>
                </tr>
                                                        <tr class="hotel-row" data-search="widyar al madina / rou khair bab salam (first row at the neck of markazia) 350 meter">
                  <td class="hotel-cell">
                    <div class="hotel-title">
                      <span>WIDYAR AL MADINA / ROU KHAIR</span>
                      <span class="badge-star">STAR</span>
                    </div>
                    <div class="hotel-sub">BAB SALAM (FIRST ROW AT THE NECK OF MARKAZIA)</div>
                  </td>
                  <td><span class="badge-dist">350 METER</span></td>
                  <td><span class="badge-room">SHARING</span></td>
                  <td style="font-size:0.75rem;font-weight:600;color:#555">29 SEP TO 20 OCT</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td>
                    <a class="inquire-btn-cell" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel%21%20I%20want%20to%20book%20Madinah%20Hotel%3A%20WIDYAR%20AL%20MADINA%20%2F%20ROU%20KHAIR" target="_blank" rel="noopener">Book</a>
                  </td>
                </tr>
                                                        <tr class="hotel-row" data-search="shaza zafrani bab salam (first row at the neck of markazia) 350 meter">
                  <td class="hotel-cell">
                    <div class="hotel-title">
                      <span>SHAZA ZAFRANI</span>
                      <span class="badge-star">STAR</span>
                    </div>
                    <div class="hotel-sub">BAB SALAM (FIRST ROW AT THE NECK OF MARKAZIA)</div>
                  </td>
                  <td><span class="badge-dist">350 METER</span></td>
                  <td><span class="badge-room">SHARING</span></td>
                  <td style="font-size:0.75rem;font-weight:600;color:#555">29 SEP TO 20 OCT</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td>
                    <a class="inquire-btn-cell" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel%21%20I%20want%20to%20book%20Madinah%20Hotel%3A%20SHAZA%20ZAFRANI" target="_blank" rel="noopener">Book</a>
                  </td>
                </tr>
                                                        <tr class="hotel-row" data-search="abraj taiba silver or similar markazia 150-200 meter">
                  <td class="hotel-cell">
                    <div class="hotel-title">
                      <span>ABRAJ TAIBA SILVER OR SIMILAR</span>
                      <span class="badge-star">3 STAR</span>
                    </div>
                    <div class="hotel-sub">MARKAZIA</div>
                  </td>
                  <td><span class="badge-dist">150-200 METER</span></td>
                  <td><span class="badge-room">SHARING</span></td>
                  <td style="font-size:0.75rem;font-weight:600;color:#555">29 SEP TO 20 OCT</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td>
                    <a class="inquire-btn-cell" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel%21%20I%20want%20to%20book%20Madinah%20Hotel%3A%20ABRAJ%20TAIBA%20SILVER%20OR%20SIMILAR" target="_blank" rel="noopener">Book</a>
                  </td>
                </tr>
                                                        <tr class="hotel-row" data-search="rou taiba markazia behind masjid ghamama 100 meter">
                  <td class="hotel-cell">
                    <div class="hotel-title">
                      <span>ROU TAIBA</span>
                      <span class="badge-star">2 STAR</span>
                    </div>
                    <div class="hotel-sub">MARKAZIA BEHIND MASJID GHAMAMA</div>
                  </td>
                  <td><span class="badge-dist">100 METER</span></td>
                  <td><span class="badge-room">SHARING</span></td>
                  <td style="font-size:0.75rem;font-weight:600;color:#555">29 SEP TO 20 OCT</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td class="rate-na">N/A</td>
                  <td>
                    <a class="inquire-btn-cell" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel%21%20I%20want%20to%20book%20Madinah%20Hotel%3A%20ROU%20TAIBA" target="_blank" rel="noopener">Book</a>
                  </td>
                </tr>
                                    </tbody>
        </table>
      </div>
    </div>

    <!-- Footnote Banner dynamically rendered -->
        <div class="tariff-footnote">
      <span>📌</span>
      <div>
        <strong>IMPORTANT POLICY NOTE:</strong> IF THERE IS NO SPACE IN ROU TAIBA, IN THAT CASE WE CAN ACCOMMODATE NEW VOUCHERS IN MARKAZIA / SIMILAR OPTION (ROOM BASIS)      </div>
    </div>
    
  </div>
</section>

<!-- Bottom CTA Band (Existing) -->
<section class="cta-band" style="margin-top:20px">
  <div class="container">
    <h2>Need Hotel Reservations?</h2>
    <p>Send us your check-in dates, number of guests, and preferred location for instant room options and discounted rates.</p>
    <p>
      <a class="btn btn-whatsapp" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel%21%20I%20want%20to%20inquire%20about%20travel%20packages" target="_blank" rel="noopener">💬 WhatsApp Hotel Inquiry</a>
      <a class="btn btn-gold" href="tel:+923078455527">📞 Call: 0307-8455527</a>
    </p>
  </div>
</section>

<script>
// Tab Switching
document.querySelectorAll('[data-tariff-tab]').forEach(btn => {
  btn.addEventListener('click', () => {
    document.querySelectorAll('[data-tariff-tab]').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');

    const tab = btn.getAttribute('data-tariff-tab');
    const blockMakkah = document.getElementById('block-makkah');
    const blockMadinah = document.getElementById('block-madinah');

    if (tab === 'all') {
      blockMakkah.style.display = 'block';
      blockMadinah.style.display = 'block';
    } else if (tab === 'makkah') {
      blockMakkah.style.display = 'block';
      blockMadinah.style.display = 'none';
    } else if (tab === 'madinah') {
      blockMakkah.style.display = 'none';
      blockMadinah.style.display = 'block';
    }
  });
});

// Real-time Hotel Search Filter
const searchInput = document.getElementById('hotelSearch');
if (searchInput) {
  searchInput.addEventListener('input', () => {
    const term = searchInput.value.toLowerCase().trim();
    document.querySelectorAll('.hotel-row').forEach(row => {
      const text = row.getAttribute('data-search') || '';
      row.style.display = (text.indexOf(term) !== -1) ? '' : 'none';
    });
  });
}
</script>



<?php include 'includes/footer.php'; ?>
