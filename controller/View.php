<?php
require __DIR__.'/../model/overviewmodel.php';

/**
 * 
 */
class View
{
	
	function index()
	{
		require __DIR__."/../view/userfront/index.php";
	}
	function about(){
		require __DIR__."/../view/userfront/about.php";
	}
	function overview(){
		$x = new Overviewmodel ;
		$returnMsg = $x->countingmessage();
		$messages = count($returnMsg);

		$returnRdv = $x->countingrdv();
		$rendezvous = count($returnRdv);

		$returnOffres = $x->countingOffres();
		$offres = count($returnOffres);
		
		require __DIR__."/../view/backoffice/overview.php";

	}
	
	
}