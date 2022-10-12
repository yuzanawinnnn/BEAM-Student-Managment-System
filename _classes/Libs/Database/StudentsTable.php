<?php
namespace Libs\Database;
use PDOException;
class StudentsTable
{
 private $db = null;
 public function __construct(MySQL $db)
 {
 $this->db = $db->connect();
 }

 //------------------------------Inserting data-------------------------------//   
 public function insert($data)
 {
 try {
 $query = "INSERT INTO students (Name, Tid, DOB, Age, Gender, Religion, Nationality, Ethnicity, Occupation, Loc_Thai)VALUES(:Name, :Tid, :DOB, :Age, :Gender, :Religion, :Nationality, :Ethnicity, :Occupation, :Loc_Thai)";
 $statement = $this->db->prepare($query);
 $statement->execute($data);
 return $this->db->lastInsertId();
 } catch (PDOException $e) {
 return $e->getMessage()();
 }
 }
//----------------------------End of Inserting data-------------------------------//
    

//Getting all the data   
 public function getAll()
 {
 $statement = $this->db->query("SELECT students.* FROM students");
 return $statement->fetchAll();
 }
//End of Getting all the data 


 
//Profile Updating
 public function updatePhoto($id, $name)
{
 $statement = $this->db->prepare("UPDATE students SET photo=:name WHERE id = :id");
 $statement->execute([ ':name' => $name, ':id' => $id ]);
 return $statement->rowCount();
}
// End of Profile Updating
   

public function stu_delete($ID)
{
 $statement = $this->db->prepare("DELETE FROM students WHERE ID = :ID");
 $statement->execute([ ':ID' => $ID ]);
 $statement = $this->db->prepare("SET @num := 0");
 $statement->execute();
 $statement = $this->db->prepare("UPDATE students SET ID = @num := (@num+1)");
 $statement->execute();
 $statement = $this->db->prepare("ALTER TABLE students AUTO_INCREMENT =1");
 $statement->execute();
 return $statement->rowCount();
}

}

