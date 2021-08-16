<?php 
include('db_connect.php');
$search=$_POST['search'];
$conn = db_conn();
    $selectQuery = "SELECT * FROM seller ";
    if($search!=''){
    	$selectQuery.="WHERE sname LIKE '%$search%' OR suname LIKE '%$search%' OR spcategory LIKE '%$search%'";
    }
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
if(isset($data['0'])){
	$html='<table class="table table-striped">
     <thead>
          <tr>
          <th>Name</th> 
          <th>E-mail</th>
          <th>User name</th>
          <th>Sellers product category</th> 
          <th>Action</th>  
          </tr>
     </thead>';
     foreach($data as $list){
     $html.='<tr>	
     	<td><a href="showEmployee.php?id='.$list['id'].'">'.$list['sname'].'</a></td> 
        <td>'.$list['semail'].'</td>
        <td>'.$list['suname'].'</td>
        <td>'.$list['spcategory'].'</td>
        <td><a href="editEmp.php?id='.$list['id'].'">Edit</a>&nbsp<a href="controller/deleteSeller.php?id='.$list['id'].' onclick=return confirm("Are you sure want to delete this ?")">Delete</a></td>

        </tr>';


        
     }
     $html.='</table>';
     echo $html;
}else{

	echo "Data not found";
}


 ?>