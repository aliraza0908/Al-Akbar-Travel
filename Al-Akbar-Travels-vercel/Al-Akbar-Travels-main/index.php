<?php
$pageTitle = "Al Akbar Travel & Tours (Pvt) Ltd. | Official IATA Approved Luxury Travel Agency";
$pageDesc = "Official IATA approved travel agency in Sahiwal. Offering cheapest flight tickets, Umrah packages 2026, fast visit visas, and curated holiday tours with 24/7 assistance.";
$currentPage = "home";
include 'includes/header.php';
?>

<!-- ==========================================================================
     CINEMATIC OCEAN LUXURY HERO SECTION (OCEAN BREEZE + ARCTIC AQUA)
     ========================================================================== -->
<section class="hero section-pearl">
  <div class="hero-backdrop-glow"></div>
  
  <div class="container hero-content">
    <div class="hero-pill-badge reveal stagger-1">
      <span class="pulse-badge-gold"></span>
      <span>OFFICIAL IATA APPROVED TRAVEL AGENCY · GOVT. DTS LICENSED</span>
    </div>
    
    <h1 class="reveal stagger-2">
      <span class="ocean-gradient-text font-display">BEYOND HORIZONS.</span><br>
      CURATED SANCTUARIES &amp; GLOBAL PASSAGES
    </h1>
    
    <p class="hero-subtitle reveal stagger-3">
      Experience premier travel management from Sahiwal's official IATA approved travel agency. Direct airline ticketing across 500+ global carriers, 5-star Umrah packages with Haram-facing hotels, worldwide visit visas, and curated holiday tours.
    </p>
    
    <div class="hero-actions reveal stagger-4">
      <a class="btn btn-primary btn-lg" href="https://wa.me/923078455527?text=Assalam%20o%20Alaikum%20Al%20Akbar%20Travel!%20I%20would%20like%20to%20inquire%20about%20travel%20packages%20and%20airfares." target="_blank" rel="noopener">
        <?php echo luxIcon('whatsapp', 'lux-icon', 18); ?> VIP WhatsApp Booking
      </a>
      <a class="btn btn-outline btn-lg" href="tel:+923078455527">
        <?php echo luxIcon('phone', 'lux-icon', 18); ?> Concierge: 0307-8455527
      </a>
      <a class="btn btn-primary btn-lg" href="umrah.php" style="background:linear-gradient(135deg, #17364B 0%, #126B91 100%) !important;">
        <?php echo luxIcon('kaaba', 'lux-icon', 18); ?> Umrah Packages 2026
      </a>
    </div>
    
    <div class="hero-trust-bar reveal stagger-5">
      <div class="trust-card">
        <div class="trust-card-icon"><?php echo luxIcon('flight', 'lux-icon', 24); ?></div>
        <div>
          <div class="trust-card-val">Flight Ticketing</div>
          <div class="trust-card-lbl">Direct GDS Reservations</div>
        </div>
      </div>
      <div class="trust-card">
        <div class="trust-card-icon"><?php echo luxIcon('iata', 'lux-icon', 24); ?></div>
        <div>
          <div class="trust-card-val">IATA Approved</div>
          <div class="trust-card-lbl">Govt. DTS Registered</div>
        </div>
      </div>
      <div class="trust-card">
        <div class="trust-card-icon"><?php echo luxIcon('kaaba', 'lux-icon', 24); ?></div>
        <div>
          <div class="trust-card-val">Umrah Services</div>
          <div class="trust-card-lbl">Makkah &amp; Madinah Packages</div>
        </div>
      </div>
      <div class="trust-card">
        <div class="trust-card-icon"><?php echo luxIcon('phone', 'lux-icon', 24); ?></div>
        <div>
          <div class="trust-card-val">24/7 Concierge</div>
          <div class="trust-card-lbl">Sahiwal Head Office Desk</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     QATAR AIRWAYS STYLE TRAVEL SEARCH CONSOLE (FLOATING GLASS HUB)
     ========================================================================== -->
