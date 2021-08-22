<?php 

require __DIR__.'/../model/loginmodel.php';

/**
 * 
 */
session_start();
class login {

    function index(){
        require_once __DIR__.'/../view/backoffice/loginpage.php';
    }

    function check(){


        $func = new loginmodel;


        if(isset($_POST['email'])){
            $user = $_POST['email'];
            $password = $_POST['password'];
            $data = $func->check($user,$password);
            // die(var_dump($data));
          
            
            if($data){
               
                
                $_SESSION['Admin'] = $data['email'] ;
                header('Location: http://localhost/mvcimmobilier/view/overview');
            }
            else{
                require_once __DIR__.'/../view/backoffice/loginpage.php';
                echo "<script>alert('Compte invalide !');</script>";
            }

        }
    }

    function logout(){
        if(isset($_SESSION['Admin'])){
            session_unset();
            session_destroy();

            $this->index();
        }
        

    }
    

    






}



?>