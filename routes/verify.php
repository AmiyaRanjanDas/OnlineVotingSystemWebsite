<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("location: ../");
    }
    $data = $_SESSION['data'];

    if($_SESSION['status']==1){
        $status = '<b style="color: green">Voted</b>';
    }
    else{
        $status = '<b style="color: red">Not Voted</b>';
    }
?>


<html>
    <head>
        <title>Online voting system - Dashboard</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
    </head>
    <script>
        function show()
        {
            var r=confirm("Do you want to Verify this Account!!");
            if(r==false)
            {
                window.location.href="#";        
            }
        }
    </script>
     <style>
         #navbar
         {
             padding:13px;
             margin:15px 7px;
         }
          #navbar a
          {
            font-size:25px;
            color:white;
            margin-left:60px;
          }
        #navbar a:hover{
           color:blue;
        }  
     </style>
    <body>
        
            <center>
            <div id="headerSection">
            <a href="../"><button id="back-button"> Back</button></a>
            <a href="logout.php"><button id="logout-button">Logout</button></a>
            <h1>Online Voting System</h1>  
            </div>
            </center>
            <hr>

        <div id="navbar" style="background-color:rgba(0,0,0,0.5);display:flex">
            <a style="margin-left:20px;" href="superdashboard.php">Home</a>
            <a href="#" style="color:black">Verify</a>
            <a href="sabout.php">About</a>
        </div>
    <?php       
    $connect = mysqli_connect("localhost", "root", "", "online-voting-system");
    $sql="select * from user where role='1'";
    $res= mysqli_query($connect,$sql);
    $num=mysqli_num_rows($res);
    if($num>0)
    {
    ?>
    <table style=" border-collapse: collapse;background-color:rgba(0,0,0,0.3);border-radius: 10px;margin: auto;" >
    <tr>
    
        <th style="font-size:30px; border: 2px solid white;padding: 15px 30px;text-align: center;color: black;">Name</th>
        <th style="font-size:30px; border: 2px solid white;padding: 15px 30px;text-align: center;color: black;">Mobile</th>
        <th style="font-size:30px; border: 2px solid white;padding: 15px 30px;text-align: center;color: black;">Adhara No</th>
        <th style="font-size:30px; border: 2px solid white;padding: 15px 30px;text-align: center;color: black;">Address</th>
        <th style="font-size:30px; border: 2px solid white;padding: 15px 30px;text-align: center;color: black;">Verified</th>
    </tr>  
    <?php
    $item=0;
    
    while($item = mysqli_fetch_array($res))
    {  
    ?>  
        <tr>
      
            <td style="font-size:25px; border: 2px solid white;padding: 15px 30px;text-align: center;color: black; background-color:cyan"><?php echo $item["name"];  ?></td>
            <td style="font-size:25px; border: 2px solid white;padding: 15px 30px;text-align: center;color: black; background-color:cyan"><?php echo $item["mobile"]; ?></td>
            <td style="font-size:25px; border: 2px solid white;padding: 15px 30px;text-align: center;color: black; background-color:cyan"><?php echo $item["AdharNo"]; ?></td>
            <td style="font-size:25px; border: 2px solid white;padding: 15px 30px;text-align: center;color: black; background-color:cyan"><?php echo $item["address"];?></td>
            
            <?php
               $verified=$item["verified"];
               if($verified=="0")
               {
            ?>
             <form action="../api/verify.php" method="post">
             <input type="hidden" name="mob" value="<?php echo $item["mobile"]; ?>">
             <td style='padding: 7px 20px;text-align: center;color:white; background-color:black'>
             <input type="submit" name="verify" value=Verify onclick='show()'
             onmouseover="this.style.color='blue'"onmouseout="this.style.color='white'"
             style="padding: 5px 10px;text-align:center;font-size:23px;color:white; background-color:black">
         </td>
         </form>
         <?php
               }
            else{
                ?><td style="font-size:25px; border: 2px solid white;padding: 15px 30px;text-align: center;color: black; background-color:cyan">
                <?php
                echo "<p style='color:green;'>Verified</p>";
                ?></td><?php
               }
            ?>
        </tr>      
    <?php                  
    }
    }
    else
    {
        echo "<h2><center>No Voters exist</center></h2>";
    } 
      ?>
    </body>
</html>