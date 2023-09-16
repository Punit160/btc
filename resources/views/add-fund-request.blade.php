@include('component.header')
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Fund Request</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Fund Request</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Fund Request</h6>
                    @if(session()->has('status'))
          <div class="alert p-3 alert-success">
          {{session('status')}}
          </div>
           @endif
                  </div>
                  <div class="card-body">
                  <form action="{{route('save-fund-request')}}" method = "POST" >
                    @csrf
                      <div class="form-group">
                        <label for="exampleInputPassword1">Amount</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" name="amount" placeholder="Enter Amount" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">UTR/Transaction Id</label>
                        <input type="text" class="form-control" name="transaction_id" id="exampleInputPassword1" placeholder="Enter Transaction Id" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Transaction Date</label>
                        <input type="date" name="date" class="form-control" id="exampleInputPassword1" required>
                      </div>
                      <input type="hidden" name="reference_id" class="form-control" id="exampleInputPassword1" value="{{$user->reference_id}}">
                      <input type="hidden" name="email" class="form-control" id="exampleInputPassword1" value="{{$user->email}}">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Remark</label>
                        <textarea class="form-control" name="message" id="" cols="30" rows="5" required ></textarea>
                      </div>

                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
              </div>
            </div>
          </div>
          <!--Row-->

          <!-- Modal Logout -->
          @include('component.footer')