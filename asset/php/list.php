<!DOCTYPE html>
<html>
<head>
<title>Portfolio</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="asset/css/main.css" type=text/css rel=stylesheet>
</head>
<body>
<article class="work_list">
    <h2>프로젝트 리스트</h2>
    <ul>
<? 
    include_once
    $_SERVER['DOCUMENT_ROOT']."/exam/db.php";
    $query = "select * from biz order by num desc";
    $result = mq($query);
    while($row = mysqli_fetch_array($result)){
?>
    <li>
        <!--num, img, title, date, state-->
        <input type="checkbox">
        <a data-num="<?=$row['num']?>">
            <code><?=$row['num']?></code>
            <code><?=$row['name']?></code>
            <code><?=$row['email']?></code>
            <code><?=$row['tel']?></code>
            <code><?=$row['job']?></code>
        </a>
        <a href="delete.php?num=<?=$row['num']?>" class="del">[삭제]</a>
    </li>

<? } ?>
            
    </ul>
</article>


</body>
</html>