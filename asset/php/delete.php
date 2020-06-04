<?
//DELETE
    include_once       $_SERVER['DOCUMENT_ROOT']."/exam/db.php";

    $num = $_GET['num'];
    $query = "delete from biz where num='$num'";
    
    mq($query);
    page('list.php');

?>