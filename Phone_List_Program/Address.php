<?php
require_once ("DB.php");
class Address
{
    private $db;

    //address 인스턴스를 생성하면 자동으로 DB연결
    public function __construct()
    {
        $db = new DB();
        $this->db = $db->getDB();
    }

    //테이블의 모든 데이터 가져오기
    public function getList() {
      try {
          $stmt = $this->db->prepare("select * from address limit 0,5");
          $stmt->execute();
          $result = $stmt->fetchAll();
          return $result;
      }  catch(Exception $error) {
          return $error;
      }
    }


    public function getListPage($limitStart, $onPage, $searchSql) {
        try {
            $sql = "select * from address ". $searchSql ." limit ". $limitStart .",". $onPage;
//            echo $sql;
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;

        } catch(Exception $error) {
            return $error;
        }
    }

    //테이블 데이터 추가
//    public function setAddress($name, $age, $tel, $area, $birth) {
//        try {
//            $stmt = $this->db->prepare("insert into address values(null, ?, ?, ?, ?, ?)");
//            $stmt->execute(array($name, $age, $tel, $area, $birth));
//            return true;
//        } catch(Exception $error) {
//            return $error;
//        }
//    }

    public function setAddress($name, $age, $tel, $area, $birth) {
        try {
            $stmt = $this->db->prepare("insert into address values(null, ?, ?, ?, ?, ?)");
            $stmt->execute(array($name, $age, $tel, $area, $birth));
            return true;
        } catch(Exception $error) {
            return $error;
        }
    }

    //테이블 데이터 수정
    public function upAddress($name, $age, $tel, $area, $birth, $no) {
        try {
            $stmt = $this->db->prepare("update address set name = ?, age = ?, tel = ?, area = ?, birth = ? where no = ?");
            $stmt->execute(array($name, $age, $tel, $area, $birth, $no));
            return true;
        } catch(Exception $error) {
            return $error;
        }
    }

    //테이블 데이터 삭제
    public function delAddress($no) {
        try {
            $stmt = $this->db->prepare("delete from address where no = ?");
            $stmt->execute(array($no));
            return true;
        } catch(Exception $error) {
            return $error;
        }
    }

    //전체 게시글 카운팅
    public function getCountList($searchSql) {
        try {
            $sql = "select count(*) as count from address " . $searchSql;
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch(); //한 줄이기 때문에 feach만 한다.
            return $result;
        } catch(Exception $e) {
            return $e;
        }
    }
}