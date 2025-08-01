<?php
require_once '../config.php';
if(!isset($_SESSION['admin_id'])){
    header('Location: index.php');
    exit;
}
$result = $db->query("SELECT id, username, email FROM players");
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>Admin Dashboard</title>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <h2>Admin Dashboard</h2>
    <p>Welcome, <?php echo htmlspecialchars($_SESSION['admin_user']); ?> | <a href="logout.php">Logout</a></p>
    <h3>Players</h3>
    <table class="table">
      <thead>
        <tr><th>ID</th><th>Username</th><th>Email</th></tr>
      </thead>
      <tbody>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?php echo htmlspecialchars($row['id']); ?></td>
          <td><?php echo htmlspecialchars($row['username']); ?></td>
          <td><?php echo htmlspecialchars($row['email']); ?></td>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</body>
</html>
