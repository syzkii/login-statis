<html>
<head>
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <title>Login | FORM</title>
</head>
<body>
<div class="container-fluid px-0 px-md-3 px-lg-1 px-xl-5 py-5 mx-auto">
  <form method="post" action="logincek.php">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="img/header.png" class="image"> </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5"><br><br/>
                <h5>Login Data</h5><br/>
                    <div class="row px-3"> 
                    <label class="mb-1">
                            <h6 class="mb-0 text-sm">Username</h6>
                        </label> 
                        <input type="text" class="form-control mb-4" name="username" placeholder="Enter a Username please"> 
                    </div>
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Password</h6>
                        </label>
                        <input type="password" class="form-control mb-4" name="password" placeholder="Enter ur Password"> 
                    </div>
                    <div class="row mb-3 px-3"> <button type="submit" class="btn btn-primary text-center">Login</button> 
                    </div>
                    <?php if(isset($_GET['pesan'])) {  ?>
                     <label style="color:red;"><?php echo $_GET['pesan']; ?></label>
                    <?php } ?>	
                </div>
            </div>
        </div>
        <div class="bg-blue py-4">
            <div class="row px-3"> 
            <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2021. All rights reserved by <a href="#">Rifki Ardian.</small></a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
</form>