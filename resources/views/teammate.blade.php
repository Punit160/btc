@include('component.header')
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Team Members</h1> <span class="text-info" id="countdown"></span> 
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Team Members</li>
            </ol>
          </div>

          <div class="row mb-3">
          @foreach($level as $levels)
          @foreach($user as $users)
          @foreach($total_amount as $total_amounts)
          @if($levels->emp_id == $users->id)
          @if($users->reference_id == $total_amounts->reference_id)
          <div class="col-xl-6 col-md-6 pb-4">
                  <div style="height:100%" class="card text-center py-3" >
                    <h5 style="text-transform:Uppercase;" class="card-title @if(!empty($total_amounts->total_amount)) text-success   @else text-danger @endif ">{{$users->name}}</h5>
                    <p class="<?php if(!empty($total_amounts->total_amount)){ ?> text-success  <?php }else{ ?> text-danger <?php } ?> " >{{$total_amounts->reference_id}}</p>
                    <img src="{{asset('img/dummy-man.png')}}" width="100px" class="rounded-circle center-block d-block mx-auto"  alt="...">
                    <div class="card-body row ">
                   <div class="col-md-6 text-center">
                    <p style="font-size: 18px; font-weight:200;margin-bottom: -3px!important" class="text-primary" >{{$total_amounts->total_amount}}</p>
                    <p>Topup</p>
                   </div> 
                   <div class="col-md-6 text-center">
                    <p style="font-size: 18px; font-weight:200;margin-bottom: -3px!important" class="text-primary" >{{$levels->level}}</p>
                    <p>Level</p>
                   </div>
                  </div>
                  </div>
                </div>
                @endif
            @endif
            @endforeach 
            @endforeach 
            @endforeach 

            @foreach($level as $levels)
          @foreach($user_team as $user_teams)
          @if($levels->emp_id == $user_teams->id)
          <div class="col-xl-6 col-md-6 pb-4">
                  <div style="height:100%" class="card text-center py-3" >
                    <h5  style="text-transform:Uppercase;" class="card-title text-danger ">{{$user_teams->name}}</h5>
                    <p class="text-danger ?> " >{{$user_teams->reference_id}}</p>
                    <img src="{{asset('img/dummy-man.png')}}" width="100px" class="rounded-circle center-block d-block mx-auto"  alt="...">
                    <div class="card-body row ">
                   <div class="col-md-6 text-center">
                    <p style="font-size: 18px; font-weight:200;margin-bottom: -3px!important" class="text-danger" >0</p>
                    <p class="text-danger" >Topup</p>
                   </div> 
                   <div class="col-md-6 text-center">
                    <p style="font-size: 18px; font-weight:200;margin-bottom: -3px!important" class="text-danger" >{{$levels->level}}</p>
                    <p class="text-danger" >Level</p>
                   </div>
                  </div>
                  </div>
                </div>
                @endif
            @endforeach 
            @endforeach 
          </div>
          <!--Row-->


      <!-- Footer -->


@include('component.footer')
 