<div class="container search-console-wrapper">
  <div class="search-console-card reveal hover-lift">
    <!-- Category Tabs -->
    <div class="search-tabs-nav" role="tablist">
      <button type="button" class="search-tab-btn active" data-tab="flights">
        <?php echo luxIcon('flight', 'lux-icon', 18); ?> Book Flights
      </button>
      <button type="button" class="search-tab-btn" data-tab="umrah">
        <?php echo luxIcon('kaaba', 'lux-icon', 18); ?> Sovereign Umrah
      </button>
      <button type="button" class="search-tab-btn" data-tab="visas">
        <?php echo luxIcon('visa', 'lux-icon', 18); ?> Visa Concierge
      </button>
      <button type="button" class="search-tab-btn" data-tab="tours">
        <?php echo luxIcon('tour', 'lux-icon', 18); ?> Holiday Tours
      </button>
      <button type="button" class="search-tab-btn" data-tab="hotels">
        <?php echo luxIcon('hotel', 'lux-icon', 18); ?> Hotels Tariff
      </button>
    </div>

    <!-- Booking Options Bar (Trip Type + Class) -->
    <div class="booking-config-bar">
      <div class="trip-type-radios">
        <label class="trip-type-opt">
          <input type="radio" name="tripType" value="return" checked>
          <span>Return Trip</span>
        </label>
        <label class="trip-type-opt">
          <input type="radio" name="tripType" value="oneway">
          <span>One Way</span>
        </label>
      </div>

      <div class="class-selector-pill">
        <span style="font-size:0.8rem;color:var(--muted);text-transform:uppercase;font-weight:700;">CABIN CLASS:</span>
        <select id="searchCabinClass">
          <option value="economy">Economy Standard</option>
          <option value="business">Business Class (VIP)</option>
          <option value="first">First Class Suite</option>
        </select>
      </div>
    </div>
    
    <form id="heroSearchForm" data-target-page="flights.php">
      <div class="search-grid-inputs" style="grid-template-columns: 1.2fr auto 1.2fr 1fr 1fr auto;">
        <!-- Origin -->
        <div class="input-box">
          <label id="searchOriginLabel" for="searchOrigin">DEPARTURE AIRPORT</label>
          <div class="input-field-wrap">
            <span class="icon">🛫</span>
            <select id="searchOrigin">
              <option value="Lahore (LHE)">Lahore — Allama Iqbal Intl (LHE)</option>
              <option value="Karachi (KHI)">Karachi — Jinnah Intl (KHI)</option>
              <option value="Islamabad (ISB)">Islamabad — Islamabad Intl (ISB)</option>
              <option value="Multan (MUX)">Multan — Multan Intl (MUX)</option>
              <option value="Sialkot (SKT)">Sialkot — Sialkot Intl (SKT)</option>
              <option value="Faisalabad (LYP)">Faisalabad — Faisalabad Intl (LYP)</option>
            </select>
          </div>
        </div>

        <!-- 180° Airport Swap Button (⇄) -->
        <div>
          <button type="button" class="airport-swap-btn" id="airportSwapBtn" title="Swap Origin & Destination" aria-label="Swap Origin and Destination">
            ⇄
          </button>
        </div>
        
        <!-- Destination -->
        <div class="input-box">
          <label id="searchDestLabel" for="searchDestination">DESTINATION AIRPORT</label>
          <div class="input-field-wrap">
            <span class="icon">🛬</span>
            <select id="searchDestination">
              <option value="Dubai (DXB)">Dubai — Dubai Intl (DXB)</option>
              <option value="Jeddah (JED)">Jeddah — King Abdulaziz Intl (JED)</option>
              <option value="Madinah (MED)">Madinah — Prince Mohammad Intl (MED)</option>
              <option value="Barcelona (BCN)">Barcelona — El Prat (BCN)</option>
              <option value="London (LHR)">London — Heathrow (LHR)</option>
              <option value="Manchester (MAN)">Manchester — Manchester Airport (MAN)</option>
              <option value="Doha (DOH)">Doha — Hamad Intl (DOH)</option>
              <option value="Istanbul (IST)">Istanbul — Istanbul Airport (IST)</option>
              <option value="Baku (GYD)">Baku — Heydar Aliyev Intl (GYD)</option>
              <option value="Bangkok (BKK)">Bangkok — Suvarnabhumi (BKK)</option>
              <option value="Kuala Lumpur (KUL)">Kuala Lumpur — KLIA (KUL)</option>
            </select>
          </div>
        </div>
        
        <!-- Departure Date -->
        <div class="input-box" id="searchDateField">
          <label id="searchDateLabel" for="searchDateInput">DEPARTURE</label>
          <div class="input-field-wrap">
            <span class="icon">📅</span>
            <input type="date" id="searchDateInput" value="<?php echo date('Y-m-d', strtotime('+7 days')); ?>">
          </div>
        </div>

        <!-- Return Date -->
        <div class="input-box" id="searchReturnDateField">
          <label for="searchReturnDateInput">RETURN DATE</label>
          <div class="input-field-wrap">
            <span class="icon">📅</span>
            <input type="date" id="searchReturnDateInput" value="<?php echo date('Y-m-d', strtotime('+21 days')); ?>">
          </div>
        </div>
        
        <!-- Submit Button -->
        <div>
          <button type="submit" id="searchSubmitBtn" class="btn btn-primary" style="height:52px;padding:0 28px;white-space:nowrap;margin-top:20px;">
            Search Flights →
          </button>
        </div>
      </div>
    
      <!-- Quick Trending Destination Pills (Qatar Airways Style) -->
      <div style="margin-top:20px;padding-top:16px;border-top:1px solid var(--border);display:flex;align-items:center;gap:10px;flex-wrap:wrap;font-size:0.85rem;">
        <span style="color:var(--gold-bright);font-weight:700;letter-spacing:0.04em;">🔥 TRENDING AIRFARES:</span>
        <a href="flights.php?to=Barcelona" class="filter-chip btn-sm" style="padding:4px 12px;font-size:0.8rem;text-decoration:none;">🇪🇸 Barcelona from PKR 178k</a>
        <a href="flights.php?to=Dubai" class="filter-chip btn-sm" style="padding:4px 12px;font-size:0.8rem;text-decoration:none;">🇦🇪 Dubai from PKR 68k</a>
        <a href="flights.php?to=Jeddah" class="filter-chip btn-sm" style="padding:4px 12px;font-size:0.8rem;text-decoration:none;">🇸🇦 Jeddah from PKR 115k</a>
        <a href="flights.php?to=London" class="filter-chip btn-sm" style="padding:4px 12px;font-size:0.8rem;text-decoration:none;">🇬🇧 London from PKR 185k</a>
        <a href="flights.php?to=Baku" class="filter-chip btn-sm" style="padding:4px 12px;font-size:0.8rem;text-decoration:none;">🇦🇿 Baku from PKR 98k</a>
      </div>
    </form>
  </div>
</div>

<!-- ==========================================================================
     FEATURED GLOBAL DESTINATIONS (3D TILT CARDS)
     ========================================================================== -->
