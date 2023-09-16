@include('component.header')
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Levels</h1> <span class="text-info" id="countdown"></span> 
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Levels</li>
            </ol>
          </div>

          <div class="row mb-3">
          @foreach($level as $levels)
            <div class="col-xl-6 col-md-6 mb-4">
            <a href="{{asset('/teammate/'.$levels->level )}}">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-s font-weight-bold mb-1">Level - {{$levels->level}}</div>
                      <!-- <div class="h5 mb-0 font-weight-bold text-gray-800">000</div> -->
                       <div class="mt-2 mb-0 text-muted text-s">
                        
                        <span class="text-success mr-2"><i class="fas fa-users"></i> {{$levels->count}}</span>
                        
                        <!-- <span class="text-danger mr-2"><i class="fas fa-heart"></i>  3.48% </span> -->
                      </div>
                    </div>
                    <div class="col-auto">
                    <span >
                    <i class="fa fa-arrow-right fa-2x text-danger "></i>
                    </span>
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div>
            @endforeach 
          </div>
          <!--Row-->


      <!-- Footer -->


@include('component.footer')
 