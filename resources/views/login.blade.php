<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>BTC</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <p ><i style="font-size: 40px; color: #6777ef;" class="fa fa-lock"></i></p>
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                  <form  action="{{route('loginuser')}}" method ="POST">
				             @csrf
                    <div class="form-group">
                      <input type="text" class="form-control" name="reference_id" id="exampleInputEmail" aria-describedby="emailHelp"
                        placeholder="Enter Reference Id">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" name="password" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small" style="line-height: 1.5rem;">
                        <input type="checkbox" name="check" class="custom-control-input"  id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember
                          Me</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block" disabled >Login</button>
                    </div>
                  </form>
                  <hr>
                  <div class="text-center">
                   <p>Don’t have an account? <a class="font-weight-bold small" href="{{route('register')}}">Create an Account!</a></p>
                  </div>
                  <div class="text-center">
                   <p>Forgot password? <a class="font-weight-bold small" href="{{route('forgot-password')}}">Reset</a></p>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>

<script>
  var checkboxes = $("input[type='checkbox']"),
    submitButt = $("button[type='submit']");

checkboxes.click(function() {
    submitButt.attr("disabled", !checkboxes.is(":checked"));
});
</script>

</body>

</html>