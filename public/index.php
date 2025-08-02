<?php
require_once '../config.php';
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>Metin2 Server</title>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
 <div class="container mt-5">
   <h1>Welcome to Metin2 Server</h1>
   <?php if(isset($_SESSION['user_id'])): ?>
     <p>Hello, <?php echo htmlspecialchars($_SESSION['username']); ?>. <a href="logout.php">Logout</a></p>
   <?php else: ?>
     <p><a href="login.php">Login</a> | <a href="register.php">Register</a></p>
   <?php endif; ?>
 </div>
</body>
</html>
