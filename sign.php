<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.6.0/litera/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.6.0/litera/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.css">
<link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.rtl.css">
<link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-5.2.3-dist/css">
<link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.rtl.min.css">
<link rel="stylesheet" href="style.css">
<title>Sign Up</title>
</head>
<body>



    <div class="container m-5">
        <div class="d-flex justify-content-center align-item-center">
            <div class="card p-5">
                <div class="card-head">
                    <div class="d-flex justify-content-center align-content-center">    
                        <h4>Sign in</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="mydb.php" method="post" class="form ">
                        <div class="form-group form-inline">
                            <label for="Fname">First Name:</label>
                         <input type="text" name="fname" id="" class="form-control">                   
                            <label for="lname">Last Name:</label>
                         <input type="text" name="lname" id="" class="form-control">
                         </div>
                         <div class="form-group">
                            <label for="email">Email</label>
                         <input type="email" name="email" id="" class="form-control">
                         </div>
                         <div class="form-group">
                            <label for="pnumber">Phone Number</label>
                         <input type="number" name="pnumber" id="" class="form-control">
                         </div>
                         <div class="form-group">
                            <label for="pwd">Password</label>
                         <input type="password" name="pwd" id="" class="form-control">
                         </div>
                        <div class="d-flex justify-content-center align-content-center">
                        <button type="submit" class="btn btn-danger">Sign up</button>
                        </div>
                    </form>
                    
                </div>
                <p class="card-foot">Already have an account <a href="login.php" class="card-link card-link-primary">Click here</a></p>
            </div>
        </div>
    </div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>