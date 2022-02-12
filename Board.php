<?php
require_once ("DB.php");
class Board
{
    private $db;

    public function __construct()
    {
        $db = new DB();
        $this->db = $db->getDB();
    }

    public function getList() {
        try {
            $stmt = $this->db->prepare("select * from board");
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        } catch(PDOException $e) {
            return $e;
        }
    }

    public function selectBoard($no) {
        try {
            $stmt = $this->db->prepare("select * from board where no = ?");
            $stmt->execute(array($no));
            $result = $stmt->fetchAll();
            return $result;
        } catch(PDOException $e) {
            return $e;
        }
    }
    public function insertBoard($name, $title, $content, $date) {
        try {
            $stmt = $this->db->prepare("insert into board values('null', ?, ?, ?, ?)");
            $stmt->execute(array($name, $title, $content, $date));
            return true;
        } catch(PDOException $e) {
            return $e;
        }
    }

    public function updateBoard($name, $title, $content, $date, $no) {
        try {
            $stmt = $this->db->prepare("update board set name = ?, title = ?, content = ?, date = ? where no = ?");
            $stmt->execute(array($name, $title, $content, $date, $no));
            return true;
        } catch(PDOException $e) {
            return $e;
        }
    }

    public function deleteBoard($no) {
        try {
            $stmt = $this->db->prepare("delete from board where no = ?");
            $stmt->execute(array($no));
            return true;
        } catch(PDOException $e) {
            return $e;
        }
    }
}