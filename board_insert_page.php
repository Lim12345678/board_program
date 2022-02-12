<?php
?>

<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>게시글 작성</title>
    <style>
        a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
    <h2>게시글 작성 페이지</h2><hr>
    <form action="board_insert.php" method="post">
        <label for="name">작성자명 : <input type="text" name="name" size="5"></label><br><br>
        <label for="title">제목 : <input type="text" name="title"></label><br><br>
        <label for="content"> 내용 <br><textarea name="content"cols="30" rows="10"></textarea></label><br><br>
        <label for="date">작성날짜 : <input type="date" value="today" id="todayDate" name="date" readonly></label>
        <script>
            document.getElementById('todayDate').value = new Date().toISOString().substring(0,10);;
        </script>

        <br><br>
        <input type="submit" value="등록하기">
        <button><a href="board_view.php">돌아가기</a></button>
    </form>
</body>
</html>
