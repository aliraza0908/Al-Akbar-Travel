<?php
http_response_code(404);
$pageTitle = "Page Not Found | Al Akbar Travel & Tours (Pvt) Ltd.";
$pageDesc = "The page you are looking for could not be found.";
$currentPage = "";
include 'includes/header.php';
?>
<section class="section-pearl" style="min-height:60vh;display:flex;align-items:center;">
  <div class="container" style="text-align:center;padding:80px 0;">
    <h1 style="font-size:4rem;margin:0;">404</h1>
    <p class="muted" style="margin:12px 0 28px;">Sorry, we could not find that page.</p>
    <a class="btn btn-primary" href="/">Back to Home</a>
    <a class="btn btn-whatsapp" href="/contact.php" style="margin-left:8px;">Contact Us</a>
  </div>
</section>
<?php include 'includes/footer.php'; ?>
