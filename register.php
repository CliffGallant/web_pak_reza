<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | Document Sharing</title>
  <style>
	body{
		width: 100%;
	    height: calc(100%);
	    position: fixed;
	    top:0;
	    left: 0
	    /*background: #007bff;*/
	}
	main#main{
		width:100%;
		height: calc(100%);
		display: flex;
	}
	center p{
		margin-top: 20px;
	}
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body class="bg-primary">
<main id="main">

    <div class="align-self-center w-100">
  <h4 class="text-white text-center"><b>Document Sharing System</b></h4>
    <div id="login-center" class="bg-primary row justify-content-center">
      <div class="card col-md-4">
        <div class="card-body">
          <form action="proses_register.php" method="POST" >

          <div class="form-group">
              <label for="" class="control-label text-dark">First-name</label>
              <input type="text" id="firstname" required name="firstname" class="form-control form-control-sm">
            </div>

            <div class="form-group">
              <label for="" class="control-label text-dark">Last-name</label>
              <input type="text" id="lastname" required name="lastname" class="form-control form-control-sm">
            </div>

            <div class="form-group">
              <label for="" class="control-label text-dark">Contact</label>
              <input type="text" id="contact" required name="contact" class="form-control form-control-sm">
            </div>

            <div class="form-group">
              <label for="" class="control-label text-dark">Email</label>
              <input type="text" id="email" required name="email" class="form-control form-control-sm">
            </div>

            <div class="form-group">
              <label for="" class="control-label text-dark">Password</label>
              <input type="password" id="password" required name="password" class="form-control form-control-sm">
            </div>

            <div class="form-group">
              <label for="" class="control-label text-dark">Confirm Password</label>
              <input type="password" required id="confirm_password" name="confirm_password" class="form-control form-control-sm">
            </div>

            <center><button class="btn-sm btn-block btn-wave col-md-4 btn-primary" name="register-btn">Register</button></center>
          <center><p class="text-dark">Sudah punya akun ? <a href="login.php">Login</a></p></center>
          </form>
        </div>
      </div>
    </div>
    </div>
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>