<?php 

require_once ('model/sellerModel.php');

function fetchAllSellers(){
	return showAllSellers();

}
function fetchSeller($id){
	return showSeller($id);

}
