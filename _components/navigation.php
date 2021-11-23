<?php if (isAdminPage()) { ?>
<!-- Admin Navigation -->
<header class="header ">
  <div class="container header__wrapper">
    <div class="header__left">
      <a href="<?php siteUrl('/'); ?>"><img class="header__logo" src="/dist/images/logo.png" alt="Site Logo"></a>
      <nav class="header__nav">
        <a href="<?php siteUrl('/admin/appointments'); ?>">Appointments</a>
        <a href="<?php siteUrl('/admin/users'); ?>">Users</a>
        <a href="<?php siteUrl('/admin/services'); ?>">Services</a>
        <nav>
    </div>
    <nav aria-labelledby="">
        <a href="<?php siteUrl(''); ?>">Welcome, <?php echo $_SESSION['user']['first_name'] ?></a>
    <nav>
  </div>
</header>

<?php } else { ?>
  <!-- Main Navigation -->
  <header>
  <h1 class="logo"> <a href="/index.php">recipesforme </a> </h1>
  <input type="checkbox" id="nav-toggle" class="nav-toggle">
  <nav>
    <ul>
      <li><a class="b" href="#">Breakfast</a></li>
      <li><a class="b" href="#">Lunch</a></li>
      <li><a class="b" href="#">Dinner</a></li>
      <li><a class="b" href="#">Dessert</a></li>
      <li><a href="cat.html">Explore</a></li>
      <li><a href="#"><img src="dist/images/fsearch.svg" width="26" height="26"> </a></li>
      <li><a href="<?php echo siteUrl(':8888/auth/login.php'); ?>"><img src="dist/images/loginlogo.svg" width="32" height="32"> </a></li>
    </ul>

  </nav>

  <label for="nav-toggle" class="nav-toggle-label">
    <span>

    </span>
  </label>

</header>
  <?php }; ?>