<section class="py-luxury">
  <div class="container">
    <div class="section-head reveal">
      <span class="section-eyebrow">✦ SIGNATURE DESTINATIONS</span>
      <h2 class="section-title">Iconic Horizons, Curated for Discerning Travelers</h2>
      <p class="section-desc">Experience seamless passages with guaranteed premier airline seating, VIP airport lounges, and handpicked luxury sanctuaries.</p>
    </div>
    
    <div class="destinations-grid">
      <!-- Destination 1: Makkah & Madinah -->
      <a href="umrah.php" class="destination-card tilt-card reveal stagger-1">
        <div class="destination-card-bg" style="background-image: url('assets/images/umrah_hero_makkah.jpg');"></div>
        <div class="destination-card-overlay"></div>
        <div class="destination-card-content">
          <span class="destination-badge">SAUDI ARABIA · PILGRIMAGE</span>
          <h3>Makkah &amp; Madinah</h3>
          <p>Clock Tower 5-star suites &amp; Markaziah sanctuaries with direct Haram courtyard views.</p>
          <span class="gold-accent" style="font-weight:700;font-size:0.9rem;">Explore Sovereign Packages →</span>
        </div>
      </a>
      
      <!-- Destination 2: Dubai -->
      <a href="flights.php?to=Dubai" class="destination-card tilt-card reveal stagger-2">
        <div class="destination-card-bg" style="background-image: url('assets/images/tour_dubai.jpg');"></div>
        <div class="destination-card-overlay"></div>
        <div class="destination-card-content">
          <span class="destination-badge">UNITED ARAB EMIRATES</span>
          <h3>Dubai &amp; Emirates</h3>
          <p>Futuristic skyline, desert safaris, world-class luxury shopping, and private yacht charters.</p>
          <span class="gold-accent" style="font-weight:700;font-size:0.9rem;">From PKR 68,000 Return →</span>
        </div>
      </a>
      
      <!-- Destination 3: Istanbul -->
      <a href="tours.php#turkey" class="destination-card tilt-card reveal stagger-3">
        <div class="destination-card-bg" style="background-image: url('assets/images/tour_istanbul.jpg');"></div>
        <div class="destination-card-overlay"></div>
        <div class="destination-card-content">
          <span class="destination-badge">TURKEY · HISTORIC LUXURY</span>
          <h3>Istanbul &amp; Bosphorus</h3>
          <p>Where East meets West. Ottoman grand palaces, Bosphorus sunset cruises, and hot air balloons.</p>
          <span class="gold-accent" style="font-weight:700;font-size:0.9rem;">6-Days Curated Tour →</span>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- ==========================================================================
     THE SOVEREIGN UMRAH 2026 COLLECTION
     ========================================================================== -->
