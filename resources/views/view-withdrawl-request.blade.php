@include('component.header')
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">View Withdrawl Request</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">View Withdrawl Request</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">View Withdrawl Request</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                      <th>ReferenceID</th>
                      <th>Email</th>
                        <th>Amount</th>
                        <th>Approve Amount</th>
                        <th>Account</th>
                        <th>Message</th>
                        <th>Status</th>

                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                      <th>ReferenceID</th>
                        <th>Email</th>
                        <th>Amount</th>
                        <th>Approve Amount</th>
                        <th>Account</th>
                        <th>Message</th>
                        <th>Status</th>

                      </tr>
                    </tfoot>
                    <tbody>
                    @foreach($withdrawlrequest as $withdrawlrequests)
                      <tr>
                      
                      <td>{{$withdrawlrequests->reference_id}}</td>
                      <td>{{$withdrawlrequests->email}}</td>
                      <td>{{$withdrawlrequests->amount}}</td>
                      <td>{{$withdrawlrequests->approve_amount}}</td>
                      <td>{{$withdrawlrequests->account}}</td>
                      <td>{{$withdrawlrequests->message}}</td>
                      @if($role == 'admin')
                      @if($withdrawlrequests->status == 'Done')
                      <td> <a href="#" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                    <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Done</span>
                  </a></td>
                      @else
                      <td>
                      <form action="{{asset('pay-payment/'.$withdrawlrequests->id)}}" method = "POST" >
                       @csrf
                      <button  type="submit" class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">Pending</span>
                     </button>
                 </form>
                </td>
                  @endif
                  @else
                  @if($withdrawlrequests->status == 'Done')
                      <td> <a href="#" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                    <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Done</span>
                  </a></td>
                      @else
                      <td>   <a href="#" class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">Pending</span>
                  </a></td>
                  @endif
                  @endif
                      </tr>
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