<?php 

require_once 'db_connect.php';
function showAllSellers(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `seller`  ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
function checkUsernameValidity($uname){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM seller WHERE suname ='$uname' ";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if(count($rows)>0){
            return "false";
        }else{
            return "true";
        }
}
function showSeller($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `seller` where ID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}
function addSeller($data){
	$conn = db_conn();
    $selectQuery = "INSERT into seller (sname, semail, suname, spass, spcategory)
VALUES (:name, :email, :username, :pass, :spc)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
            ':email' => $data['email'],
        	':username' => $data['uname'],
        	':pass' => $data['password'],
            ':spc' => $data['spc'],
            
            

        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}
function updateSeller($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE seller set sname = ?, semail = ?, spcategory = ? where id = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['email'], $data['spc'], $id ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}
function deleteSeller($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `seller` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}


?>