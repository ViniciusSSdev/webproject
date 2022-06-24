<?php include "C:/xampp/htdocs/webproject/_scripts/config.php"?>
<?php include "C:/xampp/htdocs/webproject/_scripts/functions.php"?>



<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="_img/box.png">

    <title>Login</title>
    
    <!-- Principal CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    
   
  </head>


  <body class="text-center">
    <form action="../_scripts/functions.php" method="POST" class="vh-100" style="background-color: #2a2933;">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-xl-10">
            <div class="card" style="border-radius: 1rem;">
              <div class="row g-0">
                <div class="col-md-6 col-lg-5 d-none d-md-block">
                  <img src="http://simpleicon.com/wp-content/uploads/lock-9.png"
                    alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                </div>
                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                  <div class="card-body p-4 p-lg-5 text-black">
    
                    <form action="../_scripts/functions.php" method="POST">
                      <hr class="divider-horizontal-blurry" />
                      <div class="d-flex align-items-center mb-3 pb-1">
                        <i class="fas fa-cubes fa-4x me-3" style="color: #ff6219;"></i>
                        <span class="h1 fw-bold mb-0">LOGIN</span>
                      </div>

    
                      <div class="form-outline mb-4">
                        <label class="form-label" >Email</label>
                        <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Seu email" required autofocus />
                      </div>
    
                      <div class="form-outline mb-4">
                        <label class="form-label">Senha</label>
                        <input type="password" name="senha" id="password" class="form-control form-control-lg" placeholder="Senha" required />
                      </div>
                      <div class="pt-1 mb-4 shadow-5">
                        <button class="btn btn-dark btn-lg btn-block " id="btn" type="submit" onclick="">Login</button>
          
                      </div>
                      <p class="mt-5 mb-3 text-muted">Senai Project &copy; 2022</p>
                      <hr class="divider-horizontal-blurry" /> 
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </body>
</html>

