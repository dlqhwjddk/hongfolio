<?
    $host = "localhost";
    $user = "root";
    $pw = "";
    $dbName = "sql-test"; 

    $dbConnect = mysqli_connect($host, $user, $pw, $dbName);


    $dbcon = new mysqli($host, $user, $pw, $dbName);
    
    function mq($sql){
        global $dbcon;
        return $dbcon->query($sql);
    }

    function page($url){
        echo "<script>
                location.href=\"$url\";
              </script>";
    }
?>