<?php
require_once ("Board.php");
$board = new Board();

$name = $_POST['name'];
$title = $_POST['title'];
$content = $_POST['content'];
$date = $_POST['date'];

$board->insertBoard($name, $title, $content, $date);
echo "<script>alert('게시글이 작성되었습니다!')</script>";
echo "<script>document.location.href='board_view.php'</script>";