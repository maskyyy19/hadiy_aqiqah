<?php 
    include_once("../functions/koneksi.php");
    include_once("../functions/helper.php");

    $id = isset($_GET['id']) ? $_GET['id'] : false;
    mysqli_query($koneksi, "DELETE FROM users WHERE id='$id'");

    header("location:" .BASE_URL."dashboard/users.php");
?>