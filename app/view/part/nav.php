
<nav>
  <a href="/home">Home</a> |
  <a href="/register">Register</a> |
  <a href="/login">Login</a>
  <?php if (!empty($_SESSION['user'])): ?>
    | <a href="/logout">Logout</a>
  <?php endif; ?>
</nav>
<hr>