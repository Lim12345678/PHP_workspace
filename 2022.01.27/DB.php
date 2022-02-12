<?php

class DB
{
    private $user = "root";
    private $pw = "1234";
    private $option = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
    private $db;

    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:host = localhost; dbname=study", $this->user, $this->pw, $this->option);
            $this->db->exec("set names UTF8");
//            echo "연결 성공!";
        } catch(PDOException $error) {
            echo "DB연결 실패ㅜ.ㅜ<br>";
            echo "에러 원인 : ".$error;
        }
    }

    public function getDB() {
        return $this->db;
    }

    public function selectTest() {
        try {
//            $stmt = $this->db->prepare("select * from address where name = ?");
            $stmt = $this->db->prepare("select * from address");
            $stmt->execute(array("오"));
            $result = $stmt->fetchAll();
            return $result;

        } catch(PDOException $e) {
            return $e;
        }
    }

    public function insertTest($name, $age, $phone, $area, $birth) {
        try {
            $stmt = $this->db->prepare("insert into address values(null, ?, ?, ?, ?, ?)");
            $stmt->execute(array($name, $age, $phone, $area, $birth));
            return true;

        } catch(PDOException $e) {
            echo $e;
            return false;
        }
    }

    public function updateTest($name, $no) {
        try {
            $stmt = $this->db->prepare("update address set name = ? where no = ?");
            $stmt->execute(array($name, $no));
            return true;
        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }

    public function deleteTest($no) {
        try {
            $stmt = $this->db->prepare("delete from address where no = ?");
            $stmt->execute(array($no));
            return true;

        } catch(PDOException $e) {
            echo $e;
            return false;
        }
    }

}