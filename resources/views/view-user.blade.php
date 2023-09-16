@include('component.header')
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Team</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">Team</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">My Team</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>Name</th>
                        <th>Package</th>
                        <th>Contact</th>
                        <th>SponsorId</th>
                        <th>ReferenceID</th>
                        <th>Start date</th>
                        <th>Country</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                      <th>Name</th>
                      <th>Package</th>
                      <th>Contact</th>
                        <th>SponsorId</th>
                        <th>ReferenceID</th>
                        <th>Start date</th>
                        <th>Country</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>
                    @foreach($users as $user)
                    @foreach($network as $networks)
                    @if($user->id == $networks->emp_id)
                      <tr>
                         <td>{{$user->name}}</td>
                         <td>
                         <?php 
                         foreach($total_amount as $total_amounts){
                          if($total_amounts->reference_id == $user->reference_id){
                         ?>
                        $ {{$total_amounts->total_amount}}
                          <?php 
                         }
                         }
                         ?>
                         </td>
                        <td>{{$user->email}} / {{$user->phone}} </td>
                        <td>{{$user->sponsor_id}}</td>
                        <td>{{$user->reference_id}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>
                        @foreach($country as $countries)
                        @if($user->country == $countries->id)
                        {{$countries->name}}
                        @endif
                        @endforeach
                        </td>
                        <td>
                        <p>
                        <a href="{{asset('/update-user/'.$user->id)}}" class="btn-sm btn-info">
                         <i class="fas fa-info-circle"></i>
                        </a>
                        </p>
                    </td>
                      </tr>
                      @endif
                      @endforeach
                      @endforeach 
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!--Row-->

          <!-- footer -->
          <!-- Modal Logout -->
          @include('component.footer')