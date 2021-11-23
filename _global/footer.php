</main>
<footer class="footer">
  <div class="container footer__inner">
    <p>&copy; <?php echo date('Y'); ?> RecipesForMe. All Rights Reserved</p>
    <nav class="footer__nav" aria-labelledby="">
      <a href="<?php echo siteUrl('/auth/login.php'); ?>">Admin</a>
      <a href="<?php echo siteUrl('/auth/logout.php'); ?>">Logout</a>
    </nav>
  </div>
</footer>
</body>

</html>