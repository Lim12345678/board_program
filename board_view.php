<?php
require_once ("Board.php");
$board = new Board();
$list = $board->getList();
$count = 0;
?>

<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>게시판</title>
    <style>
        * {
            padding: 0;
            margin: 0 auto;
            text-align: center;
        }

        table {
            margin-top: 20px;
        }
        td, th {
            padding: 0.3rem;
        }
        th {
            background-color: lightgray;
        }
        a {
            text-decoration: none;
            color: black;
        }
        button {
            margin-top: 20px;
            padding: 0.2rem;
            font-size: 1.2rem;
            display: flex;
        }
    </style>


</head>
<body>
    <h2>광주대학교 자유게시판</h2><hr>

    <button><a href="board_insert_page.php">게시글 작성하기</a></button>
    <table border="1">
        <tr>
            <th>번호</th>
            <th>작성자명</th>
            <th>게시글 제목</th>
            <th>작성 날짜</th>
        </tr>

        <?php
            foreach ($list as $value) {
                $count = $count + 1;

        ?>
        <tr>
            <td><?php echo $count; ?></td>
            <td hidden><?php echo $value['no'] ?></td>
            <td><?php echo $value['name'] ?></td>
            <td><a href="board_content.php?no=<?php echo $value['no']?>"><?php echo $value['title'] ?></a></td>
            <td><?php echo $value['date'] ?></td>
        </tr>

        <?php
            }
        ?>
    </table>
</body>
</html>
