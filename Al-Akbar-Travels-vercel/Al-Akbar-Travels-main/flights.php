<?php
$pageTitle = "Global Flight Deals &amp; Airfares | Al Akbar Travel &amp; Tours (IATA Accredited)";
$pageDesc = "Book cheapest domestic &amp; international airline tickets from Pakistan. Authorized agent for Saudia, PIA, Emirates, Qatar Airways, AirBlue, and Fly Jinnah.";
$currentPage = "flights";
include 'includes/header.php';

$flightDeals = [
    // Gulf & Middle East
    [
        'category' => 'gulf',
        'airline' => 'FlyDubai / Emirates',
        'flag' => '🇦🇪',
        'fromCode' => 'LHE',
        'fromCity' => 'Lahore',
        'toCode' => 'DXB',
        'toCity' => 'Dubai',
        'type' => 'Direct Non-Stop',
        'duration' => '3h 35m',
        'baggage' => '30 KG Check-in + 7 KG Hand',
        'meal' => 'Hot Meal Included',
        'fareType' => 'Special Economy',
        'price' => '68,000',
        'trip' => 'Return Ticket',
        'freq' => 'Daily 4x Departures'
    ],
    [
        'category' => 'gulf',
        'airline' => 'Saudia Airlines',
        'flag' => '🇸🇦',
        'fromCode' => 'LHE',
        'fromCity' => 'Lahore',
        'toCode' => 'JED',
        'toCity' => 'Jeddah',
        'type' => 'Direct Non-Stop',
        'duration' => '5h 15m',
        'baggage' => '46 KG (2x 23KG)',
        'meal' => 'Halal Hot Meal + Zamzam 5L',
        'fareType' => 'Umrah Approved',
        'price' => '115,000',
        'trip' => 'Return Ticket',
        'freq' => 'Daily Direct'
    ],
    [
        'category' => 'gulf',
        'airline' => 'Pakistan International Airlines (PIA)',
        'flag' => '🇸🇦',
        'fromCode' => 'ISB',
        'fromCity' => 'Islamabad',
        'toCode' => 'MED',
        'toCity' => 'Madinah',
        'type' => 'Direct Non-Stop',
        'duration' => '5h 05m',
        'baggage' => '40 KG + 7 KG Hand',
        'meal' => 'Hot Meal + Zamzam 5L',
        'fareType' => 'Pilgrim Group',
        'price' => '118,000',
        'trip' => 'Return Ticket',
        'freq' => '4x Weekly'
    ],
    [
        'category' => 'gulf',
        'airline' => 'AirBlue',
        'flag' => '🇸🇦',
        'fromCode' => 'MUX',
        'fromCity' => 'Multan',
        'toCode' => 'RUH',
        'toCity' => 'Riyadh',
        'type' => 'Direct Non-Stop',
        'duration' => '4h 45m',
        'baggage' => '30 KG Check-in',
        'meal' => 'Snacks &amp; Beverages',
        'fareType' => 'Economy Value',
        'price' => '78,000',
        'trip' => 'Return Ticket',
        'freq' => '3x Weekly'
    ],
    // UK & Europe
    [
        'category' => 'europe',
        'airline' => 'Qatar Airways',
        'flag' => '🇬🇧',
        'fromCode' => 'ISB',
        'fromCity' => 'Islamabad',
        'toCode' => 'LHR',
        'toCity' => 'London Heathrow',
        'type' => '1 Short Stop (Doha)',
        'duration' => '11h 20m',
        'baggage' => '40 KG Check-in + 7 KG Hand',
        'meal' => 'Multi-Course Dining',
        'fareType' => 'Executive Standard',
        'price' => '185,000',
        'trip' => 'Return Ticket',
        'freq' => 'Daily Departures'
    ],
    [
        'category' => 'europe',
        'airline' => 'Emirates',
        'flag' => '🇬🇧',
        'fromCode' => 'LHE',
        'fromCity' => 'Lahore',
        'toCode' => 'MAN',
        'toCity' => 'Manchester',
        'type' => '1 Short Stop (Dubai)',
        'duration' => '11h 55m',
        'baggage' => '35 KG Check-in',
        'meal' => 'Premium Inflight Dining',
        'fareType' => 'Flex Economy',
        'price' => '192,000',
        'trip' => 'Return Ticket',
        'freq' => 'Daily Departures'
    ],
    [
        'category' => 'europe',
        'airline' => 'Turkish Airlines',
        'flag' => '🇹🇷',
        'fromCode' => 'LHE',
        'fromCity' => 'Lahore',
        'toCode' => 'IST',
        'toCity' => 'Istanbul',
        'type' => 'Direct Non-Stop',
        'duration' => '5h 45m',
        'baggage' => '30 KG Check-in',
        'meal' => 'Gourmet Turkish Meals',
        'fareType' => 'Euro Saver',
        'price' => '142,000',
        'trip' => 'Return Ticket',
        'freq' => 'Daily Direct'
    ],
    // Far East & Asia
    [
        'category' => 'fareast',
        'airline' => 'Azerbaijan Airlines (AZAL)',
        'flag' => '🇦🇿',
        'fromCode' => 'LHE',
        'fromCity' => 'Lahore',
        'toCode' => 'GYD',
        'toCity' => 'Baku',
        'type' => 'Direct Non-Stop',
        'duration' => '3h 45m',
        'baggage' => '23 KG Check-in + 10 KG Hand',
        'meal' => 'Meal &amp; Drinks Included',
        'fareType' => 'Holiday Special',
        'price' => '98,000',
        'trip' => 'Return Ticket',
        'freq' => '3x Weekly Direct'
    ],
    [
        'category' => 'fareast',
        'airline' => 'Thai Airways',
        'flag' => '🇹🇭',
        'fromCode' => 'LHE',
        'fromCity' => 'Lahore',
        'toCode' => 'BKK',
        'toCity' => 'Bangkok',
        'type' => 'Direct Non-Stop',
        'duration' => '4h 30m',
        'baggage' => '30 KG Check-in',
        'meal' => 'Royal Orchid Dining',
        'fareType' => 'Tourist Saver',
        'price' => '128,000',
        'trip' => 'Return Ticket',
        'freq' => 'Daily Direct'
    ],
    [
        'category' => 'fareast',
        'airline' => 'Batik Air / Malaysia Airlines',
        'flag' => '🇲🇾',
        'fromCode' => 'LHE',
        'fromCity' => 'Lahore',
        'toCode' => 'KUL',
        'toCity' => 'Kuala Lumpur',
        'type' => 'Direct Non-Stop',
        'duration' => '5h 30m',
        'baggage' => '20 KG Check-in',
        'meal' => 'Inflight Refreshment',
        'fareType' => 'Special Fare',
        'price' => '118,000',
        'trip' => 'Return Ticket',
        'freq' => '4x Weekly'
    ],
    // Domestic Pakistan
    [
        'category' => 'domestic',
        'airline' => 'AirBlue / Fly Jinnah',
        'flag' => '🇵🇰',
        'fromCode' => 'LHE',
        'fromCity' => 'Lahore',
        'toCode' => 'KHI',
        'toCity' => 'Karachi',
        'type' => 'Direct Non-Stop',
        'duration' => '1h 45m',
        'baggage' => '20 KG Check-in',
        'meal' => 'Snack &amp; Juice',
        'fareType' => 'Domestic Saver',
        'price' => '18,500',
        'trip' => 'One-Way Ticket',
        'freq' => 'Daily 6x Flights'
    ],
    [
        'category' => 'domestic',
        'airline' => 'PIA (ATR / A320)',
        'flag' => '🇵🇰',
        'fromCode' => 'ISB',
        'fromCity' => 'Islamabad',
        'toCode' => 'KDU',
        'toCity' => 'Skardu',
        'type' => 'Scenic Mountain Flight',
        'duration' => '0h 55m',
        'baggage' => '20 KG Check-in',
        'meal' => 'Refreshment',
        'fareType' => 'Northern Paradise',
        'price' => '24,000',
        'trip' => 'One-Way Ticket',
        'freq' => 'Daily Weather Permitting'
    ],
];
?>

