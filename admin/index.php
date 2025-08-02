<?php
require_once '../config.php';
$message = '';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $db->real_escape_string($_POST['username'] ?? '');
    $password = md5($_POST['password'] ?? '');
    $query = $db->prepare("SELECT id FROM admin WHERE username = ? AND password = ?");
    $query->bind_param('ss', $username, $password);
    $query->execute();
    $query->store_result();
    if($query->num_rows === 1){
        $query->bind_result($id);
        $query->fetch();
        $_SESSION['admin_id'] = $id;
        $_SESSION['admin_user'] = $username;
        header('Location: dashboard.php');
        exit;
    } else {
        $message = 'Invalid admin credentials';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>Admin Login</title>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
 <div class="container mt-5">
   <h2>Admin Login</h2>
   <?php if($message): ?>
     <div class="alert alert-danger"><?php echo $message; ?></div>
   <?php endif; ?>
   <form method="post">
     <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" name="username" class="form-control" required>
     </div>
     <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required>
     </div>
     <button type="submit" class="btn btn-primary">Login</button>
   </form>
 </div>
</body>
</html>