<section class="py-luxury" style="background: linear-gradient(180deg, #E5F2F8 0%, #EEF6FA 50%, #F7FAFC 100%);">
  <div class="container">
    <div class="section-head reveal">
      <span class="section-eyebrow">🕋 SPIRITUAL EXCELLENCE</span>
      <h2 class="section-title">The Sovereign Umrah 2026 Collection</h2>
      <p class="section-desc">Handcrafted pilgrimage journeys featuring Haram-facing 5-star suites, confirmed Saudia &amp; PIA flights, luxury private GMC transfers, and 24/7 dedicated ground assistance.</p>
    </div>
    
    <div class="umrah-grid">
      <!-- Package 1: Clock Tower VIP -->
      <div class="umrah-luxury-card tilt-card reveal stagger-1">
        <div class="umrah-card-media">
          <img src="assets/images/umrah_hero_makkah.jpg" alt="Clock Tower VIP 5-Star Umrah">
          <span class="umrah-floating-badge">★ 5-STAR CLOCK TOWER VIP</span>
          <span class="umrah-airline-tag">Saudia / PIA Direct</span>
        </div>
        <div class="umrah-card-body">
          <h3>Clock Tower Royal Suite Package</h3>
          <div class="hotel-spec-box">
            <div class="hotel-spec-row">
              <span>🕋 Makkah: <strong>Fairmont / Swissôtel Clock Tower</strong></span>
              <span class="hotel-dist">0m Haram Front</span>
            </div>
            <div class="hotel-spec-row">
              <span>🕌 Madinah: <strong>Dar Al Taqwa / Oberoi</strong></span>
              <span class="hotel-dist">50m Courtyard</span>
            </div>
          </div>
          <div class="inclusions-list">
            <span class="inc-chip">✓ 10/14 Days</span>
            <span class="inc-chip">✓ Return Air Tickets</span>
            <span class="inc-chip">✓ Saudi Umrah Visa</span>
            <span class="inc-chip">✓ Private GMC Yukon Transport</span>
            <span class="inc-chip">✓ Daily Buffet Breakfast</span>
            <span class="inc-chip">✓ Complete Ziyarat</span>
          </div>
          <div class="ticket-price-row">
            <div class="price-box">
              <span class="price-label">SHARING STARTING FROM</span>
              <span class="price-amount">PKR 345,000</span>
            </div>
            <a class="btn btn-whatsapp btn-sm" href="https://wa.me/923078455527?text=Assalam%20o%20Alaikum!%20I%20am%20interested%20in%20Clock%20Tower%20VIP%20Umrah%20Package." target="_blank" rel="noopener">
              Book on WhatsApp
            </a>
          </div>
        </div>
      </div>
      
      <!-- Package 2: Executive 14-Days Markaziah -->
      <div class="umrah-luxury-card tilt-card reveal stagger-2">
        <div class="umrah-card-media">
          <img src="assets/images/umrah_madinah.jpg" alt="Executive 14-Days Markaziah Umrah">
          <span class="umrah-floating-badge">★ EXECUTIVE MARKAZIAH</span>
          <span class="umrah-airline-tag">AirBlue / Saudia</span>
        </div>
        <div class="umrah-card-body">
          <h3>Executive 14-Days Markaziah Comfort</h3>
          <div class="hotel-spec-box">
            <div class="hotel-spec-row">
              <span>🕋 Makkah: <strong>Emaar Grand / Al Massa</strong></span>
              <span class="hotel-dist">350m Ajyad</span>
            </div>
            <div class="hotel-spec-row">
              <span>🕌 Madinah: <strong>Ritz Al Madinah / Karam</strong></span>
              <span class="hotel-dist">150m Markaziah</span>
            </div>
          </div>
          <div class="inclusions-list">
            <span class="inc-chip">✓ 14 Days (7 Makkah / 7 Madinah)</span>
            <span class="inc-chip">✓ Confirmed Flight Seats</span>
            <span class="inc-chip">✓ Fast Umrah Visa</span>
            <span class="inc-chip">✓ AC Bus / Hiace Transfer</span>
            <span class="inc-chip">✓ Verified Hotels</span>
            <span class="inc-chip">✓ Holy Ziyarat Tour</span>
          </div>
          <div class="ticket-price-row">
            <div class="price-box">
              <span class="price-label">QUAD BED PER PERSON</span>
              <span class="price-amount">PKR 245,000</span>
            </div>
            <a class="btn btn-whatsapp btn-sm" href="https://wa.me/923078455527?text=Assalam%20o%20Alaikum!%20I%20am%20interested%20in%20Executive%2014-Days%20Markaziah%20Umrah%20Package." target="_blank" rel="noopener">
              Book on WhatsApp
            </a>
          </div>
        </div>
      </div>
      
      <!-- Package 3: Economy Value 14-Days -->
      <div class="umrah-luxury-card tilt-card reveal stagger-3">
        <div class="umrah-card-media">
          <img src="assets/images/umrah.jpg" alt="Economy Value Umrah">
          <span class="umrah-floating-badge">★ BEST VALUE ECONOMY</span>
          <span class="umrah-airline-tag">Fly Jinnah / AirBlue</span>
        </div>
        <div class="umrah-card-body">
          <h3>Value 14-Days Economy Pilgrimage</h3>
          <div class="hotel-spec-box">
            <div class="hotel-spec-row">
              <span>🕋 Makkah: <strong>Olayan / Barakah</strong></span>
              <span class="hotel-dist">800m Free 24/7 Shuttle</span>
            </div>
            <div class="hotel-spec-row">
              <span>🕌 Madinah: <strong>Taiba Front / Waqf</strong></span>
              <span class="hotel-dist">300m Markaziah</span>
            </div>
          </div>
          <div class="inclusions-list">
            <span class="inc-chip">✓ 14 Days Complete Program</span>
            <span class="inc-chip">✓ Economy Air Ticket</span>
            <span class="inc-chip">✓ Visa with Medical Insurance</span>
            <span class="inc-chip">✓ Group Bus Transport</span>
            <span class="inc-chip">✓ 24/7 Sahiwal Support Desk</span>
          </div>
          <div class="ticket-price-row">
            <div class="price-box">
              <span class="price-label">STARTING ALL-INCLUSIVE</span>
              <span class="price-amount">PKR 195,000</span>
            </div>
            <a class="btn btn-whatsapp btn-sm" href="https://wa.me/923078455527?text=Assalam%20o%20Alaikum!%20I%20am%20interested%20in%20Value%20Economy%2014-Days%20Umrah%20Package." target="_blank" rel="noopener">
              Book on WhatsApp
            </a>
          </div>
        </div>
      </div>
    </div>
    
    <div style="text-align:center;margin-top:40px;">
      <a href="umrah.php" class="btn btn-primary btn-lg">
        Explore All 1,500+ Live Umrah Packages &amp; Flights →
      </a>
    </div>
  </div>
</section>

<!-- ==========================================================================
     TRENDING AIRFARES & FLIGHT RADAR (QATAR AIRWAYS STYLE)
     ========================================================================== -->
