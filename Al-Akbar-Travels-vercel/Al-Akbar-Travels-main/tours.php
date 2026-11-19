<?php
$pageTitle = "Curated Holiday Packages — Al Akbar Travel & Tours (Pvt) Ltd.";
$pageDesc = "Discover scenic Pakistan and worldwide holiday tours. Swat, Hunza, Skardu, Baku, Istanbul, and Dubai with luxury transport, deluxe hotels, and tour guides.";
$currentPage = "tours";
include 'includes/header.php';
?>

<!-- ==========================================================================
     CINEMATIC OCEAN LUXURY HERO — HOLIDAY TOURS (ALPINE GLACIAL LAKES & VALLEYS)
     ========================================================================== -->
<section class="hero-inner hero-tours section-pearl">
  <div class="hero-backdrop-glow"></div>
  <div class="container hero-content">
    <div class="hero-pill-badge reveal stagger-1">
      <span class="pulse-badge-gold"></span>
      <span>CURATED EXPEDITIONS · NORTHERN PAKISTAN &amp; WORLDWIDE TOURS</span>
    </div>
    
    <h1 class="reveal stagger-2">
      <span class="ocean-gradient-text font-display">UNFORGETTABLE JOURNEYS.</span><br>
      HANDCRAFTED HOLIDAY PACKAGES
    </h1>
    
    <p class="hero-subtitle reveal stagger-3">
      Scenic expeditions across Swat, Kalam, Hunza, Skardu, Baku, Istanbul, and Dubai. Luxury transport, handpicked scenic hotels, family-safe itineraries, and certified tour guides.
    </p>
    
    <div class="hero-actions reveal stagger-4">
      <a class="btn btn-whatsapp btn-lg" href="https://wa.me/923078455527?text=Assalam%20o%20Alaikum!%20I%20would%20like%20to%20plan%20a%20holiday%20tour." target="_blank" rel="noopener">
        <?php echo luxIcon('whatsapp', 'lux-icon', 18); ?> VIP WhatsApp Tour Planning
      </a>
      <a class="btn btn-outline btn-lg" href="tel:+923078455527">
        <?php echo luxIcon('phone', 'lux-icon', 18); ?> Tours Desk: 0307-8455527
      </a>
    </div>
    
    <div class="hero-trust-bar reveal stagger-5">
      <div class="trust-card">
        <div class="trust-card-icon"><?php echo luxIcon('van', 'lux-icon', 24); ?></div>
        <div>
          <div class="trust-card-val">Luxury Transport</div>
          <div class="trust-card-lbl">AC Coasters &amp; 4x4 Prado</div>
        </div>
      </div>
      <div class="trust-card">
        <div class="trust-card-icon"><?php echo luxIcon('hotel', 'lux-icon', 24); ?></div>
        <div>
          <div class="trust-card-val">Scenic Hotels</div>
          <div class="trust-card-lbl">Verified Family Stays</div>
        </div>
      </div>
      <div class="trust-card">
        <div class="trust-card-icon"><?php echo luxIcon('family', 'lux-icon', 24); ?></div>
        <div>
          <div class="trust-card-val">100% Family Safe</div>
          <div class="trust-card-lbl">Respectful Environments</div>
        </div>
      </div>
      <div class="trust-card">
        <div class="trust-card-icon"><?php echo luxIcon('map', 'lux-icon', 24); ?></div>
        <div>
          <div class="trust-card-val">Custom Itinerary</div>
          <div class="trust-card-lbl">Flexible Private Departures</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Info Card (Soft Sky Blue section) -->
<section class="section-sky" style="background:#E5F2F8;padding:60px 0;"><div class="container">
  <div class="info-card reveal">
    <div style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:20px;">
      <div style="max-width:820px;">
        <h3>What Our Holiday Packages Include</h3>
        <p class="muted" style="margin:0;">
          Every package is carefully arranged by our destination experts: comfortable AC coasters / private VIP luxury Prado SUVs, certified family-friendly hotels, daily meals, local sightseeing, national park passes, and 24/7 dedicated coordinator support throughout your vacation.
        </p>
      </div>
      <div>
        <a class="btn btn-whatsapp" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel!%20I%20want%20to%20plan%20a%20custom%20holiday%20tour." target="_blank" rel="noopener">
          <?php echo luxIcon('whatsapp', 'lux-icon', 16); ?> Plan Custom Tour
        </a>
      </div>
    </div>
  </div></div></section>

