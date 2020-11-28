<html>
<head>
    <title>Add image blog</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="image_add.php" method="post">
        <table width="25%" border="0">
            <tr> 
                <td>title</td>
                <td><input type="text" name="title"></td>
            </tr>
            <tr> 
                <td>content</td>
                <td><input type="textbox" name="content"></td>
            </tr>
            <tr> 
                <td>file image</td>
                <td><input type="file" name="file_image"></td>
            </tr>
            <tr> 
                <td>user id</td>
                <td><input type="text" name="user_id"></td>
                <tr>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
            </tr>
        </table>
    </form>

    <?php
    include("connect.php");
    if(isset($_POST['Submit'])) {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $file_image = $_POST['file_image'];
        $user_id = $_POST['user_id'];
        

        
        $result = mysqli_query($koneksi, "INSERT INTO Image_blog(title, content, file_image, user_id) VALUES('$title', '$content', '$file_image', '$user_id')");
    }
    ?>
</body>
</html>
