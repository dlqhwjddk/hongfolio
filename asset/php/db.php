<?
    $host = "localhost";
    $user = "wjddk427";
    $pw = "h24100427!";
    $dbName = "wjddk427"; 

    $dbConnect = mysqli_connect($host, $user, $pw, $dbName);
    $dbcon = new mysqli($host, $user, $pw, $dbName);
    
    function mq($sql){
        global $dbcon;
        return $dbcon->query($sql);
    }

?>
