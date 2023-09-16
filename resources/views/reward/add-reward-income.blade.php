@include('component.header')
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Reward Income</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Add Reward Income</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Add Reward Income</h6>
                  </div>
                  <div class="card-body">
                  <form action="{{route('save-reward')}}" method = "POST" >
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputPassword1">Reward Name</label>
                        <input type="text" class="form-control" name="reward_name" id="exampleInputPassword1" placeholder="Enter Reward Type" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Business Required</label>
                        <input type="number" class="form-control" name="business_amount" id="exampleInputPassword1" placeholder="Business Required" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Time Period (In Days)</label>
                        <input type="number" class="form-control" name="days" id="exampleInputPassword1" placeholder="Time Period (In Days)" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Profit</label>
                        <input type="number" class="form-control" name="profit" id="exampleInputPassword1" placeholder="Enter Profit Detail" required>
                      </div>
                      <input type="hidden" name="created_by" class="form-control" id="exampleInputPassword1" value="{{$useremail}}">
                      <div class="form-group">
                      <label for="exampleFormControlSelect1">Payment Deduct From Account</label>
                      <select class="form-control" name="payment_deduct" id="exampleFormControlSelect1">
                        <option value="1">YES</option>
                        <option value="0">NO</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Remark</label>
                        <textarea class="form-control" name="remarks" id="" cols="30" rows="5"  placeholder="Enter Remarks" ></textarea>
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