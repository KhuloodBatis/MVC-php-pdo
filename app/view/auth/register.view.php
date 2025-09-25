<?php 
include 'app/view/part/head.php'; ?><?php include 'app/view/part/nav.php'; ?>

<h2>Register</h2>
<?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>

<form method="POST" action="/register">
  <label>Username:</label><br>
  <input type="text" name="username" required><br><br>

  <label>Email:</label><br>
  <input type="email" name="email" required><br><br>

  <label>Password:</label><br>
  <input type="password" name="password" required><br><br>

  <button type="submit">Register</button>
</form>

<?php include 'app/view/part/footer.php'; ?>