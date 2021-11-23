<?php
include_once $_SERVER['DOCUMENT_ROOT'] .'/_global/header.php';
?>
<div class="mcontainer">
  <h1>recipiesforme Admin</h1>
  <p>Create a new user account below!</p>
  <a href="<?php echo siteUrl(':8888/recipies/create.php');?>" class="btn btn-primary">Create</a>
</div>
<?php include_once $_SERVER['DOCUMENT_ROOT'] .'/_global/footer.php'?>