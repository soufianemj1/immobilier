<?php
require __DIR__.'/../model/contactmodel.php';

/**
 * 
 */
session_start();
class Contact
{
	
	function index()
	{

		require_once __DIR__.'/../view/userfront/contact.php';
	}

	function show()
	{
		if (isset($_SESSION['Admin'])){
			$contact= new Contactmodel;
		    $contactdata=$contact->show();
		    require_once __DIR__.'/../view/backoffice/message.php';
		}else{
			header('Location: http://localhost/mvcimmobilier/view/backoffice/loginpage.php');
		}
	
		

		
	}

	function save()
	{
		$contact= new Contactmodel;
		
		if(isset($_POST["submit"])){
			$email=$_POST["mail"];
			$telephone=$_POST["telephone"];
			$nom=$_POST["nom"];
			$message=$_POST["message"];
			$a=$contact->insert($email,$telephone,$nom,$message);
			
			header("location:" . $_SERVER['HTTP_REFERER']);
			
		}

	}

	

	function delete($id)
	{
		$delete= new Contactmodel;
		$delete->delete($id);
		header("location:" . $_SERVER['HTTP_REFERER']);

	}
}
