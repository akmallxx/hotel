<?php
include './.config/db.php';

$pageName = ucfirst(basename(__FILE__, ".php"));
?>
<html lang="id">
<head>
  <title><?php echo $pageName . " - " . $webname ?>  </title>
  <?php include 'header.php'; ?>
</head>

<div class="modal-body">
  <form method="post" action="user/login.php" id="login-form" name="login-form">
    <div>
      <div class="mb-3">
        <label for="inputEmail" class="form-label">Email</label>
        <input type="email" class="form-control" name="login-email" required>
      </div>
      <div class="mb-3">
        <label for="inputPassword" class="form-label">Password</label>
        <input type="password" class="form-control" name="login-password" id="login-password" required>
      </div>


      <!-- Button Modal -->
      <div class="mb-3 text-center">
        <br>
        <button type="submit" class="btn btn-success">
          Login
        </button>
        <br>
        Belum punya akun? <a data-bs-dismiss="modal" data-bs-toggle="modal" href="#register-modal">Register</a>
      </div>
    </div>
  </form>
</div