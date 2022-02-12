<?php
require_once ('DB.php');

//Address 클래스는 데이터베이스의 address 테이블을 관리할 때 사용
class Address
{
    private $db;

    //address 인스턴스를 생성하면 자동으로 db연결
    public function __construct()
    {
        $db = new DB();
        $this->db = $db->getDB();
    }

//    address 테이블의 모든 데이터를 가져옴
    public function getList() {
        try {
            $stmt = $this->db->prepare("select * from address");
            $stmt->execute();
            $result = $stmt->fetchAll();   //실행한 결과 result에 담는다.
            return $result;     //실행 결과 리턴
        } catch(PDOException $e) {
            return $e;
        }
    }

//    address 테이블의 데이터를 추가시키는 함수
    public function setAddress($name, $age, $tel, $area, $birth) {
        try {
            $stmt = $this->db->prepare("insert into address values(null, ?, ?, ?, ?, ?)");
            $stmt->execute(array($name, $age, $tel, $area, $birth));
            return true;
        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }

    //    address 테이블의 데이터를 수정시키는 함수
    public function upAddress($name, $age, $tel, $area, $birth, $no) {
        try {
            $stmt = $this->db->prepare("update address set name = ?, age = ?, tel = ?, area = ?, birth = ? where no = ?");
            $stmt->execute(array($name, $age, $tel, $area, $birth, $no));
            return true;
        } catch(PDOException $e) {
            echo $e;
            return false;
        }
    }

    //    address 테이블의 데이터를 삭제하는 함수
    public function delAddress($no) {
        try {
            $stmt = $this->db->prepare("delete from address where no = ?");
            $stmt->execute(array($no));
            return true;
        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }
}