@include('component.header')
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Income Report</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Income Report</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Income Report</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" >
                    <thead class="thead-light">
                      <tr>
                        <th>Date</th>
                        <th>Self Investment income</th>
                        <th>Level Income</th>
                        <th>Referal Income</th>
                        <th>Royalty Income</th>
                        <th>Matchmaking Income</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                      <th>Date</th>
                      <th>Self Investment income</th>
                      <th>Level Income</th>
                      <th>Referal Income</th>
                      <th>Royalty Income</th>
                      <th>Matchmaking Income</th>
                      </tr>
                    </tfoot>
                    <tbody>
                    @foreach($intrest as $intrests)
                    @foreach($levelincome as $levelincomes)
                    @foreach($joining as $joinings)
                      <tr>
                      <td>{{$intrests->date}}</td>
                      <td>$ {{$intrests->intrest_profit}}</td>
                      @if($intrests->date == $levelincomes->date)
                      <td>$ {{$levelincomes->level_profit}}</td>
                      @else
                      <td>-</td>
                      @endif
                      @if($intrests->date == $joinings->date)
                      <td>$ {{$joinings->amount}}</td>
                      @else
                      <td>-</td>
                      @endif
                      <td>-</td>
                      <td>-</td>
                      </tr>
                      @endforeach
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