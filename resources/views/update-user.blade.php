@include('component.header')
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Update User</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Update User</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Update User</h6>
                  </div>
                  <div class="card-body">
                  <form action="" method = "POST" >
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputPassword1">User  Name</label>
                        <input type="text" class="form-control" name="name" id="exampleInputPassword1" value="{{$user->name}}" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="email" class="form-control" name="email" id="exampleInputPassword1" value="{{$user->email}}" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Phone</label>
                        <input type="number" class="form-control" name="phone" id="exampleInputPassword1" value="{{$user->phone}}"  required>
                      </div>
                      <div class="form-group">
                          <label for="oneYearView">Country</label>
                          <div class="input-group date">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-map"></i></span>
                            </div>
                          <select class="form-control" id="exampleFormControlSelect1" name="country" required >
                            @foreach($country as $countries)
                              <option  {{(intval($user->country) === $countries->id) ? 'Selected' : ''}}  value = "{{$countries->id}}" >{{$countries->name}}</option>
                            @endforeach
                           </select>
                           </div>
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