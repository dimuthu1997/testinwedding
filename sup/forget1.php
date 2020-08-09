<!DOCTYPE html>
<html>
<head>
       <title>Forget Form</title>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1, sharink-to-fit=no">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
       <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
       </head>
       <link rel="styleeeee" type="text/css" href="styleeeee.css">
       <script src='https://kit.fontawesome.com/a076d05399.js'></script>
<body>
         
                     <div class="col-lg-6 col-md-6 d-none d-md-block image-container"></div>
                     <div class="col-lg-6 col-md-6 form-container">
                     <div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box">
                            <div class="text-center logo mb-3">
                                   <a class="navbar-brand" href="../index.html">
                                          <img src="../images/logo.png" width="150px">
				                   </a>
                                   
                           
                            </div>
                     <div class="reset-form d-block">
                     <form class="reset-password-form" action="login.php" method="POST">
                           <h4 class="mb-3">Reset your password</h4>
                           <p class="mb-3 text-white">Please enter your email address</p>
                           <div class="form-input">
                           <span><i class="fa fa-envelope"></i></span>
                            <input type="email" placeholder="Email Address" required name="eamil">            
                           </div>
                           <div class="mb-3">
                           <button class="btn" type="submit">Send Reset Link</button>
                           </div>
                           </form>
                    
                    </div>
                    <div class="reset-confirmation d-none">
                    <div class="mb-4">
                           <h4 class="mb-3">Link was send</h4>
                           <h6 class="text-white">Please check your inbox</h6>
                           
                           </div>
                           <a href="login1.php">
                           <button type="submit" class="btn">Login Now</button>
                           
                           </a>
                    </div>
                         
                    </div>
             </div>
             
       <script type="text/javascript">
       function PasswordReset(){
              $('form.reset-password-form').on('submit',Function(e){
                     e.preventDefault();
                     $('.reset-form').removeClass('d-block').addClass('d-none');
                     $('.reset-confirmation').addClass('d-block');
                     
              });
       }
       window.addEventListener('load', function(){
              PasswordReset();
       })
       
       </script>
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
       </body>

</html>