<section class="py-luxury">
  <div class="container">
    <div class="section-head reveal">
      <span class="section-eyebrow">✈️ GLOBAL FLIGHT RADAR</span>
      <h2 class="section-title">Exclusive Commercial Flight Tariffs</h2>
      <p class="section-desc">Direct corporate contract airfares across 500+ global airlines. Guaranteed ticket issuance, flexible date change policies, and real-time WhatsApp booking.</p>
    </div>
    
    <!-- Category Filter Bar -->
    <div class="category-filter-bar reveal" data-tabs="flight-deals">
      <button type="button" class="filter-chip active" data-filter="all">All Global Sectors</button>
      <button type="button" class="filter-chip" data-filter="europe">Europe &amp; UK</button>
      <button type="button" class="filter-chip" data-filter="gulf">Middle East &amp; Gulf</button>
      <button type="button" class="filter-chip" data-filter="fareast">Far East &amp; Asia</button>
      <button type="button" class="filter-chip" data-filter="domestic">Domestic Pakistan</button>
    </div>
    
    <div class="flights-grid">
      <!-- Flight 1: Barcelona (BCN) Featured Deal -->
      <div class="flight-ticket-card tilt-card reveal stagger-1" data-filter-group="flight-deals" data-filter-value="europe">
        <div class="ticket-header">
          <div class="airline-badge">
            <span>🇪🇸 Qatar Airways / Emirates</span>
          </div>
          <span class="fare-tag" style="background:rgba(197,160,89,0.2);color:var(--gold-bright);">Signature European Deal</span>
        </div>
        <div class="flight-route-display">
          <div>
            <div class="city-code">LHE</div>
            <div class="city-name">Lahore</div>
          </div>
          <div class="route-mid-visual">
            <span class="route-flight-type">1 Short Stop</span>
            <svg class="route-path-svg" viewBox="0 0 100 24">
              <path d="M 0 12 Q 50 0 100 12" fill="none" stroke="var(--aqua)" stroke-width="2" stroke-dasharray="4 2" />
            </svg>
            <span class="route-stops-tag">Doha / Transit</span>
          </div>
          <div>
            <div class="city-code">BCN</div>
            <div class="city-name">Barcelona</div>
          </div>
        </div>
        <div class="ticket-specs">
          <div>🧳 <strong>35 KG</strong> Checked</div>
          <div>🍽️ <strong>Gourmet</strong> Dining</div>
          <div>🎬 <strong>Oryx / ICE</strong> IFE</div>
        </div>
        <div class="ticket-price-row">
          <div class="price-box">
            <span class="price-label">RETURN TICKET FARE</span>
            <span class="price-amount">PKR 178,000</span>
          </div>
          <a class="btn btn-whatsapp btn-sm" href="https://wa.me/923078455527?text=Assalam%20o%20Alaikum!%20I%20want%20to%20book%20flight%20ticket%20LHE-BCN%20Barcelona." target="_blank" rel="noopener">
            Book Ticket
          </a>
        </div>
      </div>

      <!-- Flight 2: Dubai -->
      <div class="flight-ticket-card tilt-card reveal stagger-2" data-filter-group="flight-deals" data-filter-value="gulf">
        <div class="ticket-header">
          <div class="airline-badge">
            <span>🇦🇪 FlyDubai / Emirates</span>
          </div>
          <span class="fare-tag">Special Economy</span>
        </div>
        <div class="flight-route-display">
          <div>
            <div class="city-code">LHE</div>
            <div class="city-name">Lahore</div>
          </div>
          <div class="route-mid-visual">
            <span class="route-flight-type">Direct Non-Stop</span>
            <svg class="route-path-svg" viewBox="0 0 100 24">
              <path d="M 0 12 Q 50 0 100 12" fill="none" stroke="var(--aqua)" stroke-width="2" stroke-dasharray="4 2" />
            </svg>
            <span class="route-stops-tag">3h 35m</span>
          </div>
          <div>
            <div class="city-code">DXB</div>
            <div class="city-name">Dubai</div>
          </div>
        </div>
        <div class="ticket-specs">
          <div>🧳 <strong>30 KG</strong> Luggage</div>
          <div>🍽️ <strong>Meal</strong> Included</div>
          <div>📅 <strong>Daily</strong> Flights</div>
        </div>
        <div class="ticket-price-row">
          <div class="price-box">
            <span class="price-label">RETURN FARE FROM</span>
            <span class="price-amount">PKR 68,000</span>
          </div>
          <a class="btn btn-whatsapp btn-sm" href="https://wa.me/923078455527?text=Assalam%20o%20Alaikum!%20I%20want%20to%20book%20flight%20ticket%20LHE-DXB." target="_blank" rel="noopener">
            Book Ticket
          </a>
        </div>
      </div>
      
      <!-- Flight 3: Jeddah -->
      <div class="flight-ticket-card tilt-card reveal stagger-3" data-filter-group="flight-deals" data-filter-value="gulf">
        <div class="ticket-header">
          <div class="airline-badge">
            <span>🇸🇦 Saudia Airlines</span>
          </div>
          <span class="fare-tag">Umrah Approved</span>
        </div>
        <div class="flight-route-display">
          <div>
            <div class="city-code">LHE</div>
            <div class="city-name">Lahore</div>
          </div>
          <div class="route-mid-visual">
            <span class="route-flight-type">Direct Non-Stop</span>
            <svg class="route-path-svg" viewBox="0 0 100 24">
              <path d="M 0 12 Q 50 0 100 12" fill="none" stroke="var(--aqua)" stroke-width="2" stroke-dasharray="4 2" />
            </svg>
            <span class="route-stops-tag">5h 15m</span>
          </div>
          <div>
            <div class="city-code">JED</div>
            <div class="city-name">Jeddah</div>
          </div>
        </div>
        <div class="ticket-specs">
          <div>🧳 <strong>46 KG (2 PC)</strong></div>
          <div>💧 <strong>Zamzam</strong> 5L</div>
          <div>🍽️ <strong>Hot Meal</strong></div>
        </div>
        <div class="ticket-price-row">
          <div class="price-box">
            <span class="price-label">RETURN FARE FROM</span>
            <span class="price-amount">PKR 115,000</span>
          </div>
          <a class="btn btn-whatsapp btn-sm" href="https://wa.me/923078455527?text=Assalam%20o%20Alaikum!%20I%20want%20to%20book%20Saudia%20flight%20ticket%20LHE-JED." target="_blank" rel="noopener">
            Book Ticket
          </a>
        </div>
      </div>
      
      <!-- Flight 4: London Heathrow -->
      <div class="flight-ticket-card tilt-card reveal stagger-4" data-filter-group="flight-deals" data-filter-value="europe">
        <div class="ticket-header">
          <div class="airline-badge">
            <span>🇬🇧 Qatar / British Airways</span>
          </div>
          <span class="fare-tag">Executive Standard</span>
        </div>
        <div class="flight-route-display">
          <div>
            <div class="city-code">ISB</div>
            <div class="city-name">Islamabad</div>
          </div>
          <div class="route-mid-visual">
            <span class="route-flight-type">1 Short Stop</span>
            <svg class="route-path-svg" viewBox="0 0 100 24">
              <path d="M 0 12 Q 50 0 100 12" fill="none" stroke="var(--aqua)" stroke-width="2" stroke-dasharray="4 2" />
            </svg>
            <span class="route-stops-tag">Doha / Transit</span>
          </div>
          <div>
            <div class="city-code">LHR</div>
            <div class="city-name">London</div>
          </div>
        </div>
        <div class="ticket-specs">
          <div>🧳 <strong>40 KG</strong> Luggage</div>
          <div>🎬 <strong>In-Flight</strong> IFE</div>
          <div>🛡️ <strong>Free Date</strong> Change</div>
        </div>
        <div class="ticket-price-row">
          <div class="price-box">
            <span class="price-label">RETURN FARE FROM</span>
            <span class="price-amount">PKR 185,000</span>
          </div>
          <a class="btn btn-whatsapp btn-sm" href="https://wa.me/923078455527?text=Assalam%20o%20Alaikum!%20I%20want%20to%20book%20flight%20ticket%20to%20London." target="_blank" rel="noopener">
            Book Ticket
          </a>
        </div>
      </div>
      
      <!-- Flight 5: Baku -->
      <div class="flight-ticket-card tilt-card reveal stagger-5" data-filter-group="flight-deals" data-filter-value="fareast">
        <div class="ticket-header">
          <div class="airline-badge">
            <span>🇦🇿 Azerbaijan Airlines (AZAL)</span>
          </div>
          <span class="fare-tag">Popular Holiday</span>
        </div>
        <div class="flight-route-display">
          <div>
            <div class="city-code">LHE</div>
            <div class="city-name">Lahore</div>
          </div>
          <div class="route-mid-visual">
            <span class="route-flight-type">Direct Non-Stop</span>
            <svg class="route-path-svg" viewBox="0 0 100 24">
              <path d="M 0 12 Q 50 0 100 12" fill="none" stroke="var(--aqua)" stroke-width="2" stroke-dasharray="4 2" />
            </svg>
            <span class="route-stops-tag">3h 45m</span>
          </div>
          <div>
            <div class="city-code">GYD</div>
            <div class="city-name">Baku</div>
          </div>
        </div>
        <div class="ticket-specs">
          <div>🧳 <strong>23 KG</strong> Check-in</div>
          <div>🛂 <strong>E-Visa</strong> Instant</div>
          <div>🍽️ <strong>Meal</strong> Included</div>
        </div>
        <div class="ticket-price-row">
          <div class="price-box">
            <span class="price-label">RETURN FARE FROM</span>
            <span class="price-amount">PKR 98,000</span>
          </div>
          <a class="btn btn-whatsapp btn-sm" href="https://wa.me/923078455527?text=Assalam%20o%20Alaikum!%20I%20want%20to%20book%20flight%20ticket%20LHE-GYD%20Baku." target="_blank" rel="noopener">
            Book Ticket
          </a>
        </div>
      </div>
      
      <!-- Flight 6: Karachi Domestic -->
      <div class="flight-ticket-card tilt-card reveal stagger-6" data-filter-group="flight-deals" data-filter-value="domestic">
        <div class="ticket-header">
          <div class="airline-badge">
            <span>🇵🇰 AirBlue / Fly Jinnah</span>
          </div>
          <span class="fare-tag">Domestic Express</span>
        </div>
        <div class="flight-route-display">
          <div>
            <div class="city-code">LHE</div>
            <div class="city-name">Lahore</div>
          </div>
          <div class="route-mid-visual">
            <span class="route-flight-type">Direct Non-Stop</span>
            <svg class="route-path-svg" viewBox="0 0 100 24">
              <path d="M 0 12 Q 50 0 100 12" fill="none" stroke="var(--aqua)" stroke-width="2" stroke-dasharray="4 2" />
            </svg>
            <span class="route-stops-tag">1h 45m</span>
          </div>
          <div>
            <div class="city-code">KHI</div>
            <div class="city-name">Karachi</div>
          </div>
        </div>
        <div class="ticket-specs">
          <div>🧳 <strong>20 KG</strong> Baggage</div>
          <div>⏱️ <strong>Instant</strong> Confirmation</div>
          <div>🔄 <strong>Easy</strong> Reschedule</div>
        </div>
        <div class="ticket-price-row">
          <div class="price-box">
            <span class="price-label">ONE-WAY FARE FROM</span>
            <span class="price-amount">PKR 18,500</span>
          </div>
          <a class="btn btn-whatsapp btn-sm" href="https://wa.me/923078455527?text=Assalam%20o%20Alaikum!%20I%20want%20to%20book%20flight%20ticket%20LHE-KHI." target="_blank" rel="noopener">
            Book Ticket
          </a>
        </div>
      </div>
    </div>
    
    <div style="text-align:center;margin-top:40px;">
      <a href="flights.php" class="btn btn-outline btn-lg">
        View All 500+ Airline Flight Routes &amp; Baggage Matrix →
      </a>
    </div>
  </div>
