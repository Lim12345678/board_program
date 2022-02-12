<?php
require_once ('Board.php');
$board = new Board();

$no = $_GET['no'];

$list = $board->selectBoard($no);



?>

<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>게시글 보기</title>
    <style>
        a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
    <h2>게시글 보기</h2><hr>
    <?php
        foreach ($list as $value) {
    ?>
    <form action="board_update.php" method="post">
        <label for="no" hidden>번호 : <input type="text" name="no" value="<?php echo $value['no'] ?>"></label>
        <label for="name">작성자명 : <input type="text" name = "name" value="<?php echo $value['name'] ?>"> </label><br><br>
        <label for="title" >제목 : <input type="text" name = "title" value="<?php echo $value['title'] ?>"></label><br><br>
        <label for="content"> 내용 <br><textarea name="content"cols="30" rows="10"><?php echo $value['content'] ?></textarea></label><br><br>
        <label for="date">작성날짜 : <input type="date" value="today" id="todayDate" name="date" readonly></label>
        <script>
            document.getElementById('todayDate').value = new Date().toISOString().substring(0,10);;
        </script>

        <br><br>
        <input type="submit" value="수정하기">
        <button><a href="board_delete.php?no=<?php echo $value['no'] ?>&name=<?php echo $value['name'] ?>">삭제하기</a></button>
        <button><a href="board_view.php">돌아가기</a></button>
    </form>
    <?php
    }
    ?>
</body>
</html>