<!-- Tour Catalog Section -->
<section class="section-pearl" style="background:#F7FAFC;padding:70px 0;">
  <div class="container">
    <div class="section-head reveal">
      <div class="section-head-main">
        <p class="eyebrow">Explore Destinations</p>
        <h2>Featured Tour Packages</h2>
      </div>
      <p class="section-desc">Choose from our domestic northern Pakistan expeditions or international city escapes. All dates can be adjusted for private groups.</p>
    </div>
    
    <div class="tabs reveal" data-tabs="tours-page" role="tablist">
      <button type="button" class="tab active" data-filter="all">All Tours (8+)</button>
      <button type="button" class="tab" data-filter="domestic">Domestic Pakistan</button>
      <button type="button" class="tab" data-filter="international">International Destinations</button>
    </div>
    
    <div class="grid grid-3">
      <!-- Tour 1: Swat Kalam -->
      <article class="tour-card reveal stagger-1" data-filter-group="tours-page" data-filter-value="domestic">
        <div class="tour-media">
          <img src="assets/images/tour_swat.jpg" alt="Swat Kalam &amp; Malam Jabba Deluxe Tour" loading="lazy">
          <span class="tour-duration-badge">3 Days / 2 Nights</span>
        </div>
        <div class="tour-body">
          <h3>Swat Kalam & Malam Jabba Deluxe Tour</h3>
          <p class="muted">White Palace, Fiza Ghat, Malam Jabba Chairlift & Zipline, Kalam Valley, Ushu Forest, and Mahodand Lake excursion.</p>
          <div class="tm-types">
            <span class="tm-type">Solo Explorer</span>
            <span class="tm-type">Couple VIP</span>
            <span class="tm-type">Family Safe</span>
            <span class="tm-type">Executive Group</span>
          </div>
          <table class="tm-city">
            <thead>
              <tr><th>Departure City</th><th>Solo / Person</th><th>Couple Total</th></tr>
            </thead>
            <tbody>
              <tr><td>📍 Sahiwal</td><td>PKR 15,000</td><td>PKR 38,000</td></tr>
              <tr><td>📍 Lahore</td><td>PKR 14,000</td><td>PKR 34,000</td></tr>
              <tr><td>📍 Islamabad</td><td>PKR 14,000</td><td>PKR 34,000</td></tr>
              <tr><td>📍 Faisalabad</td><td>PKR 14,000</td><td>PKR 34,000</td></tr>
            </tbody>
          </table>
          <p class="tm-from">🗓 Departure: <strong>Every Thursday & Monday</strong></p>
          <a class="btn btn-whatsapp btn-sm btn-block" style="margin-top:auto;" href="https://wa.me/923078455527?text=Assalam%20o%20Alaikum%20Al%20Akbar%20Travel%2C%20I%20want%20to%20book%20Swat%20Kalam%20Tour." target="_blank" rel="noopener">
            <?php echo luxIcon('whatsapp', 'lux-icon', 16); ?> Book on WhatsApp
          </a>
        </div>
      </article>

      <!-- Tour 2: Hunza Valley -->
      <article class="tour-card reveal stagger-2" data-filter-group="tours-page" data-filter-value="domestic">
        <div class="tour-media">
          <img src="assets/images/tour_hunza.jpg" alt="Hunza Valley &amp; Khunjerab Pass Expedition" loading="lazy">
          <span class="tour-duration-badge">5 Days / 4 Nights</span>
        </div>
        <div class="tour-body">
          <h3>Hunza Valley & Khunjerab Pass Expedition</h3>
          <p class="muted">Naran Babusar Top, 3 Mountain Junction, Rakaposhi View, Altit & Baltit Forts, Attabad Lake boating, Hussaini Bridge, Khunjerab Pass.</p>
          <div class="tm-types">
            <span class="tm-type">Honeymoon Suite</span>
            <span class="tm-type">Family Safe VIP</span>
            <span class="tm-type">Executive Group</span>
          </div>
          <table class="tm-city">
            <thead>
              <tr><th>Package Type</th><th>Rate Per Person</th></tr>
            </thead>
            <tbody>
              <tr><td>Group Tour (AC Coaster)</td><td>PKR 28,000</td></tr>
              <tr><td>Private Couple (Toyota GLI/Yaris)</td><td>PKR 75,000</td></tr>
              <tr><td>Luxury SUV (Prado TX)</td><td>PKR 135,000</td></tr>
            </tbody>
          </table>
          <p class="tm-from">🗓 Departure: <strong>Weekly Departures</strong></p>
          <a class="btn btn-whatsapp btn-sm btn-block" style="margin-top:auto;" href="https://wa.me/923078455527?text=Assalam%20o%20Alaikum%2C%20I%20am%20inquiring%20about%20Hunza%20Valley%20Tour." target="_blank" rel="noopener">
            <?php echo luxIcon('whatsapp', 'lux-icon', 16); ?> Book on WhatsApp
          </a>
        </div>
      </article>

      <!-- Tour 3: Skardu -->
      <article class="tour-card reveal stagger-3" data-filter-group="tours-page" data-filter-value="domestic">
        <div class="tour-media">
          <img src="assets/images/tour_skardu.jpg" alt="Skardu Shangrila &amp; Deosai Plains Tour" loading="lazy">
          <span class="tour-duration-badge">7 Days / 6 Nights</span>
        </div>
        <div class="tour-body">
          <h3>Skardu Shangrila & Deosai Plains</h3>
          <p class="muted">Shangrila Resort, Lower & Upper Kachura Lake, Cold Desert Katpana, Shigar Fort, Mantokha Waterfall, and Deosai National Park.</p>
          <div class="tm-types">
            <span class="tm-type">✈️ By Air Available</span>
            <span class="tm-type">🚙 4x4 Jeeps</span>
            <span class="tm-type">Family Safe</span>
          </div>
          <table class="tm-city">
            <thead>
              <tr><th>Option</th><th>Starting Rate</th></tr>
            </thead>
            <tbody>
              <tr><td>By Road (Coaster / Jeeps)</td><td>PKR 38,000 / person</td></tr>
              <tr><td>By Air Package (Flights + Hotel)</td><td>PKR 115,000 / person</td></tr>
            </tbody>
          </table>
          <p class="tm-from">🗓 Schedule: <strong>Every Friday Departure</strong></p>
          <a class="btn btn-whatsapp btn-sm btn-block" style="margin-top:auto;" href="https://wa.me/923078455527?text=Assalam%20o%20Alaikum%2C%20I%20am%20inquiring%20about%20Skardu%20Tour." target="_blank" rel="noopener">
            <?php echo luxIcon('whatsapp', 'lux-icon', 16); ?> Book on WhatsApp
          </a>
        </div>
      </article>

      <!-- Tour 4: Neelum Valley Kashmir -->
      <article class="tour-card reveal stagger-1" data-filter-group="tours-page" data-filter-value="domestic">
        <div class="tour-media">
          <img src="assets/images/tour_neelum.jpg" alt="Neelum Valley &amp; Sharda Kashmir Retreat" loading="lazy">
          <span class="tour-duration-badge">3 Days / 2 Nights</span>
        </div>
        <div class="tour-body">
          <h3>Neelum Valley & Sharda Kashmir Retreat</h3>
          <p class="muted">Muzaffarabad, Dhani Waterfall, Kutton, Keran (LOC View), Sharda Peeth, and Arang Kel cable car & alpine meadow hike.</p>
          <div class="tm-types">
            <span class="tm-type">Nature Retreat</span>
            <span class="tm-type">Honeymoon Suite</span>
            <span class="tm-type">Family Safe</span>
          </div>
          <table class="tm-city">
            <thead>
              <tr><th>Departure</th><th>Solo</th><th>Couple</th></tr>
            </thead>
            <tbody>
              <tr><td>From Lahore / Sahiwal</td><td>PKR 16,500</td><td>PKR 42,000</td></tr>
              <tr><td>From Islamabad</td><td>PKR 15,000</td><td>PKR 38,000</td></tr>
            </tbody>
          </table>
          <p class="tm-from">🗓 Schedule: <strong>Weekly Departures</strong></p>
          <a class="btn btn-whatsapp btn-sm btn-block" style="margin-top:auto;" href="https://wa.me/923078455527?text=Assalam%20o%20Alaikum%2C%20I%20want%20to%20book%20Neelum%20Valley%20Kashmir%20Tour." target="_blank" rel="noopener">
            <?php echo luxIcon('whatsapp', 'lux-icon', 16); ?> Book on WhatsApp
          </a>
        </div>
      </article>

      <!-- Tour 5: Baku Azerbaijan -->
      <article class="tour-card reveal stagger-2" data-filter-group="tours-page" data-filter-value="international">
        <div class="tour-media">
          <img src="assets/images/tour_baku.jpg" alt="Baku Azerbaijan Classic Holiday Tour" loading="lazy">
          <span class="tour-duration-badge">5 Days / 4 Nights</span>
        </div>
        <div class="tour-body">
          <h3>Baku Azerbaijan Classic Holiday Tour</h3>
          <p class="muted">Return Air Tickets, 4-Star Hotel, Daily Breakfast, Nizami Street, Old City, Flame Towers, Ateshgah Fire Temple, Yanardag, and Gabala cable car tour.</p>
          <div class="tm-types">
            <span class="tm-type">Air Tickets Included</span>
            <span class="tm-type">4-Star Luxury Hotel</span>
            <span class="tm-type">E-Visa Included</span>
          </div>
          <div style="margin:16px 0;padding:12px;background:var(--bg);border-radius:var(--radius-sm);">
            <div class="small muted">All-Inclusive Complete Package</div>
            <div style="font-size:1.35rem;font-weight:800;color:var(--blue);">From PKR 175,000 <small style="font-size:0.8rem;color:var(--muted)">/ person</small></div>
          </div>
          <p class="tm-from">🗓 Schedule: <strong>Fixed Departure Dates</strong></p>
          <a class="btn btn-whatsapp btn-sm btn-block" style="margin-top:auto;" href="https://wa.me/923078455527?text=Assalam%20o%20Alaikum%2C%20I%20want%20to%20book%20the%20Baku%20Holiday%20Package." target="_blank" rel="noopener">
            <?php echo luxIcon('whatsapp', 'lux-icon', 16); ?> Book on WhatsApp
          </a>
        </div>
      </article>

      <!-- Tour 6: Istanbul Turkey -->
      <article class="tour-card reveal stagger-3" data-filter-group="tours-page" data-filter-value="international">
        <div class="tour-media">
          <img src="assets/images/tour_istanbul.jpg" alt="Istanbul &amp; Bosphorus Cruise Holiday" loading="lazy">
          <span class="tour-duration-badge">6 Days / 5 Nights</span>
        </div>
        <div class="tour-body">
          <h3>Istanbul & Bosphorus Cruise Holiday</h3>
          <p class="muted">Hagia Sophia, Blue Mosque, Topkapi Palace, Grand Bazaar, Taksim Square, Bosphorus Luxury Dinner Cruise, and Princess Island excursion.</p>
          <div class="tm-types">
            <span class="tm-type">Turkish Airlines Flight</span>
            <span class="tm-type">4-Star Taksim Hotel</span>
            <span class="tm-type">Bosphorus Cruise Dinner</span>
          </div>
          <div style="margin:16px 0;padding:12px;background:var(--bg);border-radius:var(--radius-sm);">
            <div class="small muted">All-Inclusive Package (Flights + Hotel + Tours)</div>
            <div style="font-size:1.35rem;font-weight:800;color:var(--blue);">From PKR 265,000 <small style="font-size:0.8rem;color:var(--muted)">/ person</small></div>
          </div>
          <p class="tm-from">🗓 Schedule: <strong>Custom & Fixed Departures</strong></p>
          <a class="btn btn-whatsapp btn-sm btn-block" style="margin-top:auto;" href="https://wa.me/923078455527?text=Assalam%20o%20Alaikum%2C%20I%20want%20to%20book%20Istanbul%20Holiday%20Tour." target="_blank" rel="noopener">
            <?php echo luxIcon('whatsapp', 'lux-icon', 16); ?> Book on WhatsApp
          </a>
        </div>
      </article>

      <!-- Tour 7: Dubai Experience -->
      <article class="tour-card reveal stagger-1" data-filter-group="tours-page" data-filter-value="international">
        <div class="tour-media">
          <img src="assets/images/tour_dubai.jpg" alt="Dubai Experience &amp; Desert Safari" loading="lazy">
          <span class="tour-duration-badge">5 Days / 4 Nights</span>
        </div>
        <div class="tour-body">
          <h3>Dubai Experience & Desert Safari</h3>
          <p class="muted">Direct AirBlue/Fly Jinnah flight, 4-star Deira/Downtown hotel, Desert Safari with BBQ dinner & Tanoura dance, Marina Dhow Cruise, and Dubai Mall/Burj Khalifa.</p>
          <div class="tm-types">
            <span class="tm-type">Direct Flights</span>
            <span class="tm-type">Red Dune Desert Safari</span>
            <span class="tm-type">Visa Included</span>
          </div>
          <div style="margin:16px 0;padding:12px;background:var(--bg);border-radius:var(--radius-sm);">
            <div class="small muted">Complete Package With 30-Days Visa</div>
            <div style="font-size:1.35rem;font-weight:800;color:var(--blue);">From PKR 185,000 <small style="font-size:0.8rem;color:var(--muted)">/ person</small></div>
          </div>
          <p class="tm-from">🗓 Schedule: <strong>Departures Every Week</strong></p>
          <a class="btn btn-whatsapp btn-sm btn-block" style="margin-top:auto;" href="https://wa.me/923078455527?text=Assalam%20o%20Alaikum%2C%20I%20want%20to%20book%20Dubai%20Experience%20Tour." target="_blank" rel="noopener">
            <?php echo luxIcon('whatsapp', 'lux-icon', 16); ?> Book on WhatsApp
          </a>
        </div>
      </article>

      <!-- Tour 8: Thailand -->
      <article class="tour-card reveal stagger-2" data-filter-group="tours-page" data-filter-value="international">
        <div class="tour-media">
          <img src="assets/images/tour_thailand.jpg" alt="Thailand Bangkok &amp; Phuket Discovery" loading="lazy">
          <span class="tour-duration-badge">6 Days / 5 Nights</span>
        </div>
        <div class="tour-body">
          <h3>Thailand Bangkok & Phuket Discovery</h3>
          <p class="muted">Phi Phi Island speedboat tour with snorkeling, James Bond Island, Coral Island, Chao Phraya Dinner Cruise, and Safari World Marine Park.</p>
          <div class="tm-types">
            <span class="tm-type">Thai Airways Direct</span>
            <span class="tm-type">Island Excursions</span>
            <span class="tm-type">4-Star Beach Resort</span>
          </div>
          <div style="margin:16px 0;padding:12px;background:var(--bg);border-radius:var(--radius-sm);">
            <div class="small muted">Complete Tropical Vacation Package</div>
            <div style="font-size:1.35rem;font-weight:800;color:var(--blue);">From PKR 275,000 <small style="font-size:0.8rem;color:var(--muted)">/ person</small></div>
          </div>
          <p class="tm-from">🗓 Schedule: <strong>Custom Dates Available</strong></p>
          <a class="btn btn-whatsapp btn-sm btn-block" style="margin-top:auto;" href="https://wa.me/923078455527?text=Assalam%20o%20Alaikum%2C%20I%20want%20to%20book%20Thailand%20Tour." target="_blank" rel="noopener">
            <?php echo luxIcon('whatsapp', 'lux-icon', 16); ?> Book on WhatsApp
          </a>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- CTA Band -->
<section class="cta-band">
  <div class="container">
    <h2>Looking For A Customized Holiday Itinerary?</h2>
    <p>Tell us your preferred dates, budget, and travel companions. Our tour coordinators design custom honeymoon, family, or corporate packages with private chauffeur vehicles.</p>
    <div class="cta-band-actions">
      <a class="btn btn-whatsapp btn-lg" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel!%20I%20need%20custom%20holiday%20tour%20planning." target="_blank" rel="noopener">
        <?php echo luxIcon('whatsapp', 'lux-icon', 18); ?> Chat With Tour Planner (0307-8455527)
      </a>
      <a class="btn btn-gold btn-lg" href="tel:+923078455527">
        <?php echo luxIcon('phone', 'lux-icon', 18); ?> Direct Call: 0307-8455527
      </a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
