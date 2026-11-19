<?php
$pageTitle = "Umrah Packages 2026 — Al Akbar Travel & Tours (Pvt) Ltd.";
$pageDesc = "Direct confirmed flight seats & luxury Umrah packages for 2026. Live availability with Makkah Clock Tower, Anjum Hotel, and Madinah Markaziah stays.";
$currentPage = "umrah";
$extraCss = '<link rel="stylesheet" href="assets/css/umrah.css?v=12">';
$extraJs = '<script src="assets/js/umrah.js?v=12"></script>';
include 'includes/header.php';
?>

<!-- ==========================================================================
     CINEMATIC OCEAN LUXURY HERO — SOVEREIGN UMRAH 2026 (HOLY HARAM MAKKAH)
     ========================================================================== -->
<section class="hero-inner hero-umrah section-pearl">
  <div class="hero-backdrop-glow"></div>
  <div class="container hero-content">
    <div class="hero-pill-badge reveal stagger-1">
      <span class="pulse-badge-gold"></span>
      <span>OFFICIAL UMRAH SERVICES 2026 · VERIFIED HARAM ACCOMMODATIONS</span>
    </div>
    
    <h1 class="reveal stagger-2">
      <span class="ocean-gradient-text font-display">SACRED SANCTUARIES.</span><br>
      CONFIRMED UMRAH PACKAGES 2026
    </h1>
    
    <p class="hero-subtitle reveal stagger-3">
      Direct group flight departures from Pakistan, luxury 5-star clock tower accommodations, verified per-bed QUAD/TRIPLE/DOUBLE room tariffs, and dedicated ground Muallim care in Makkah &amp; Madinah.
    </p>
    
    <div class="hero-actions reveal stagger-4">
      <a class="btn btn-whatsapp btn-lg" href="https://wa.me/923078455527?text=Assalam%20o%20Alaikum!%20I%20would%20like%20to%20book%20an%20Umrah%20package%202026." target="_blank" rel="noopener">
        <?php echo luxIcon('whatsapp', 'lux-icon', 18); ?> VIP WhatsApp Booking
      </a>
      <a class="btn btn-outline btn-lg" href="tel:+923078455527">
        <?php echo luxIcon('phone', 'lux-icon', 18); ?> Umrah Desk: 0307-8455527
      </a>
    </div>
    
    <div class="hero-trust-bar reveal stagger-5">
      <div class="trust-card">
        <div class="trust-card-icon"><?php echo luxIcon('kaaba', 'lux-icon', 24); ?></div>
        <div>
          <div class="trust-card-val">5★ Clock Tower</div>
          <div class="trust-card-lbl">Kaaba Facing Stays</div>
        </div>
      </div>
      <div class="trust-card">
        <div class="trust-card-icon"><?php echo luxIcon('flight', 'lux-icon', 24); ?></div>
        <div>
          <div class="trust-card-val">Direct Flights</div>
          <div class="trust-card-lbl">Saudia, PIA, AirBlue</div>
        </div>
      </div>
      <div class="trust-card">
        <div class="trust-card-icon"><?php echo luxIcon('shield', 'lux-icon', 24); ?></div>
        <div>
          <div class="trust-card-val">Govt. DTS</div>
          <div class="trust-card-lbl">Licensed Muallims</div>
        </div>
      </div>
      <div class="trust-card">
        <div class="trust-card-icon"><?php echo luxIcon('water', 'lux-icon', 24); ?></div>
        <div>
          <div class="trust-card-val">Free Zamzam</div>
          <div class="trust-card-lbl">5L Allowance Included</div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="uq-page">

