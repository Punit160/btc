@include('component.header')
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Topup</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Topup</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Add Topup</h6>
                  </div>
                  <div class="card-body">
                  <form action="{{route('save-topup')}}" method = "POST" >
                    @csrf
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Reference Id</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="reference_id">
                            <option disabled>Choose...</option>
                            @foreach($users as $user)
                              <option @if(!empty($fundrequest->reference_id)) {{($user->reference_id === $fundrequest->reference_id  ) ? 'Selected' : ''}} @endif value="{{$user->reference_id}}">{{$user->reference_id}}</option>
                            @endforeach
                            </select>
                          </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Amount</label>
                        <input type="number" class="form-control" @if(!empty($fundrequest->amount)) value="{{$fundrequest->amount}}"  @endif name="amount" id="exampleInputPassword1" placeholder="Enter Amount">
                      </div>
                      <input type="hidden" name="fund_request_id" class="form-control" id="exampleInputPassword1" @if(!empty($fundrequest->id)) value="{{$fundrequest->id}}"  @endif>

                      <div class="form-group">
                      <div class="custom-control custom-checkbox small" style="line-height: 1.5rem;">
                        <input type="checkbox" name="check" class="custom-control-input"  id="customCheck">
                        <label class="custom-control-label" for="customCheck">Fund Initiate</label>
                      </div>
                    </div>
                      <button type="submit" class="btn btn-primary" disabled >Submit</button>
                    </form>
                  </div>
              </div>
            </div>
          </div>
          <!--Row-->

          <!-- Modal Logout -->
          @include('component.footer')