<?php
    include_once "db.php";
    $conn = get_conn();
    $i_board = $_GET['i_board'];
    $s_query = "SELECT title, ctnt FROM t_board6 WHERE i_board = $i_board";
    $result = mysqli_query($conn, $s_query);
    mysqli_close($conn);
    if($row = mysqli_fetch_assoc($result))
    {
        $title = $row['title'];
        $ctnt = $row['ctnt'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글수정</title>
</head>
<body>
    <h1>글수정</h1>
    <a href="list.php"><button>리스트</button></a>
    <a href="detail.php?i_board=<?=$i_board?>"><button>글로이동</button></a>
    <form action="mod_proc.php" method="post">
        <input type="hidden" name="i_board" value=<?=$i_board?>>
        <div><input type="text" name="title" placeholder="제목" value=<?=$title?>></div>
        <div><textarea name="ctnt" cols="22" rows="10" placeholder="내용"><?=$ctnt?></textarea></div>
        <div>
            <input type="submit" value="글수정">
            <input type="reset" value="초기화">
        </div>
    </form>
</body>
</html>