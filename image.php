<?php
include('connect.php');
if(isset($_GET['id'])) 
{
    $query = mysqli_query($koneksi,"select * from Image_blog where id='".$_GET['id']."'");
    $row = mysqli_fetch_array($query);
    echo $row["file_image"];
}
else
{
    header('location:index.php');
}
?>

