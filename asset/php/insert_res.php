<?
//INSERT
    include_once
    $_SERVER['DOCUMENT_ROOT']."/exam/db.php";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $job = $_POST['job'];
    
    $query = "INSERT into biz(
        name, email, tel, job
    ) VALUES (
        '$name','$email','$tel','$job'
    )";
    mq($query);
    page('list.php');
?>