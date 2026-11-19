<?php
session_start();
$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';
    
    if ($username === 'admin' && $password === 'admin123') {
        $_SESSION['admin_auth'] = true;
        header('Location: ../index.php');
        exit;
    } else {
        $error = "Invalid administrator username or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Site Admin &amp; Editor — Al Akbar Travel</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/style.css?v=25">
<style>
body {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: radial-gradient(circle at 50% 20%, #126B91 0%, #17364B 60%, #0F2432 100%);
  padding: 24px;
}
.admin-card {
  background: rgba(255, 255, 255, 0.96); color: #17364B;
  backdrop-filter: blur(28px) saturate(190%);
  -webkit-backdrop-filter: blur(28px);
  border: 1px solid rgba(255, 255, 255, 0.12);
  border-radius: var(--radius-xl);
  max-width: 440px;
  width: 100%;
  overflow: hidden;
  box-shadow: 0 30px 80px rgba(0, 0, 0, 0.8);
}
.admin-head {
  padding: 36px 30px 24px;
  text-align: center;
  border-bottom: 1px solid rgba(255, 255, 255, 0.08);
}
.admin-body {
  padding: 32px 30px;
}
</style>
</head>
<body>
<canvas id="ambientLuxuryCanvas"></canvas>

<div class="admin-card">
  <div class="admin-head">
    <div style="font-size:2.6rem;margin-bottom:10px;">🛡️</div>
    <h1 style="color:#ffffff;font-size:1.45rem;margin:0 0 4px;">Site Editor &amp; Admin Panel</h1>
    <p style="color:var(--muted);font-size:0.85rem;margin:0;">Al Akbar Travel &amp; Tours (Pvt) Ltd.</p>
  </div>
  
  <div class="admin-body">
    <?php if (!empty($error)): ?>
      <div style="background:rgba(239,68,68,0.15);color:#fca5a5;border:1px solid rgba(239,68,68,0.3);padding:10px 14px;border-radius:var(--radius-sm);margin-bottom:18px;font-size:0.88rem;">
        ⚠️ <?php echo htmlspecialchars($error); ?>
      </div>
    <?php endif; ?>
    
    <form method="POST" action="">
      <div class="form-group">
        <label class="form-label" for="username">Administrator Username</label>
        <input type="text" id="username" name="username" class="form-control" placeholder="Enter admin username" required autofocus autocomplete="username">
      </div>
      
      <div class="form-group">
        <label class="form-label" for="password">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Enter admin password" required autocomplete="current-password">
      </div>
      
      <button type="submit" class="btn btn-primary btn-block" style="padding:14px;margin-top:14px;">
        Sign In to Administration →
      </button>
    </form>
    
    <div style="text-align:center;margin-top:24px;padding-top:16px;border-top:1px solid rgba(255,255,255,0.08);font-size:0.85rem;">
      <a href="../index.php" style="color:var(--muted);text-decoration:none;">← Return to Live Website</a>
    </div>
  </div>
</div>

<script src="../assets/js/main.js"></script>
</body>
</html>