<!-- ==========================================================================
     CINEMATIC OCEAN LUXURY HERO — GLOBAL FLIGHTS (AIRBUS A350 AZURE HORIZONS)
     ========================================================================== -->
<section class="hero-inner hero-flights section-pearl">
  <div class="hero-backdrop-glow"></div>
  <div class="container hero-content">
    <div class="hero-pill-badge reveal stagger-1">
      <span class="pulse-badge-gold"></span>
      <span>GLOBAL TICKETING DESK · 500+ AIRLINE PARTNERS · IATA ACCREDITED</span>
    </div>
    
    <h1 class="reveal stagger-2">
      <span class="ocean-gradient-text font-display">SOVEREIGN HORIZONS.</span><br>
      GLOBAL AIRFARES &amp; DIRECT FLIGHTS
    </h1>
    
    <p class="hero-subtitle reveal stagger-3">
      Direct GDS airline reservations on Sabre, Amadeus &amp; Galileo. Guaranteed luggage allowances, instant confirmed PNRs, VIP WhatsApp ticketing, and verified cheap domestic and international fares.
    </p>
    
    <div class="hero-actions reveal stagger-4">
      <a class="btn btn-whatsapp btn-lg" href="https://wa.me/923078455527?text=Assalam%20o%20Alaikum!%20I%20want%20to%20inquire%20about%20international%20flight%20tickets." target="_blank" rel="noopener">
        <?php echo luxIcon('whatsapp', 'lux-icon', 18); ?> Direct Ticket Inquiry on WhatsApp
      </a>
      <a class="btn btn-outline btn-lg" href="tel:+923078455527">
        <?php echo luxIcon('phone', 'lux-icon', 18); ?> Concierge: 0307-8455527
      </a>
    </div>
    
    <div class="hero-trust-bar reveal stagger-5">
      <div class="trust-card">
        <div class="trust-card-icon"><?php echo luxIcon('flight', 'lux-icon', 24); ?></div>
        <div>
          <div class="trust-card-val">500+ Airlines</div>
          <div class="trust-card-lbl">Global Carriers</div>
        </div>
      </div>
      <div class="trust-card">
        <div class="trust-card-icon"><?php echo luxIcon('speed', 'lux-icon', 24); ?></div>
        <div>
          <div class="trust-card-val">Instant PNR</div>
          <div class="trust-card-lbl">Direct GDS Booking</div>
        </div>
      </div>
      <div class="trust-card">
        <div class="trust-card-icon"><?php echo luxIcon('luggage', 'lux-icon', 24); ?></div>
        <div>
          <div class="trust-card-val">Full Luggage</div>
          <div class="trust-card-lbl">Guaranteed Allowances</div>
        </div>
      </div>
      <div class="trust-card">
        <div class="trust-card-icon"><?php echo luxIcon('iata', 'lux-icon', 24); ?></div>
        <div>
          <div class="trust-card-val">IATA Approved</div>
          <div class="trust-card-lbl">Official Accreditation</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     FLIGHT RADAR & INTERACTIVE TICKETING BOARD (SOFT SKY BLUE SECTION)
     ========================================================================== -->
