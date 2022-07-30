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
            <a style="margin-left:20px" href="superdashboard.php">Home</a>
            <a href="#" style="color:black">About</a>
        </div>
            
     
    </body>
</html>