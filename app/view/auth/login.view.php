<?php include 'app/view/part/head.php'; ?><?php include 'app/view/part/nav.php'; ?>

<h2>Login</h2>
<?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>

<form method="POST" action="/login">
  <label>Email:</label><br>
  <input type="email" name="email" required><br><br>

  <label>Password:</label><br>
  <input type="password" name="password" required><br><br>

  <button type="submit">Login</button>
</form>

<?php include 'app/view/part/footer.php'; ?>