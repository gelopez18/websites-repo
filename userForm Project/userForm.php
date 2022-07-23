<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href ="style/StyleForms.css">
    <!-- javascript-->
   
    <title>User Form</title>
  </head>
  <body>
 
    <div class ="container">
        
        <div class = "row d-flex justify-content-md-center">
            <div class ="col-lg-4">
                <hr>
            </div>
            <div class ="col-lg-4">
                <h2 class="d-flex justify-content-center"> Registration </h2>
            </div>
            <div class ="col-lg-4">
                <hr>
            <div>
        </div>
        <div class ="row d-flex justify-content-lg-center">
                            <form method="POST" action="RegistrationSend.php" id="RegistrationForm" >
                                <div class="card d-flex justify-content-center" style= "width: 30rem;">
                                    <div class="card-body">
                                        <div class="form-floating mb-3">
                                        <input name= 'Username'id="Username" type="text" class="form-control" id="floatingInputUsername" placeholder="myusername" required autofocus>
                                        <label for="floatingInputUsername">Username</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                        <input name='emailAddress' id="emailAddress" type="email" class="form-control" placeholder="name@example.com">
                                        <label for="floatingInputEmail">Email address</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                        <input name="UName" id="UName" type="text" class="form-control"  placeholder="Full Name">
                                        <label for="floatingInputEmail">Firs Name And Last Name</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                        <input name='company'id="company" type="text" class="form-control"  placeholder="Company's Name">
                                        <label for="floatingInputEmail">Company</label>
                                        </div>

                                        <hr>

                                        <div class="form-floating mb-3">
                                        <input name='password'id="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                        <label for="floatingPassword">Password</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="floatingPasswordConfirm" placeholder="Confirm Password">
                                        <label for="floatingPasswordConfirm">Confirm Password</label>
                                        </div>

                                        <div class="d-grid mb-2 d-flex justify-content-center">
                                        <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase " type="submit" name="Register" onclick="return emptyForm()">Register</button>
                                        </div>
                                        <script src = "JavaScript/userform.js" type="text/javascript"></script>
                                        <a class="d-block text-center mt-2 small" href="#">Have an account? Sign In</a>

                                        <hr class="my-4">
                                    </div>
                                </div>  
                            </form>
         
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/animejs@3.0.1/lib/anime.min.js"></script>
    <script src ="JavaScript/userform.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="http://www.myersdaily.org/joseph/javascript/md5.js"></script>
    
    


    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>