<section class="py-luxury section-sky" style="background:#E5F2F8;">
  <div class="container">
    <div class="category-filter-bar reveal" data-tabs="flight-catalog">
      <button type="button" class="filter-chip active" data-filter="all">All Sectors</button>
      <button type="button" class="filter-chip" data-filter="gulf">Middle East &amp; Gulf</button>
      <button type="button" class="filter-chip" data-filter="europe">UK &amp; Europe</button>
      <button type="button" class="filter-chip" data-filter="fareast">Far East &amp; Asia</button>
      <button type="button" class="filter-chip" data-filter="domestic">Domestic Pakistan</button>
    </div>
    
    <div class="flights-grid">
      <?php foreach ($flightDeals as $idx => $f): ?>
      <div class="flight-ticket-card tilt-card reveal stagger-<?php echo ($idx % 6) + 1; ?>" data-filter-group="flight-catalog" data-filter-value="<?php echo htmlspecialchars($f['category']); ?>">
        <div class="ticket-header">
          <div class="airline-badge">
            <span><?php echo $f['flag']; ?> <?php echo htmlspecialchars($f['airline']); ?></span>
          </div>
          <span class="fare-tag"><?php echo htmlspecialchars($f['fareType']); ?></span>
        </div>
        
        <div class="flight-route-display">
          <div>
            <div class="city-code"><?php echo htmlspecialchars($f['fromCode']); ?></div>
            <div class="city-name"><?php echo htmlspecialchars($f['fromCity']); ?></div>
          </div>
          
          <div class="route-mid-visual">
            <span class="route-flight-type"><?php echo htmlspecialchars($f['type']); ?></span>
            <svg class="route-path-svg" viewBox="0 0 100 24">
              <path d="M 0 12 Q 50 0 100 12" fill="none" stroke="var(--aqua)" stroke-width="2" stroke-dasharray="4 2" />
            </svg>
            <span class="route-stops-tag"><?php echo htmlspecialchars($f['duration']); ?></span>
          </div>
          
          <div>
            <div class="city-code"><?php echo htmlspecialchars($f['toCode']); ?></div>
            <div class="city-name"><?php echo htmlspecialchars($f['toCity']); ?></div>
          </div>
        </div>
        
        <div class="ticket-specs">
          <div><?php echo luxIcon('luggage', 'lux-icon', 15); ?> <strong><?php echo htmlspecialchars($f['baggage']); ?></strong></div>
          <div><?php echo luxIcon('star', 'lux-icon', 15); ?> <strong><?php echo $f['meal']; ?></strong></div>
          <div><?php echo luxIcon('clock', 'lux-icon', 15); ?> <strong><?php echo htmlspecialchars($f['freq']); ?></strong></div>
        </div>
        
        <div class="ticket-price-row">
          <div class="price-box">
            <span class="price-label"><?php echo htmlspecialchars($f['trip']); ?></span>
            <span class="price-amount">PKR <?php echo htmlspecialchars($f['price']); ?></span>
          </div>
          <a class="btn btn-whatsapp btn-sm" href="https://wa.me/923078455527?text=Assalam%20o%20Alaikum!%20I%20want%20to%20book%20<?php echo urlencode($f['airline']); ?>%20flight%20<?php echo urlencode($f['fromCode'] . '-' . $f['toCode']); ?>%20for%20PKR%20<?php echo urlencode($f['price']); ?>." target="_blank" rel="noopener">
            Book on WhatsApp
          </a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ==========================================================================
     AIRLINE BAGGAGE &amp; AMENITY COMPARISON MATRIX
     ========================================================================== -->
