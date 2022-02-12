<?php
require_once ("Board.php");
$board = new Board();

$no = $_GET['no'];
$name = $_GET['name'];

$board->deleteBoard($no);
echo "<script>alert('$name 님의 게시글이 삭제되었습니다!')</script>";
echo "<script>document.location.href='board_view.php'</script>";