<!-- Toolbar Section -->
<section class="uq-toolbar" aria-label="Search Umrah group departures">
  <div class="container">
    <div class="uq-toolbar-top">
      <div class="uq-title">
        <span class="uq-chip-dark">✈ Group Departures</span>
        <h1>Direct Flights & Guaranteed Seat Packages</h1>
      </div>
      <div class="uq-stat-pill">✈ <b id="uqPillFlights">0</b> Flights with <b id="uqPillPkgs">0</b> Live Packages</div>
    </div>
    
    <div class="uq-controls">
      <div class="uq-field uq-field-search">
        <label for="uqSearch">Search Live Packages</label>
        <input type="search" id="uqSearch" class="uq-input" placeholder="🔍 Search by airline, hotel, code…" autocomplete="off">
      </div>
      
      <div class="uq-field uq-field-sector">
        <span class="uq-label">Travel Sector</span>
        <div class="uq-sectors" id="uqSectors" role="group" aria-label="Sector">
          <button type="button" class="uq-sector active" data-sector="all">All</button>
        </div>
      </div>
      
      <div class="uq-field">
        <label for="uqDuration">Duration</label>
        <select id="uqDuration" class="uq-select">
          <option value="">All Durations</option>
        </select>
      </div>
      
      <div class="uq-field">
        <label for="uqMonth">Travel Month</label>
        <select id="uqMonth" class="uq-select">
          <option value="">Any Month</option>
        </select>
      </div>
      
      <div class="uq-field">
        <label for="uqSort">Sort Results</label>
        <select id="uqSort" class="uq-select">
          <option value="date">Travel Date (Nearest First)</option>
          <option value="priceAsc">Price (Lowest to Highest)</option>
          <option value="priceDesc">Price (Highest to Lowest)</option>
          <option value="seats">Available Seats</option>
          <option value="nights">Duration (Longest)</option>
        </select>
      </div>
    </div>
  </div>
</section>

<!-- Dynamic Live Application Engine -->
<section class="uq-body">
  <div class="container">
    <button type="button" class="btn btn-primary btn-sm uq-filter-toggle" id="uqFilterToggle" aria-expanded="false" aria-controls="uqSidebar">
      ⚙ Toggle Filters
    </button>
    
    <div class="uq-layout" id="uqApp"
         data-api="data/umrah-packages.json"
         data-agent=""
         data-whatsapp="923078455527"
         data-complimentary='["Taif Ziyarat","Umrah from Taif","Makkah Ziyarat","Madina Ziyarat"]'>

      <!-- Sidebar Filters -->
      <aside class="uq-sidebar" id="uqSidebar" aria-label="Filters">
        <div class="uq-side-head">
          <h2>Filter Packages</h2>
          <span class="uq-count-chip" id="uqSideCount">0 Flights</span>
        </div>
        
        <div class="uq-side-block">
          <h3>✈ Preferred Airline</h3>
          <div id="uqAirlines"></div>
        </div>
        
        <div class="uq-side-block">
          <h3>🏷 Price Range (PKR Sharing)</h3>
          <div class="uq-range">
            <div class="uq-range-track"></div>
            <div class="uq-range-fill" id="uqRangeFill"></div>
            <input type="range" id="uqMin" aria-label="Minimum price" min="0" max="0" value="0">
            <input type="range" id="uqMax" aria-label="Maximum price" min="0" max="0" value="0">
          </div>
          <div class="uq-range-vals">
            <span id="uqMinVal">0</span>
            <span id="uqMaxVal">0</span>
          </div>
        </div>
        
        <div class="uq-side-block">
          <h3><label for="uqMakkah">🕋 Makkah Hotel</label></h3>
          <select id="uqMakkah" class="uq-select">
            <option value="">All Makkah Hotels</option>
          </select>
        </div>
        
        <div class="uq-side-block">
          <h3><label for="uqMadinah">🕌 Madinah Hotel</label></h3>
          <select id="uqMadinah" class="uq-select">
            <option value="">All Madinah Hotels</option>
          </select>
        </div>
        
        <button type="button" class="uq-reset" id="uqReset">↺ Reset All Filters</button>
      </aside>

      <!-- Results Display -->
      <div class="uq-results">
        <div class="uq-summary">
          <div class="uq-summary-icon">✈</div>
          <div>
            <h2><span id="uqSumFlights">0</span> Flights with <b id="uqSumPkgs">0</b> Packages</h2>
            <p>Showing verified group flight departures with room tariffs & hotel distances</p>
          </div>
          <span class="uq-live" id="uqLive">Live Availability</span>
        </div>
        
        <div id="uqList" aria-live="polite">
          <div class="uq-state">
            <div class="uq-spinner"></div>
            Loading live Umrah packages…
          </div>
        </div>
        
        <noscript>
          <div class="uq-state">
            Please enable JavaScript to see live packages, or 
            <a href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel!%20I%20want%20to%20inquire%20about%20Umrah%20packages.">message us on WhatsApp</a>.
          </div>
        </noscript>
      </div>
    </div>
  </div>
