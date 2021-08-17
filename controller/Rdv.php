<?php
require __DIR__.'/../model/rdvmodel.php';

/**
 * 
 */
class Rdv
{
	
	function index()
	{
		require_once __DIR__.'/../view/userfront/rendezvous.php';
	}

	function show()
	{
		$rdv= new Rdvmodel;
		$rdvdata=$rdv->show();
		require __DIR__."/../view/backoffice/rdv.php";

		
	}

	function save()
	{
		$contact= new Rdvmodel;
		
		if(isset($_POST["submit"])){
			$email=$_POST["mail"];
			$telephone=$_POST["telephone"];
			$nom=$_POST["nom"];
			$date=$_POST["date"];
			$contact->insert($email,$telephone,$nom,$date);
			
			header("location:" . $_SERVER['HTTP_REFERER']);
			
		}

	}

	

	function delete($id)
	{
		$delete= new Rdvmodel;
		$delete->delete($id);
		header("location:" . $_SERVER['HTTP_REFERER']);

	}
}
