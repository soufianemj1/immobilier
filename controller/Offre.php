<?php
require __DIR__.'/../model/offresmodel.php';
/**
 * 
 */
class Offre
{
	
	function index()
	{
		$offre= new Offresmodel;
		$offredata = $offre->show();
		require_once __DIR__.'/../view/userfront/offres.php';
	}

	// function create()
	// {
	// 	require_once __DIR__.'/../view/backoffice/offres.php';
	// }
	function showadmin()
	{
		$offre= new Offresmodel;
		$offredata = $offre->show();
		require_once __DIR__.'/../view/backoffice/offres.php';


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
		
		require_once __DIR__.'/../view/backoffice/multi.php';

	}
}

// 	function edit($id)
// 	{
// 		echo "edit ".$id;
// 	}

// 	function update()
// 	{
// 		echo 'update';
// 	}

// 