</section>

<!-- ==========================================================================
     THE AL AKBAR STANDARD (AWWWARDS-STYLE INTERACTIVE BENTO GRID)
     ========================================================================== -->
<section class="py-luxury" style="background: linear-gradient(180deg, #F7FAFC 0%, #E5F2F8 100%);">
  <div class="container">
    <div class="section-head reveal">
      <span class="section-eyebrow">✦ UNRIVALED EXCELLENCE</span>
      <h2 class="section-title">The Al Akbar Standard</h2>
      <p class="section-desc">Why thousands of families, corporate executives, and overseas pilgrims choose Al Akbar Travel &amp; Tours as their lifelong travel partner.</p>
    </div>
    
    <div class="bento-grid">
      <!-- Bento 1: IATA (Span 8) -->
      <div class="bento-card bento-col-8 tilt-card reveal stagger-1">
        <div class="bento-icon"><?php echo luxIcon('bento-accreditation', 'lux-icon', 42); ?></div>
        <span class="pulse-badge-gold"></span>
        <span style="font-size:0.8rem;color:var(--gold-bright);font-weight:700;letter-spacing:0.08em;text-transform:uppercase;">OFFICIAL ACCREDITATION</span>
        <h3 style="font-size:1.8rem;margin-top:8px;">Official IATA Approved Agency &amp; Govt. DTS Registered</h3>
        <p>Unlike unregistered sub-agents or casual online portals, Al Akbar Travel holds direct international airline ticketing authority. Your air tickets are issued instantly on sovereign Global Distribution Systems (GDS: Sabre, Amadeus, Galileo) with 100% verified PNR guarantees.</p>
      </div>
      
      <!-- Bento 2: 24/7 Concierge (Span 4) -->
      <div class="bento-card bento-col-4 tilt-card reveal stagger-2">
        <div class="bento-icon"><?php echo luxIcon('bento-concierge', 'lux-icon', 42); ?></div>
        <span style="font-size:0.8rem;color:var(--aqua);font-weight:700;letter-spacing:0.08em;text-transform:uppercase;">ROUND-THE-CLOCK</span>
        <h3>24/7 VIP Concierge</h3>
        <p>Direct access to dedicated travel managers via phone and WhatsApp. We assist with last-minute flight changes, emergency hotel shifts, and terminal guidance anytime.</p>
      </div>
      
      <!-- Bento 3: Hotel Allocations (Span 4) -->
      <div class="bento-card bento-col-4 tilt-card reveal stagger-3">
        <div class="bento-icon"><?php echo luxIcon('bento-hotel', 'lux-icon', 42); ?></div>
        <span style="font-size:0.8rem;color:var(--gold);font-weight:700;letter-spacing:0.08em;text-transform:uppercase;">HARAM FRONT SUITES</span>
        <h3>Direct Hotel Allocations</h3>
        <p>Contracted rooms across Clock Tower, Swissôtel, Oberoi, and Markaziah hotels in Makkah &amp; Madinah with official verifiable confirmation vouchers.</p>
      </div>
      
      <!-- Bento 4: VIP Fleet & Ground Transport (Span 8) -->
      <div class="bento-card bento-col-8 tilt-card reveal stagger-4">
        <div class="bento-icon"><?php echo luxIcon('bento-logistics', 'lux-icon', 42); ?></div>
        <span style="font-size:0.8rem;color:var(--green);font-weight:700;letter-spacing:0.08em;text-transform:uppercase;">EXCLUSIVE LOGISTICS</span>
        <h3 style="font-size:1.8rem;margin-top:8px;">Private GMC Yukon &amp; Executive Ground Operations</h3>
        <p>Eliminate airport transit stress with our private fleet across Jeddah, Makkah, and Madinah. Chauffeur-driven GMC Yukons, luxury coaster buses, and seamless railway station transfers between holy sanctuaries.</p>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     EXECUTIVE TRAVELER TESTIMONIALS (VERIFIED CLIENT STORIES)
     ========================================================================== -->
