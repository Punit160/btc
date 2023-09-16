@include('component.header')
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Level Income</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Level Income</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Level Income</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                      <th>Date</th>
                        <th>Level Income Profit</th>
                        <th>Total Profit</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Date</th>
                        <th>Level Income Profit</th>
                        <th>Total Profit</th>
                      </tr>
                    </tfoot>
                    <tbody>
                    @foreach($levelincome as $levelincomes)
                      <tr>
                      <td>{{$levelincomes->date}}</td>
                      <td>$ {{$levelincomes->level_profit}}</td>
                      <td>$ {{$levelincomes->tl_profit}}</td>
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