<?php
require_once '../config.php';
$message = '';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $db->real_escape_string($_POST['username'] ?? '');
    $password = md5($_POST['password'] ?? '');
    $email = $db->real_escape_string($_POST['email'] ?? '');
    $query = $db->prepare("SELECT id FROM players WHERE username = ?");
    $query->bind_param('s', $username);
    $query->execute();
    $query->store_result();
    if($query->num_rows > 0){
        $message = 'Username already exists';
    } else {
        $query = $db->prepare("INSERT INTO players (username, password, email) VALUES (?, ?, ?)");
        $query->bind_param('sss', $username, $password, $email);
        if($query->execute()){
            $message = 'Registration successful';
        } else {
            $message = 'Error during registration';
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>Register</title>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
 <div class="container mt-5">
   <h2>Register</h2>
   <?php if($message): ?>
     <div class="alert alert-info"><?php echo $message; ?></div>
   <?php endif; ?>
   <form method="post">
     <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" name="username" class="form-control" required>
     </div>
     <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required>
     </div>
     <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required>
     </div>
     <button type="submit" class="btn btn-primary">Register</button>
   </form>
 </div>
</body>
</html>
