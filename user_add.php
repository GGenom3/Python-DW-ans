<html>
<head>
    <title>Add image blog</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="user_add.php" method="post">
        <table width="25%" border="0">
            <tr> 
                <td>name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr> 
                <td>email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr> 
                <tr>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
            </tr>
        </table>
    </form>

    <?php

    include("connect.php");
    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];

        $result = mysqli_query($koneksi, "INSERT INTO User(name,email) VALUES('$name','$email')");
    }
    ?>
</body>
</html>
