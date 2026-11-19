<?php
session_start();
$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';
    
    if ($username === 'agent' && $password === 'agent123') {
        $_SESSION['b2b_agent'] = $username;
        header('Location: ../umrah.php?agent=' . urlencode($username));
        exit;
    } else if (!empty($username) && strlen($password) >= 6) {
        $_SESSION['b2b_agent'] = $username;
        header('Location: ../umrah.php?agent=' . urlencode($username));
        exit;
    } else {
        $error = "Please enter a valid agent username and password (minimum 6 characters).";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>B2B Partner Agent Portal — Al Akbar Travel &amp; Tours (Pvt) Ltd.</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700&family=Outfit:wght@500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/animations.css?v=25">
<link rel="stylesheet" href="../assets/css/style.css?v=25">
<style>
body {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: radial-gradient(circle at 50% 20%, #126B91 0%, #17364B 60%, #0F2432 100%);
  color: #fff;
  padding: 24px;
}
.portal-box {
  display: grid;
  grid-template-columns: 1fr 1fr;
  max-width: 960px;
  width: 100%;
  background: rgba(255, 255, 255, 0.96); color: #17364B;
  backdrop-filter: blur(28px) saturate(190%);
  -webkit-backdrop-filter: blur(28px);
  border: 1px solid rgba(255, 255, 255, 0.12);
  border-radius: var(--radius-xl);
  overflow: hidden;
  box-shadow: 0 30px 80px rgba(0, 0, 0, 0.8), inset 0 1px 1px rgba(255, 255, 255, 0.1);
}
.portal-brand-pane {
  background: linear-gradient(145deg, #126B91 0%, #17364B 100%); color: #FFFFFF;
  padding: 48px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  border-right: 1px solid rgba(255, 255, 255, 0.08);
  position: relative;
}
.portal-form-pane {
  padding: 48px;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
.password-box {
  position: relative;
  display: flex;
  align-items: center;
}
.password-toggle-btn {
  position: absolute;
  right: 14px;
  background: none;
  border: none;
  cursor: pointer;
  color: var(--muted);
  font-size: 1.1rem;
}
@media (max-width: 820px) {
  .portal-box { grid-template-columns: 1fr; }
  .portal-brand-pane { display: none; }
  .portal-form-pane { padding: 36px 24px; }
}
</style>
</head>
<body>
<canvas id="ambientLuxuryCanvas"></canvas>

<div class="portal-box reveal">
  <!-- Left Side: Brand & Perks -->
  <div class="portal-brand-pane">
    <div>
      <div style="display:flex;align-items:center;gap:12px;margin-bottom:28px;">
        <img src="../assets/images/logo.svg" alt="Al Akbar Travel" style="height:48px;" onerror="this.src='../assets/images/logo.png'">
        <div>
          <h3 style="color:#fff;margin:0;font-size:1.3rem;">Al Akbar Travel</h3>
          <span style="font-size:0.75rem;color:var(--gold);font-weight:700;letter-spacing:0.08em;text-transform:uppercase;">IATA Accredited Agency</span>
        </div>
      </div>
      
      <h2 style="font-family:var(--font-display);font-size:2rem;line-height:1.2;margin-bottom:18px;color:#ffffff;">
        Authorized B2B Partner Portal
      </h2>
      <p style="color:var(--ink-secondary);font-size:0.95rem;line-height:1.65;margin-bottom:32px;">
        Access exclusive wholesale Umrah group allotments, sub-agent airline flight inventories, instant visa issuance discounts, and direct 24/7 reservations desk.
      </p>
      
      <div style="display:flex;flex-direction:column;gap:14px;">
        <div style="display:flex;align-items:center;gap:12px;font-size:0.92rem;color:var(--ink-secondary);">
          <span style="color:var(--gold);font-size:1.1rem;">✓</span>
          <span>Wholesale Umrah group seats across Saudia, PIA &amp; AirBlue</span>
        </div>
        <div style="display:flex;align-items:center;gap:12px;font-size:0.92rem;color:var(--ink-secondary);">
          <span style="color:var(--gold);font-size:1.1rem;">✓</span>
          <span>Direct Makkah &amp; Madinah hotel vouchers with instant verification</span>
        </div>
        <div style="display:flex;align-items:center;gap:12px;font-size:0.92rem;color:var(--ink-secondary);">
          <span style="color:var(--gold);font-size:1.1rem;">✓</span>
          <span>Dedicated agent commission tracking &amp; 24/7 ticketing desk</span>
        </div>
      </div>
    </div>
    
    <div style="font-size:0.85rem;color:var(--muted);border-top:1px solid rgba(255,255,255,0.08);padding-top:20px;margin-top:32px;">
      Head Office Agency Desk: <strong>+92-307-8455527</strong>
    </div>
  </div>
  
  <!-- Right Side: Login Form -->
  <div class="portal-form-pane">
    <div style="margin-bottom:28px;">
      <span class="topbar-badge" style="margin-bottom:12px;">★ AGENT AUTHENTICATION</span>
      <h2 style="font-size:1.7rem;color:#ffffff;margin-bottom:6px;">Sign In to Portal</h2>
      <p style="color:var(--muted);font-size:0.88rem;margin:0;">Enter your agency credentials to access live inventory tools.</p>
    </div>
    
    <?php if (!empty($error)): ?>
      <div style="background:rgba(239, 68, 68, 0.15);color:#fca5a5;border:1px solid rgba(239, 68, 68, 0.3);padding:12px 16px;border-radius:var(--radius-sm);margin-bottom:20px;font-size:0.88rem;">
        ⚠️ <?php echo htmlspecialchars($error); ?>
      </div>
    <?php endif; ?>
    
    <form method="POST" action="">
      <div class="form-group">
        <label class="form-label" for="username">Agent ID / Username</label>
        <input type="text" id="username" name="username" class="form-control" placeholder="e.g. agent01" required autofocus autocomplete="username">
      </div>
      
      <div class="form-group">
        <label class="form-label" for="password">Password</label>
        <div class="password-box">
          <input type="password" id="password" name="password" class="form-control" placeholder="••••••••" required autocomplete="current-password" style="padding-right:44px;">
          <button type="button" class="password-toggle-btn" onclick="togglePass('password', this)" title="Show/Hide Password">👁️</button>
        </div>
      </div>
      
      <button type="submit" class="btn btn-primary btn-block" style="padding:14px;margin-top:14px;">
        Sign In to Agent Portal →
      </button>
    </form>
    
    <div style="text-align:center;margin-top:28px;padding-top:20px;border-top:1px solid rgba(255,255,255,0.08);font-size:0.85rem;color:var(--muted);">
      <p style="margin-bottom:8px;">New Agency Partnership? Call: <a href="tel:+923078455527" style="color:var(--gold-bright);font-weight:700;">+92-307-8455527</a></p>
      <a href="../index.php" style="color:#ffffff;text-decoration:none;font-weight:600;">← Return to Main Website</a>
    </div>
  </div>
</div>

<script>
function togglePass(id, btn) {
  var input = document.getElementById(id);
  if (input.type === 'password') {
    input.type = 'text';
    btn.textContent = '🔒';
  } else {
    input.type = 'password';
    btn.textContent = '👁️';
  }
}
</script>
<script src="../assets/js/main.js"></script>
</body>
</html>
