<?php
$page_title = 'Staff';
include_once $_SERVER['DOCUMENT_ROOT'] . '/_global/header.php';

// Build Query
$query = 'SELECT * ';
$query .= 'FROM users';
$db_results = mysqli_query($db_connection, $query);
?>
<div class="container">
    <h1>Staff</h1>
    <a class="btn btn-primary" href="<?php siteUrl('/admin/users/create.php') ?>">Create</a>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/_components/alert.php'; ?>

    <?php
    // Check if the results returned anything
    if ($db_results && $db_results->num_rows > 0) {
        include $_SERVER['DOCUMENT_ROOT'] . '/_components/list-users.php';
    } else {
        echo '<p>There are currently no users in the database</p>';
    }
    ?>
</div>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/_global/footer.php';
