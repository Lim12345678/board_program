<?php
require_once ("Board.php");
$board = new Board();

$no = $_POST['no'];
$name = $_POST['name'];
$title = $_POST['title'];
$content = $_POST['content'];
$date = $_POST['date'];

$board->updateBoard($name, $title, $content, $date, $no);
echo "<script>alert('게시글 수정 완료!')</script>";
echo "<script>document.location.href='board_view.php'</script>";

?>
