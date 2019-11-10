<?php
if(isset($_POST['lang'])){
    $language = $_POST["lang"] ;
    session_start() ;

    $_SESSION["language"] = $language ;
}
    if ($language=='English'){header('location: index.php');}else
    {
        header('location:pashto/index.php');
    }

?>