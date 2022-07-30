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
     <script>
         function show()
         {
             alert ('Your Account is not verified');
         }
     </script>
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
            <a style="margin-left:20px;color:black" href="#">Home</a>
            <a href="
            <?php
            $conf=$data['verified'];
            if($conf=='1')
            {
                echo 'voting.php';
            }?>"onclick='show()'>Vote</a>
            <a href="about.php">About</a>
        </div>
            
            <div id="mainSection">
                <div id="profileSection" style="width:92%;display:flex;padding:50px">
                <div style="width:40%;">
                    <center><img style="width:350px;height:250px" src="../uploads/<?php echo $data['photo']?>" height="100" width="100"></center><br>
                </div>
                <div style="width:10%;">

                </div>
                <div style="font-size:25px">
                    <b>Name : </b><?php echo $data['name'] ?><br><br>
                    <b>Mobile : </b><?php echo $data['mobile'] ?><br><br>
                    <b>Adhara No : </b><?php echo $data['AdharNo'] ?><br><br>
                    <b>Address : </b><?php echo $data['address'] ?><br><br>
                    <b>Status : </b><?php echo $status ?>
                </div>
                </div>
            </div> 
    </body>
</html>