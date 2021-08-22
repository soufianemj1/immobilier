<?php
require __DIR__.'/../model/offresmodel.php';
/**
 * 
 */
session_start();
class Offre
{
	
	function index()
	{
		$offre= new Offresmodel;
		$offredata = $offre->show();
		require_once __DIR__.'/../view/userfront/offres.php';
	}

	
	function showadmin()
	{
		if(isset($_SESSION['Admin'])){
			$offre= new Offresmodel;
			$offredata = $offre->show();
			require_once __DIR__.'/../view/backoffice/offres.php';

		}else{
			header('Location: http://localhost/mvcimmobilier/view/backoffice/loginpage.php');
		}
		


	}

	function delete($id)
	{
		$delete= new Offresmodel;
		$delete->delete($id);
		header("location:" . $_SERVER['HTTP_REFERER']);

	}

	function save()
	{

		$offre= new Offresmodel;
		
		if(isset($_POST["submit"])){
					// store image
        //get extension from the file
        $files = $_FILES;
        $filename = "";
     
                //unique file name to avoid overwriting
                $filename = time() . $files["img_file"]["name"];

                //move the uploaded file to folder
                $upload =  move_uploaded_file($files["img_file"]["tmp_name"], "uploads/" . $filename);
				$type=$_POST["type"];
				$prix=$_POST["prix"];
				$ville=$_POST["ville"];
				$description=$_POST["description"];
				
				
				$offre->insert($prix,$filename,$description,$type,$ville);
				header("location:" . $_SERVER['HTTP_REFERER']);
            
            
      
			// 
			
		}
	}
	
	function multi(){
		$id = $_POST['id'];
		require_once __DIR__.'/../view/backoffice/multi.php';

	}
	
	function multiadd(){
		$offre= new Offresmodel;
		
		if(isset($_POST["submit"])){
					// store image
        //get extension from the file
        $files = $_FILES;
		$count = count($files['pictures']['name']);
        $filename = "";

		for ($x=0; $x < $count; $x++){
			//unique file name to avoid overwriting
			$filename = time() . $files["pictures"]["name"][$x];

			//move the uploaded file to folder
			$upload =  move_uploaded_file($files["pictures"]["tmp_name"][$x], "uploads/" . $filename);
			$id=$_POST["id"];
			
			$offre->insertphotos($id,$filename);
			header('Location: http://localhost/mvcimmobilier/view/overview');
			
			
		}
		}
	}

	function details($id)
	{   $query = new Offresmodel;
		$data = $query->details($id);
		require __DIR__."/../view/userfront/photos.php";
	} 
}

 