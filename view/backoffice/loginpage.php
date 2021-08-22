<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="http://localhost/mvcimmobilier/view/backoffice/loginstyle.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>


<body>
    
</body>

<div class="sidenav">
         <div class="login-main-text">
            <h2>Jaffar<br> Immobilier</h2>
            <p>Bienvenue Admin.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">


               <form action="http://localhost/mvcimmobilier/login/check" method="post">
                  <div class="form-group">
                     <label>email</label>
                     <input type="email" class="form-control" name="email" placeholder=" email" >
                  </div>
                  <div class="form-group">
                     <label>mot de passe</label>
                     <input type="password" class="form-control" name="password" placeholder="mot de passe" >
                  </div>
                  <button type="submit" class="btn btn-black">se connecter</button>
                  
               </form>



            </div>
         </div>
      </div>
</html>