<section class="py-luxury section-navy" style="background: linear-gradient(145deg, #17364B 0%, #126B91 100%); color: #FFFFFF;">
  <div class="container">
    <div class="section-head reveal">
      <span class="section-eyebrow">✦ TRANSPARENT TICKETING</span>
      <h2 class="section-title">Airline Luggage &amp; Service Standards</h2>
      <p class="section-desc">We ensure every passenger receives complete transparency regarding checked luggage allowances, transit guidelines, and free Zamzam water entitlement.</p>
    </div>
    
    <div class="glass-panel reveal" style="padding:32px;overflow-x:auto;background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.18);border-radius:var(--radius-lg);">
      <table style="width:100%;border-collapse:collapse;color:var(--ink);min-width:640px;">
        <thead>
          <tr style="border-bottom:2px solid var(--gold);text-align:left;">
            <th style="padding:14px;color:var(--gold-bright);font-size:0.85rem;text-transform:uppercase;">Carrier</th>
            <th style="padding:14px;color:var(--gold-bright);font-size:0.85rem;text-transform:uppercase;">Primary Sectors</th>
            <th style="padding:14px;color:var(--gold-bright);font-size:0.85rem;text-transform:uppercase;">Standard Baggage</th>
            <th style="padding:14px;color:var(--gold-bright);font-size:0.85rem;text-transform:uppercase;">Zamzam Water</th>
            <th style="padding:14px;color:var(--gold-bright);font-size:0.85rem;text-transform:uppercase;">Meal Included</th>
            <th style="padding:14px;color:var(--gold-bright);font-size:0.85rem;text-transform:uppercase;">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr style="border-bottom:1px solid var(--border);">
            <td style="padding:16px;"><strong>🇸🇦 Saudia Airlines</strong></td>
            <td style="padding:16px;color:var(--muted);">JED / RUH / MED / DMM</td>
            <td style="padding:16px;color:var(--ink);font-weight:700;">46 KG (2x 23KG)</td>
            <td style="padding:16px;color:#34d399;">✓ Free 5 Liters</td>
            <td style="padding:16px;">✓ Halal Hot Meal</td>
            <td style="padding:16px;"><a href="https://wa.me/923078455527?text=Inquiry%20for%20Saudia%20Airlines" class="btn btn-gold-outline btn-sm" target="_blank" rel="noopener">Inquire</a></td>
          </tr>
          <tr style="border-bottom:1px solid var(--border);">
            <td style="padding:16px;"><strong>🇦🇪 Emirates Airline</strong></td>
            <td style="padding:16px;color:var(--muted);">DXB / LHR / JFK / YYZ</td>
            <td style="padding:16px;color:var(--ink);font-weight:700;">30 to 40 KG</td>
            <td style="padding:16px;color:var(--muted);">N/A (Non-KSA)</td>
            <td style="padding:16px;">✓ Gourmet Multi-Course</td>
            <td style="padding:16px;"><a href="https://wa.me/923078455527?text=Inquiry%20for%20Emirates%20Airline" class="btn btn-gold-outline btn-sm" target="_blank" rel="noopener">Inquire</a></td>
          </tr>
          <tr style="border-bottom:1px solid var(--border);">
            <td style="padding:16px;"><strong>🇶🇦 Qatar Airways</strong></td>
            <td style="padding:16px;color:var(--muted);">DOH / LHR / MAN / CDG</td>
            <td style="padding:16px;color:var(--ink);font-weight:700;">35 to 40 KG</td>
            <td style="padding:16px;color:var(--muted);">Transit Free Allowance</td>
            <td style="padding:16px;">✓ Premium Inflight</td>
            <td style="padding:16px;"><a href="https://wa.me/923078455527?text=Inquiry%20for%20Qatar%20Airways" class="btn btn-gold-outline btn-sm" target="_blank" rel="noopener">Inquire</a></td>
          </tr>
          <tr style="border-bottom:1px solid var(--border);">
            <td style="padding:16px;"><strong>🇵🇰 Pakistan International (PIA)</strong></td>
            <td style="padding:16px;color:var(--muted);">JED / MED / KHI / SKD</td>
            <td style="padding:16px;color:var(--ink);font-weight:700;">40 KG + 7 KG Hand</td>
            <td style="padding:16px;color:#34d399;">✓ Free 5 Liters (KSA)</td>
            <td style="padding:16px;">✓ Traditional Hot Meal</td>
            <td style="padding:16px;"><a href="https://wa.me/923078455527?text=Inquiry%20for%20PIA%20Flights" class="btn btn-gold-outline btn-sm" target="_blank" rel="noopener">Inquire</a></td>
          </tr>
          <tr style="border-bottom:1px solid var(--border);">
            <td style="padding:16px;"><strong>✈️ AirBlue</strong></td>
            <td style="padding:16px;color:var(--muted);">DXB / SHJ / JED / RUH / KHI</td>
            <td style="padding:16px;color:var(--ink);font-weight:700;">20 to 30 KG</td>
            <td style="padding:16px;color:#34d399;">✓ Allowed (KSA)</td>
            <td style="padding:16px;">✓ Snack Pack</td>
            <td style="padding:16px;"><a href="https://wa.me/923078455527?text=Inquiry%20for%20AirBlue%20Flights" class="btn btn-gold-outline btn-sm" target="_blank" rel="noopener">Inquire</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- Selective Deep Navy CTA Band -->
<section class="cta-band">
  <div class="container">
    <h2>Ready To Book Your Flight?</h2>
    <p>Connect with our ticketing team on WhatsApp with your travel dates and passenger count for instant discounted airfares.</p>
    <div class="cta-band-actions">
      <a class="btn btn-whatsapp btn-lg" href="https://wa.me/923078455527?text=Hello%20Al%20Akbar%20Travel!%20I%20want%20to%20book%20a%20flight%20ticket%20now." target="_blank" rel="noopener">
        💬 Instant WhatsApp Booking (0307-8455527)
      </a>
      <a class="btn btn-outline btn-lg" href="tel:+923078455527" style="border-color:rgba(255,255,255,0.4);color:#FFFFFF;">
        📞 Call Sahiwal Desk: 0307-8455527
      </a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
