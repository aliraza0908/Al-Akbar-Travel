<?php
require_once __DIR__ . '/icons.php';
if (!isset($pageTitle)) {
    $pageTitle = "Al Akbar Travel & Tours (Pvt) Ltd. | Official IATA Approved Luxury Travel Agency";
}
if (!isset($pageDesc)) {
    $pageDesc = "Official IATA approved travel agency in Sahiwal. Providing luxury & economy Umrah packages, international flight tickets, express visit visas, and curated holiday tours.";
}
if (!isset($currentPage)) {
    $currentPage = "home";
}
// Public site URL: set SITE_URL in Vercel env vars (e.g. https://www.yourdomain.com).
// Falls back to Vercel's production domain, then to the original domain.
$siteUrl = getenv('SITE_URL');
if (!$siteUrl && getenv('VERCEL_PROJECT_PRODUCTION_URL')) {
    $siteUrl = 'https://' . getenv('VERCEL_PROJECT_PRODUCTION_URL');
}
$siteUrl = rtrim($siteUrl ?: 'https://alakbartravels.site.je', '/');
$reqPath = ltrim((string) parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH), '/');
if ($reqPath === 'index.php') { $reqPath = ''; }
$canonicalUrl = $siteUrl . '/' . $reqPath;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo htmlspecialchars($pageTitle); ?></title>

<!-- Primary SEO Meta Tags -->
<meta name="description" content="<?php echo htmlspecialchars($pageDesc); ?>">
<meta name="keywords" content="Al Akbar Travel, Luxury Umrah Packages Sahiwal, Cheap Flights Pakistan, Saudi Tourist Visa, Umrah Group Tickets, Makkah Madinah 5-Star Hotels, Visit Visa Dubai, PIA Saudia Tickets, IATA Travel Agent Sahiwal">
<meta name="author" content="Al Akbar Travel & Tours (Pvt) Ltd.">
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>">

<!-- Open Graph / Social Preview -->
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl); ?>">
<meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($pageDesc); ?>">
<meta property="og:image" content="<?php echo $siteUrl; ?>/assets/images/og-preview.jpg">
<meta property="og:site_name" content="Al Akbar Travel & Tours">
<meta property="og:locale" content="en_US">

<!-- Mobile & PWA Theme -->
<meta name="theme-color" content="#F7FAFC">
<link rel="icon" type="image/svg+xml" href="assets/images/logo.svg">
<link rel="apple-touch-icon" href="assets/images/og-preview.jpg">

<!-- Google Fonts & Stylesheets -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700;800;900&family=Outfit:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/animations.css?v=28">
<link rel="stylesheet" href="assets/css/style.css?v=29">
<?php if (isset($extraCss)) { echo $extraCss; } ?>

<!-- Schema.org JSON-LD Structured Data for Search Engines -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TravelAgency",
  "name": "Al Akbar Travel & Tours (Pvt) Ltd.",
  "image": "<?php echo $siteUrl; ?>/assets/images/og-preview.jpg",
  "@id": "<?php echo $siteUrl; ?>",
  "url": "<?php echo $siteUrl; ?>",
  "telephone": "+923078455527",
  "email": "alakbartravel3@gmail.com",
  "priceRange": "$$$",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Royal Palm Garden (Near McDonald's)",
    "addressLocality": "Sahiwal",
    "addressRegion": "Punjab",
    "addressCountry": "PK"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 30.6682,
    "longitude": 73.1114
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
    "opens": "00:00",
    "closes": "23:59"
  }
}
</script>
</head>
<body>

<!-- Ambient Starlight & Luxury Dust Canvas -->
<canvas id="ambientLuxuryCanvas"></canvas>

<!-- ==========================================================================
     SOVEREIGN CENTERED LUXURY ISLAND DOCK (EXPANDED GRANDEUR DOCK ~70% WIDTH)
     ========================================================================== -->
<header class="floating-island-nav" id="islandNav">
  <div class="header-inner">
    <!-- Brand Monogram -->
    <a class="brand" href="index.php">
      <img src="assets/images/logo.svg" alt="Al Akbar Travel & Tours" class="brand-logo" onerror="this.src='assets/images/logo.png'">
      <div class="brand-text">
        <strong>Al Akbar</strong>
        <span>Travel &amp; Tours</span>
      </div>
    </a>
    
    <!-- Clean Primary Nav (Centered in Expanded Island Dock) -->
    <nav class="main-nav-minimal hide-md" aria-label="Primary navigation">
      <a href="flights.php" class="nav-link <?php if ($currentPage === 'flights') echo 'active'; ?>">Flights</a>
      <a href="umrah.php" class="nav-link <?php if ($currentPage === 'umrah') echo 'active'; ?>">Umrah</a>
      <a href="hotels.php" class="nav-link <?php if ($currentPage === 'hotels') echo 'active'; ?>">Hotels</a>
      <a href="visas.php" class="nav-link <?php if ($currentPage === 'visas') echo 'active'; ?>">Visas</a>
      <a href="tours.php" class="nav-link <?php if ($currentPage === 'tours') echo 'active'; ?>">Tours</a>
    </nav>

    <!-- Header Actions: Slide-over Drawer Trigger -->
    <div style="display:flex;align-items:center;gap:10px;">
      <button type="button" class="drawer-trigger-btn" id="openDrawerBtn" data-open-drawer aria-label="Open exploration menu">
        <span class="drawer-bars">☰</span>
        <span class="drawer-lbl">Menu</span>
      </button>
    </div>
  </div>