</section>

<!-- Custom Tailor-Made Packages Section -->
<section class="section-light uq-custom">
  <div class="container">
    <div class="section-head reveal">
      <div class="section-head-main">
        <p class="eyebrow">Tailor-Made Pilgrimages</p>
        <h2>Custom & VIP Umrah Packages</h2>
      </div>
      <p class="section-desc">Need customized travel dates, private VIP SUV transfers, or specific Clock Tower suites? Our experienced team crafts bespoke itineraries for families and senior pilgrims.</p>
    </div>
    
    <div class="grid grid-3">
      <!-- Card 1 -->
      <article class="card reveal stagger-1">
        <span class="tag">3 STAR ECONOMY</span>
        <h3>14 Days Saver Umrah Package</h3>
        <p class="muted">
          <strong>Makkah:</strong> Al-Kiswah Towers — 600m Shuttle to Haram<br>
          <strong>Madinah:</strong> Waqf Al Safi — 350m Walk to Prophet's Mosque
        </p>
        <p class="small muted" style="margin-top:auto;padding-top:10px;">Includes: Complete AC Bus Transport · Visa with Insurance · Historical Ziarats · 24/7 Muallim Desk</p>
        <a class="btn btn-whatsapp btn-sm" href="https://wa.me/923078455527?text=Assalam%20o%20Alaikum%20Al%20Akbar%20Travel%2C%20I%20want%20to%20inquire%20about%20the%2014%20Days%20Saver%20Umrah%20Package." target="_blank" rel="noopener">
          Inquire For Best Rates
        </a>
      </article>

      <!-- Card 2 -->
      <article class="card reveal stagger-2" style="border:1.5px solid var(--gold);">
        <div>
          <span class="tag">4 STAR EXECUTIVE</span>
          <span class="tag tag-gold">⭐ MOST POPULAR</span>
        </div>
        <h3>14 Days Executive Markaziah Package</h3>
        <p class="muted">
          <strong>Makkah:</strong> Anjum Hotel / Blora Moazan (350m Haram Walk)<br>
          <strong>Madinah:</strong> Sajaa Al Madinah (350m Northern Markaziah)
        </p>
        <p class="small muted" style="margin-top:auto;padding-top:10px;">Includes: Close to Haram Stays · Private Luxury Coaster · Fast E-Visa · Complete Ziarats with Scholar</p>
        <a class="btn btn-whatsapp btn-sm" href="https://wa.me/923078455527?text=Assalam%20o%20Alaikum%20Al%20Akbar%20Travel%2C%20I%20want%20to%20inquire%20about%20the%2014%20Days%20Executive%20Markaziah%20Package." target="_blank" rel="noopener">
          Inquire For Best Rates
        </a>
      </article>

      <!-- Card 3 -->
      <article class="card reveal stagger-3">
        <span class="tag" style="background:#fef3c7;color:#92400e;">5 STAR VIP TOWER</span>
        <h3>10 Days Clock Tower VIP Package</h3>
        <p class="muted">
          <strong>Makkah:</strong> Fairmont Makkah Clock Royal Tower / Pullman Zamzam<br>
          <strong>Madinah:</strong> The Oberoi / Dar Al Taqwa (Front Courtyard)
        </p>
        <p class="small muted" style="margin-top:auto;padding-top:10px;">Includes: Daily 5-Star Buffet Breakfast · Private Chauffeur SUV · Haramain Bullet Train · VIP Airport Meet & Assist</p>
        <a class="btn btn-whatsapp btn-sm" href="https://wa.me/923078455527?text=Assalam%20o%20Alaikum%20Al%20Akbar%20Travel%2C%20I%20want%20to%20inquire%20about%20the%2010%20Days%20Clock%20Tower%20VIP%20Package." target="_blank" rel="noopener">
          Inquire For Best Rates
        </a>
      </article>
    </div>
  </div>
</section>

