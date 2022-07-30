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
            <a style="margin-left:20px" href="home.php">Home</a>
            <a href="#" style="color:black">About</a>
        </div>
        <div>
            <h1>About</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat illo earum eveniet incidunt obcaecati! Soluta officia, dolores eum veritatis doloribus, reiciendis ipsum quisquam culpa totam pariatur minima deserunt sequi ullam aspernatur odio ea iusto cum est deleniti, omnis et impedit esse voluptate dolor. Omnis facilis mollitia corrupti iusto ad accusamus?</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti alias iste tempore accusantium reiciendis natus veniam mollitia nam adipisci laboriosam!</p>
            <br><h2>History</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum nesciunt id maxime ab excepturi, voluptatibus repudiandae reiciendis doloremque iusto suscipit error praesentium unde sunt animi est asperiores assumenda eveniet odit?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid nobis itaque asperiores mollitia nihil accusamus rem assumenda tempore fugiat? Est?</p>
            
        </div>
     
    </body>
</html>