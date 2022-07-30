<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $mob=$_POST['mob'];
         $connect = mysqli_connect("localhost", "root", "","online-voting-system");
         $sql="UPDATE user SET verified='1' WHERE mobile=$mob";
         $res= mysqli_query($connect,$sql);    
         echo '<script>
         window.location = "../routes/verify.php";
     </script>';
    ?>
</body>
</html>