<!-- CTA Band -->
<section class="cta-band">
  <div class="container">
    <h2>Planning An Umrah Group Or Family Trip?</h2>
    <p>Our Sahiwal head office team is available 24/7. Tell us your tentative travel dates and group requirements, and we will formulate the perfect itinerary within 5 minutes.</p>
    <div class="cta-band-actions">
      <a class="btn btn-whatsapp btn-lg" href="https://wa.me/923078455527?text=Assalam%20o%20Alaikum%20Al%20Akbar%20Travel%2C%20I%20want%20custom%20Umrah%20planning%20assistance." target="_blank" rel="noopener">
        💬 Chat With An Umrah Specialist
      </a>
      <a class="btn btn-gold btn-lg" href="tel:+923078455527">
        📞 Call Us: 0307-8455527
      </a>
    </div>
  </div>
</section>

<!-- Hotel Modal -->
<div class="uq-modal" id="uqHotelModal" hidden role="dialog" aria-modal="true" aria-labelledby="uqHotelTitle">
  <div class="uq-modal-card">
    <button type="button" class="uq-modal-close" data-uq-close aria-label="Close">×</button>
    <p class="eyebrow" id="uqHotelCity">Hotel Details</p>
    <h3 id="uqHotelTitle">Hotel</h3>
    <p class="uq-modal-sub">📍 <span id="uqHotelDist"></span></p>
    <img id="uqHotelImg" class="uq-gallery-img" alt="Hotel Photo" hidden style="border-radius:12px;margin:14px 0;width:100%;max-height:260px;object-fit:cover;">
    <div class="uq-modal-actions" style="margin-top:20px;display:flex;gap:12px;justify-content:flex-end;">
      <button type="button" class="btn btn-sm btn-outline-dark" data-uq-close>Close</button>
      <a class="btn btn-primary btn-sm" id="uqHotelMap" href="#" target="_blank" rel="noopener">🗺 Open in Google Maps</a>
    </div>
  </div>
</div>

<!-- Booking Inquiry Modal -->
<div class="uq-modal" id="uqBookModal" hidden role="dialog" aria-modal="true" aria-labelledby="uqBookTitle">
  <div class="uq-modal-card">
    <button type="button" class="uq-modal-close" data-uq-close aria-label="Close">×</button>
    <h3 id="uqBookTitle">Book This Umrah Package</h3>
    <p class="uq-modal-sub" id="uqBookSub" style="color:var(--muted);font-size:0.9rem;margin-bottom:18px;"></p>
    <form id="uqBookForm" novalidate>
      <div class="uq-form-grid" style="display:grid;grid-template-columns:1fr 1fr;gap:14px;">
        <div class="form-group">
          <label class="form-label" for="uqBName">Full Name *</label>
          <input type="text" id="uqBName" class="form-control" autocomplete="name" required placeholder="Your Name">
        </div>
        <div class="form-group">
          <label class="form-label" for="uqBPhone">Phone / WhatsApp *</label>
          <input type="tel" id="uqBPhone" class="form-control" autocomplete="tel" placeholder="03XX-XXXXXXX" required>
        </div>
        <div class="form-group">
          <label class="form-label" for="uqBCity">City</label>
          <input type="text" id="uqBCity" class="form-control" autocomplete="address-level2" placeholder="e.g. Sahiwal, Lahore">
        </div>
        <div class="form-group">
          <label class="form-label" for="uqBookRoom">Room Sharing</label>
          <select id="uqBookRoom" class="form-control"></select>
        </div>
        <div class="form-group">
          <label class="form-label" for="uqBAdults">Adults</label>
          <input type="number" id="uqBAdults" class="form-control" min="1" max="50" value="1">
        </div>
        <div class="form-group">
          <label class="form-label" for="uqBChildren">Children</label>
          <input type="number" id="uqBChildren" class="form-control" min="0" max="50" value="0">
        </div>
      </div>
      <div class="form-group">
        <label class="form-label" for="uqBMsg">Special Requests / Inquiries</label>
        <textarea id="uqBMsg" class="form-control" rows="3" placeholder="Any specific hotel preference, date flexibility, or wheelchair assistance?"></textarea>
      </div>
      <p class="form-error" id="uqBookErr" hidden>Please enter your name and a valid phone number.</p>
      <div class="uq-modal-actions" style="display:flex;justify-content:flex-end;gap:12px;margin-top:18px;">
        <button type="button" class="btn btn-sm btn-outline-dark" data-uq-close>Cancel</button>
        <button type="submit" class="btn btn-whatsapp btn-sm">💬 Send Booking Inquiry on WhatsApp</button>
      </div>
    </form>
  </div>
</div>

</div>

<?php include 'includes/footer.php'; ?>