</header>

<!-- ==========================================================================
     SOVEREIGN LUXURY SLIDE-OVER DRAWER (QATAR AIRWAYS STYLE)
     ========================================================================== -->
<div class="drawer-overlay" id="luxuryDrawerOverlay" role="dialog" aria-modal="true" aria-labelledby="drawerTitle">
  <div class="drawer-pane" id="luxuryDrawer">
    <!-- Drawer Header -->
    <div class="drawer-head">
      <div style="display:flex;align-items:center;gap:12px;">
        <img src="assets/images/logo.svg" alt="Al Akbar Travel" style="height:40px;" onerror="this.src='assets/images/logo.png'">
        <div>
          <h3 id="drawerTitle" style="margin:0;font-size:1.15rem;color:var(--ink);">Al Akbar Travel</h3>
          <span style="font-size:0.72rem;color:var(--ocean);font-weight:700;letter-spacing:0.08em;text-transform:uppercase;">IATA Accredited Agency</span>
        </div>
      </div>
      <button type="button" class="drawer-close-btn" data-close-drawer aria-label="Close menu">✕</button>
    </div>

    <!-- Drawer Content Scrollable Area -->
    <div class="drawer-body">
      <!-- Section 1: All Core Navigation -->
      <div class="drawer-section">
        <span class="drawer-section-label">✦ TRAVEL SERVICES &amp; EXPERIENCES</span>
        <ul class="drawer-links-list">
          <li><a href="index.php" class="<?php if ($currentPage === 'home') echo 'active'; ?>"><span>🏠</span> Home Experience</a></li>
          <li><a href="flights.php" class="<?php if ($currentPage === 'flights') echo 'active'; ?>"><span>✈️</span> Global Flight Deals</a></li>
          <li><a href="umrah.php" class="<?php if ($currentPage === 'umrah') echo 'active'; ?>"><span>🕋</span> Sovereign Umrah 2026</a></li>
          <li><a href="hotels.php" class="<?php if ($currentPage === 'hotels') echo 'active'; ?>"><span>🏨</span> Makkah &amp; Madinah Hotels Tariff</a></li>
          <li><a href="visas.php" class="<?php if ($currentPage === 'visas') echo 'active'; ?>"><span>🛂</span> Worldwide Visa Services</a></li>
          <li><a href="tours.php" class="<?php if ($currentPage === 'tours') echo 'active'; ?>"><span>🏝️</span> Curated Holiday Expeditions</a></li>
          <li><a href="about.php" class="<?php if ($currentPage === 'about') echo 'active'; ?>"><span>🏛️</span> Agency Heritage &amp; Accreditations</a></li>
          <li><a href="contact.php" class="<?php if ($currentPage === 'contact') echo 'active'; ?>"><span>📍</span> Sahiwal Flagship Lounge &amp; Contact</a></li>
        </ul>
      </div>

      <!-- Section 2: Executive Portals -->
      <div class="drawer-section">
        <span class="drawer-section-label">🏢 EXECUTIVE PORTALS</span>
        <div style="display:flex;flex-direction:column;gap:8px;">
          <a href="b2b/login.php" class="btn btn-gold-outline btn-sm btn-block" style="justify-content:flex-start;padding:10px 16px;">
            🏢 Authorized B2B Agent Portal Login →
          </a>
          <a href="admin/login.php" class="btn btn-outline btn-sm btn-block" style="justify-content:flex-start;padding:10px 16px;">
            🛡️ Site Editor &amp; Administrator Panel →
          </a>
        </div>
      </div>

      <!-- Section 4: Direct Sahiwal Head Office Concierge -->
      <div class="drawer-section">
        <span class="drawer-section-label">📍 SAHIWAL HEAD OFFICE</span>
        <p style="font-size:0.88rem;color:var(--ink-secondary);line-height:1.55;margin-bottom:12px;">
          Royal Palm Garden (Near McDonald's), Sahiwal, Punjab, Pakistan.<br>
          📞 Direct: <a href="tel:+923078455527" style="color:var(--ocean);font-weight:700;text-decoration:none;">+92-307-8455527</a><br>
          ✉️ Email: <strong>alakbartravel3@gmail.com</strong>
        </p>
        <a class="btn btn-whatsapp btn-sm btn-block" href="https://wa.me/923078455527" target="_blank" rel="noopener">
          💬 Instant WhatsApp Chat
        </a>
      </div>
    </div>
  </div>
</div>
