
<?php
    $x = "dorian";
    if ( $_POST['motdepasse'] == $x ) {
        header("Location:decouverte.html");
        exit;                
    } else {
        header("Location:ail.php");
        exit;
    }
?>
