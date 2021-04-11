<?php
class crud{
    private $db;

    function __construct($conn){
        $this->db = $conn;
    }

    public function insert($fname,$lname,$dob,$email,$contact,$speciality){
        try {
            $sql = "INSERT INTO attendee (firstname,lastname,dob,email,contact,speciality_id) VALUES (:fname,:lname,:dob,:email,:contact,:speciality)";
            $stmt = $this->db->prepare($sql);

            $stmt->bindparam(':fname',$fname);
            $stmt->bindparam(':lname',$lname);
            $stmt->bindparam(':dob',$dob);
            $stmt->bindparam(':email',$email);
            $stmt->bindparam(':contact',$contact);
            $stmt->bindparam(':speciality',$speciality);

            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
?>