<? php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
       <title>Sign up Form</title>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
       <meta name="viewport" content="width=device-width, initial-scale=1, sharink-to-fit=no">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
       <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
       </head>
       <link rel="stylesheet" type="text/css" href="styleeeee.css">
       <script src='https://kit.fontawesome.com/a076d05399.js'></script>
       
<body>
      <div class="container-fluid">
      <div class="row">
              <div class="col-lg-6 col-md-6 d-none d-md-block image-container"></div>
             <div class="col-lg-6 col-md-6 form-container">
             <div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">
                    <div class="logo mb-3">
                     <a class="navbar-brand" href="../index.html">
					<img src="../images/logo.png" width="200px" height="70px">
				    </a> 
                           
                    </div>
                    <div class="heading mb-4">
                    <h4>Create an account</h4>
                    </div>
                    <form action="insert.php" method="POST">
                    <div class="form-input">
                           <span><i class="fa fa-user"></i>
                           </span>
                           <input type="text" placeholder="First and Last Name" name="username" required>
                           </div>
                           <div class="form-input">
                           <span><i class="fa fa-user"></i>
                           </span>
                           <input type="email" placeholder="Email Address" name="email" required>
                           </div>
                           <div class="form-input">
                           <span><i class="fa fa-lock"></i></span>
                                  <input type="password" placeholder="Password" name="password" required>
                           </div>
                           <div class="form-input">
                           <span><i class="fa fa-user"></i>
                           </span>
                           <input type="text" placeholder="Wedding City" name="weddingcity" required>
                           </div>
                           <div class="form-input">
                           <span><i class="fa fa-user"></i>
                           </span>
                           <input type="date" placeholder="Wedding Date" name="weddingdate" required>
                           </div>
                           <div class="row mb-3">
                            <div class="col-6 d-flex">     
                           <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="cb1">
                                  <label class="custom-control-label text-white" for="cb1"> I agree all terms &amp; conditions</label>
                                  </div>
                           </div>
                           
                    </div> 
                     <div class="text-left mb-3">
                           <button type="submit" class="btn">Sign up</button>
                           
                           
                           </div>
                           <div class="text-center mb-2">
                           <div class="mb-3" style="color: #000">or sign up with</div>
                                  
                                   <div class="socialMediaLinks">
                                          
                                         <a href="https://facebook.com" class="fab fa-facebook-f"></a>
                                         
                                          <a href="https://plus.google.com" class="fab fa-google-plus-g"></a>
                                         <a href="https://twitter.com" class="fab fa-twitter"></a>
                                  </div>
                                  
                                         
                                     
                           </div>
                           <div style="color: #000">Already have  an account<a href="login.php" class="login-link"> Login here</a>
                                  
                           
                           </div>
                    </form>
                         
                    </div>
             </div>
             </div>
            
              
            
       
       </div> 
       
       
       
       </body>

</html>