@include('component.header')
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1> <span class="text-info" id="countdown"></span> 
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>

          <div class="row mb-3">
            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-s font-weight-bold text-uppercase mb-1">My Team</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">@if(!empty($all_team_count)) {{$all_team_count}} @else 0 @endif</div>
                      <!--  <div class="mt-2 mb-0 text-muted text-s">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                        <span>Since last month</span>
                      </div> -->
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-s font-weight-bold text-uppercase mb-1">My Direct</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">@if(!empty($my_team_count)) {{$my_team_count}} @else 0 @endif</div>
                      <!-- <div class="mt-2 mb-0 text-muted text-s">
                        <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                        <span>Since last years</span>
                      </div> -->
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->

            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-s font-weight-bold text-uppercase mb-1">MY TEAM BUSINESS</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$ @if(!empty($total_t_business)) {{$total_t_business}} @else 0.00 @endif</div>
                      <!-- <div class="mt-2 mb-0 text-muted text-s">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                        <span>Since last month</span>
                      </div> -->
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-s font-weight-bold text-uppercase mb-1">MY DIRECT BUSINESS</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$ @if(!empty($total_d_business)) {{$total_d_business}} @else 0.00 @endif</div>
                      <!-- <div class="mt-2 mb-0 text-muted text-s">
                        <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                        <span>Since last years</span>
                      </div> -->
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->

            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-s font-weight-bold text-uppercase mb-1">E WALLET</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$ @if(!empty($totalamount->profit_amount)) {{$totalamount->profit_amount}} @else 0.00 @endif</div>
                      <!-- <div class="mt-2 mb-0 text-muted text-s">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                        <span>Since last month</span>
                      </div> -->
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-wallet fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-s font-weight-bold text-uppercase mb-1">TOPUP WALLET</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$ 0.00</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-wallet fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- New User Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-s font-weight-bold text-uppercase mb-1">REMAINING INCOME WALLET</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$ 0.00</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-wallet fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

           
        
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-s font-weight-bold text-uppercase mb-1">TOTAL INCOME</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$ 0.00</div>
                      <!-- <div class="mt-2 mb-0 text-muted text-s">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                        <span>Since last month</span>
                      </div> -->
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-wallet fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-s font-weight-bold text-uppercase mb-1">DIRECT REFERRAL INCOME</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$ 0.00</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-wallet fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- New User Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-s font-weight-bold text-uppercase mb-1">SELF INVESTMENT INCOME</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$ 0.00</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-wallet fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>



            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-s font-weight-bold text-uppercase mb-1">SPONSOR INVESTMENT INCOME</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$ 0.00</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-wallet fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-s font-weight-bold text-uppercase mb-1">ROYALTY INCOME</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$ 0.00</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-wallet fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- New User Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-s font-weight-bold text-uppercase mb-1">Remaining Amount</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$ @if(!empty($totalamount->total_amount)) {{($totalamount->total_amount * 3) - $totalamount->profit_amount}} @else 0.00 @endif</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-map fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

                 
            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-s font-weight-bold text-uppercase mb-1 ">TOPUP PACKAGE</div>
                      <div class="h5 mb-0 font-weight-bold  text-primary">$ @if(!empty($latest_topup->amount)) {{$latest_topup->amount}} @else 0.00 @endif</div>
                      <!-- <div class="mt-2 mb-0 text-muted text-s">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                        <span>Since last month</span>
                      </div> -->
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x "></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-s font-weight-bold text-uppercase mb-1 text-success">Achieved ( Silver )</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Pending</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-shopping-cart fa-2x "></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->

               <!-- Area Chart -->
               <div class="col-xl-6 col-md-6">
                <div class="card mb-4">
                  <div class="card-body text-center">
                    <i class="fas fa-id-card fa-2x text-primary"></i>
                    <p style="font-size: 35px; font-weight:200;">0.00</p>
                    <p class="text-primary">Monthly Recap Report</p>
                    <hr>
                  </div>
                  <div class="card-body row ">
                   <div class="col-md-6 text-center">
                    <p style="font-size: 18px; font-weight:200;margin-bottom: -3px!important" class="text-primary" >0.00</p>
                    <p>Pending</p>
                   </div> 
                   <div class="col-md-6 text-center">
                    <p style="font-size: 18px; font-weight:200;margin-bottom: -3px!important" class="text-primary" >0.00</p>
                    <p>Approved</p>
                   </div>
                  </div>
                </div>
              </div>


                <!-- Area Chart -->
                <div class="col-xl-6 col-md-6 pb-4">
                  <div style="height:100%" class="card text-center py-3" >
                    <h5 class="card-title @if(!empty($latest_topup->amount)) text-success   @else text-danger @endif ">{{$user->name}}</h5>
                    <p class="<?php if(!empty($latest_topup->amount)){ ?> text-success  <?php }else{ ?> text-danger <?php } ?> " >{{$user->reference_id}}</p>
                    <img src="img/dummy-man.png" width="100px" class="rounded-circle center-block d-block mx-auto"  alt="...">
                    <div class="card-body">
                      <a href="#" class="btn <?php if(!empty($latest_topup->amount)){ ?> btn-success  <?php }else{ ?> btn-danger <?php } ?>  btn-lg btn-block">ID Activated Successfully</a>
                    </div>
                  </div>
                </div>
 

            <!-- Area Chart -->
            <!-- <div class="col-xl-12 col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Monthly Recap Report</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                      aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- Pie Chart -->
          </div>
          <!--Row-->


      <!-- Footer -->
          <!-- Modal Logout -->
    @if(!empty($totalamount->created_at))
     
          <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    
          <script>
    // Get the user's registration timestamp from the server
 
    var registeredAt = "{{ $totalamount->created_at }}";

    console.log(registeredAt);
    var countdownElement = document.getElementById('countdown');
    
    function updateCountdown() {
        var now = new Date();
        var registeredTime = new Date(registeredAt);
        var endTime = registeredTime.getTime() + (3 * 24 * 60 * 60 * 1000); // Three days in milliseconds

        if (endTime < now.getTime()) {
            // Countdown has ended
            countdownElement.innerHTML = "Countdown ended!";
            countdownElement.style.display = "none"; 
        } else {
            // Calculate the remaining time
            var remainingTime = endTime - now.getTime();
            var seconds = Math.floor((remainingTime / 1000) % 60);
            var minutes = Math.floor((remainingTime / 1000 / 60) % 60);
            var hours = Math.floor((remainingTime / (1000 * 60 * 60)) % 24);
            var days = Math.floor(remainingTime / (1000 * 60 * 60 * 24));

            // Update the countdown element
            countdownElement.innerHTML = days + " days, " + hours + " hours, " + minutes + " minutes, " + seconds + " seconds";
        }
    }


    // Update the countdown initially
    updateCountdown();

    // Update the countdown every second
    setInterval(updateCountdown, 1000);
  
</script>

@endif


@include('component.footer')
 