<section class="py-luxury" style="background: #F7FAFC;">
  <div class="container">
    <div class="section-head reveal">
      <span class="section-eyebrow">✦ VERIFIED EXPERIENCES</span>
      <h2 class="section-title">Words from Our Esteemed Travelers</h2>
      <p class="section-desc">Real stories from pilgrimage families, corporate executives, and vacationers who experienced our 5-star travel management.</p>
    </div>
    
    <div class="grid grid-3">
      <!-- Testimonial 1 -->
      <div class="card tilt-card reveal stagger-1" style="display:flex;flex-direction:column;justify-content:space-between;">
        <div>
          <div style="color:var(--gold);font-size:1.2rem;margin-bottom:14px;letter-spacing:2px;">★★★★★</div>
          <p style="font-size:0.96rem;line-height:1.7;color:var(--ink-secondary);font-style:italic;margin-bottom:20px;">
            "Al Akbar Travel arranged our family Swissôtel Clock Tower Umrah. Direct Haram view from our bedroom window and seamless GMC Yukon transfers from Jeddah airport. True 5-star service right here in Sahiwal."
          </p>
        </div>
        <div style="display:flex;align-items:center;gap:12px;padding-top:16px;border-top:1px solid var(--border);">
          <div style="width:44px;height:44px;border-radius:50%;background:linear-gradient(135deg, #126B91 0%, #17364B 100%);color:#FFFFFF;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:1.1rem;border:1px solid var(--gold);">MA</div>
          <div>
            <strong style="color:var(--ink);display:block;font-size:0.95rem;">Haji Muhammad Ashraf</strong>
            <span style="font-size:0.78rem;color:var(--gold-bright);font-weight:700;">Clock Tower VIP Umrah 2026 · Sahiwal</span>
          </div>
        </div>
      </div>

      <!-- Testimonial 2 -->
      <div class="card tilt-card reveal stagger-2" style="display:flex;flex-direction:column;justify-content:space-between;">
        <div>
          <div style="color:var(--gold);font-size:1.2rem;margin-bottom:14px;letter-spacing:2px;">★★★★★</div>
          <p style="font-size:0.96rem;line-height:1.7;color:var(--ink-secondary);font-style:italic;margin-bottom:20px;">
            "Secured confirmed return tickets for Barcelona with Qatar Airways at an unbeatable price. Verified PNR on airline portal instantly and got 35kg luggage confirmed. Their team is exceptionally courteous."
          </p>
        </div>
        <div style="display:flex;align-items:center;gap:12px;padding-top:16px;border-top:1px solid var(--border);">
          <div style="width:44px;height:44px;border-radius:50%;background:var(--navy);color:var(--gold-bright);display:flex;align-items:center;justify-content:center;font-weight:800;font-size:1.1rem;border:1px solid var(--gold);">KT</div>
          <div>
            <strong style="color:var(--ink);display:block;font-size:0.95rem;">Dr. Kamran Tariq</strong>
            <span style="font-size:0.78rem;color:var(--gold-bright);font-weight:700;">International Flight Client · Lahore</span>
          </div>
        </div>
      </div>

      <!-- Testimonial 3 -->
      <div class="card tilt-card reveal stagger-3" style="display:flex;flex-direction:column;justify-content:space-between;">
        <div>
          <div style="color:var(--gold);font-size:1.2rem;margin-bottom:14px;letter-spacing:2px;">★★★★★</div>
          <p style="font-size:0.96rem;line-height:1.7;color:var(--ink-secondary);font-style:italic;margin-bottom:20px;">
            "Our Dubai family tourist visas were issued in under 24 hours. The luxury desert safari, hotel bookings, and private airport transfers were handled flawlessly. Highly recommend their Royal Palm Sahiwal office."
          </p>
        </div>
        <div style="display:flex;align-items:center;gap:12px;padding-top:16px;border-top:1px solid var(--border);">
          <div style="width:44px;height:44px;border-radius:50%;background:linear-gradient(135deg, #126B91 0%, #17364B 100%);color:#FFFFFF;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:1.1rem;border:1px solid var(--gold);">TM</div>
          <div>
            <strong style="color:var(--ink);display:block;font-size:0.95rem;">Tariq Mehmood &amp; Family</strong>
            <span style="font-size:0.78rem;color:var(--gold-bright);font-weight:700;">Dubai &amp; Baku Holiday Client · Sahiwal</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     FLAGSHIP SAHIWAL LOUNGE & INTERACTIVE MAP
     ========================================================================== -->
