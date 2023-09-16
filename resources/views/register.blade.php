<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{asset('img/logo/logo.png')}}" rel="icon">
  <title>BTC</title> 
  <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/ruang-admin.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Register Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <!-- <div class="sidebar-brand-icon">
                        <img height = "100px" src="img/logo/logo2.png">
                      </div> -->
                    <p ><i style="font-size: 40px; color: #6777ef;" class="fa fa-user-plus"></i></p>
                    <h1 class="h4 text-gray-900 mb-4">Register</h1>
                    @if(session()->has('status'))
          <div class="alert p-3 alert-success">
          {{session('status')}}
          </div>
           @endif
                  </div>
                  @if($useremail != '')
                  <form action="{{route('save-user')}}" method = "POST" >
                    @csrf
                  @endif
                    <h3>Structure Detail</h3>
                    <hr>

                    @if($useremail == '')
                    <form  action="{{route('request-otp')}}" method = "POST">
				            @csrf  
                    @endif

                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="oneYearView">Sponsor ID</label>
                          <div class="input-group date">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-id-card"></i></span>
                            </div>
                            <input type="text" name="sponsor_id" class="form-control"  id="exampleInputLastName" >
                          </div>
                      </div>

                      <input type="hidden" name="role" value="normal" class="form-control"  id="exampleInputLastName">
                      <div class="form-group col-md-6">
                        <label for="clockPicker2">User E-Mail</label>
                        <div class="input-group" id="clockPicker3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                              </div>
                          <input type="email" name="email" class="form-control"  @if($useremail != '') value="{{$useremail}}"   @endif   id="exampleInputLastName" required >                     
                          <div class="input-group-append">
                          @if($useremail != '')
                          <a href="{{route('refresh')}}" onclick="myFunction()"  class="btn btn-primary">Get OTP</a>
                          @else
                          <button type="submit" class="btn btn-primary">Get OTP</button>
                          @endif
                          </div>                      
                        </div>
                      </div>
                 
                    </div>
                    @if($useremail == '')
                    </form>
                    @endif
                    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="oneYearView">Placement ID</label>
                            <div class="input-group date">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-id-card"></i></span>
                              </div>
                              <input type="text" class="form-control"  id="exampleInputLastName" name="placement_id" required >
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="oneYearView">OTP Code</label>
                              <div class="input-group date">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fa fa-key"></i></span>
                                </div>
                                <input type="text" name="otp" class="form-control"  id="exampleInputLastName" required >
                              </div>
                          </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                        <label>Select Leg</label>
                      <div class="row">
                      <div class="custom-control custom-radio col-md-6">
                        <input type="radio" id="customRadio3"  value="left" name="leg" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio3">Left</label>
                      </div> 
                      <div class="custom-control custom-radio col-md-6">
                        <input type="radio" id="customRadio4"  value="right" name="leg" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio4">Right</label>
                      </div>
                      </div>
                    </div>
  
                        <div class="form-group col-md-6">
                          <label for="oneYearView">Country</label>
                          <div class="input-group date">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-map"></i></span>
                            </div>
                          <select class="form-control" id="exampleFormControlSelect1" name="country" required >
                            @foreach($country as $countries)
                              <option value = "{{$countries->id}}" >{{$countries->name}}</option>
                            @endforeach
                           </select>
                           </div>
                        </div>
                      </div>

                      <h3>Personal Detail</h3>
                      <hr>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="oneYearView">Name</label>
                              <div class="input-group date">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fa fa-text-width"></i></span>
                                </div>
                                <input type="text" class="form-control"  id="exampleInputLastName" name="name" required >
                              </div>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="oneYearView">Captcha</label>
                              <div class="input-group date">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fa fa-text-width"></i></span>
                                </div>
                                <input type="text" class="form-control"  id="exampleInputLastName" name="captcha" required >
                              </div>
                          </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="oneYearView">Phone</label>
                              <div class="input-group date">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fa fa-mobile"></i></span>
                                </div>
                                <input type="phone" class="form-control"  id="exampleInputLastName" name="phone" required >
                              </div>
                          </div>

                          <?php

                              function random_strings($length_of_string)
                              {

                                  $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

                                  return substr(str_shuffle($str_result),
                                                      0, $length_of_string);
                              }

                              ?>
   
                          <div class="form-group col-md-6">
                          <label>Captcha Code</label>
                          <?php
                              $random = random_strings(5);
                          ?>
                           <input name="captcha_code" type="hidden" value="{{$random}}" class="form-control">
                          <input  type="text" value="<?php echo $random; ?>" class="form-control text-center"  disabled >
                         

                          </div>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="font-weight-bold small" href="{{route('login')}}">Already have an account?</a>
                  </div>
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Register Content -->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('js/ruang-admin.min.js')}}"></script>
  
  <script>
function myFunction() {
  alert("Enter Your Mail Id Again!!!");
}
</script>

</body>

</html>