<?php
session_start();
if(isset($_SESSION['name'])){
    $text = $_POST['text'];
    echo $text;     
    $fp = fopen("log.html", 'a');
date_default_timezone_set("America/New_York");
    fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>".$_SESSION['name']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
    fclose($fp);
}
?>