<section class="py-luxury">
  <div class="container">
    <div class="lounge-wrapper">
      <div class="lounge-details-card reveal">
        <span class="status-pill-open">
          <span class="pulse-badge"></span>
          OPEN NOW · 24/7 DESK ACTIVE
        </span>
        
        <h2 style="font-family:var(--font-display);font-size:2.2rem;margin-bottom:16px;">
          Visit Our Sahiwal Flagship Lounge
        </h2>
        
        <p style="color:var(--ink-secondary);font-size:1rem;line-height:1.65;margin-bottom:28px;">
          Experience our physical consultation lounge at Royal Palm Garden, Sahiwal. Sit down with senior travel consultants, review high-res hotel room photos, customize family Umrah packages, and process instant visa applications over fresh coffee.
        </p>
        
        <div style="display:flex;flex-direction:column;gap:16px;margin-bottom:32px;">
          <div style="display:flex;align-items:flex-start;gap:14px;">
            <div><?php echo luxIcon('pin', 'lux-icon', 22); ?></div>
            <div>
              <strong style="color:var(--ink);display:block;">Physical Address</strong>
              <span style="color:var(--muted);font-size:0.92rem;">Royal Palm Garden (Near McDonald's), Sahiwal, Punjab, Pakistan.</span>
            </div>
          </div>
          
          <div style="display:flex;align-items:flex-start;gap:14px;">
            <div><?php echo luxIcon('phone', 'lux-icon', 22); ?></div>
            <div>
              <strong style="color:var(--ink);display:block;">Direct Booking Hotline</strong>
              <a href="tel:+923078455527" style="color:var(--gold-bright);text-decoration:none;font-size:1.1rem;font-weight:700;">+92-307-8455527</a>
            </div>
          </div>
          
          <div style="display:flex;align-items:flex-start;gap:14px;">
            <div><?php echo luxIcon('document', 'lux-icon', 22); ?></div>
            <div>
              <strong style="color:var(--ink);display:block;">Official Communications</strong>
              <span style="color:var(--muted);font-size:0.92rem;">alakbartravel3@gmail.com</span>
            </div>
          </div>
        </div>
        
        <div style="display:flex;gap:14px;flex-wrap:wrap;">
          <a class="btn btn-whatsapp" href="https://wa.me/923078455527?text=Assalam%20o%20Alaikum!%20I%20want%20to%20visit%20Al%20Akbar%20Travel%20office%20in%20Sahiwal." target="_blank" rel="noopener">
            <?php echo luxIcon('whatsapp', 'lux-icon', 18); ?> WhatsApp Live Desk
          </a>
          <a class="btn btn-outline" href="contact.php">
            Full Branch Details &amp; Forms →
          </a>
        </div>
      </div>
      
      <div class="map-container reveal hover-lift">
        <iframe 
          title="Al Akbar Travel Sahiwal Office Map"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3432.3274534796395!2d73.1114!3d30.6682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922b7c6c4c3b5d3%3A0x7d2f78b88d227b2c!2sRoyal%20Palm%20City%20Sahiwal!5e0!3m2!1sen!2spk!4v1700000000000!5m2!1sen!2spk" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
