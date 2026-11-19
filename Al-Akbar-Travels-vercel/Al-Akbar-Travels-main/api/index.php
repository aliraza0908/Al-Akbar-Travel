<?php
// Front controller for Vercel (vercel-php runtime). Every request that is not a
// static file in /public lands here and is mapped to one of the site's PHP pages.
$root = dirname(__DIR__);
chdir($root);                       // pages use relative include 'includes/header.php'

$path = rawurldecode((string) parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH));
$path = trim($path, '/');

function site_url(): string {
    $u = getenv('SITE_URL');
    if (!$u && getenv('VERCEL_PROJECT_PRODUCTION_URL')) $u = 'https://' . getenv('VERCEL_PROJECT_PRODUCTION_URL');
    return rtrim($u ?: 'https://alakbartravels.site.je', '/');
}

// Pages that are allowed to be served (top level + admin/ + b2b/ only).
$pages = [];
foreach (array_merge(glob($root . '/*.php') ?: [], glob($root . '/admin/*.php') ?: [], glob($root . '/b2b/*.php') ?: []) as $f) {
    $pages[] = ltrim(substr($f, strlen($root)), '/');
}

if ($path === 'robots.txt') {
    header('Content-Type: text/plain; charset=utf-8');
    echo "User-agent: *\nAllow: /\nDisallow: /admin/\nDisallow: /b2b/\n\nSitemap: " . site_url() . "/sitemap.xml\n";
    exit;
}
if ($path === 'sitemap.xml') {
    header('Content-Type: application/xml; charset=utf-8');
    echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n" . '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
    foreach (['', 'umrah.php', 'flights.php', 'hotels.php', 'visas.php', 'tours.php', 'about.php', 'contact.php'] as $p) {
        echo '  <url><loc>' . site_url() . '/' . $p . '</loc></url>' . "\n";
    }
    echo '</urlset>';
    exit;
}

if ($path === '') $path = 'index.php';
$target = null;
if (in_array($path, $pages, true)) {
    $target = $path;
} elseif (in_array($path . '.php', $pages, true)) {   // clean URL: /about -> about.php
    $target = $path . '.php';
}

if ($target === null || $target === '404.php') {
    http_response_code(404);
    $target = '404.php';
}
require $root . '/' . $target;
