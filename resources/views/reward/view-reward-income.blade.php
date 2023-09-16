@include('component.header')
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Reward Targets</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Reward Targets</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Reward Targets</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                      <th>Serial No</th>
                        <th>Reward Income Type</th>
                        <th>Target Amount</th>
                        <th>Reward Days</th>
                        <th>Profit Per Day</th>
                        <th>Payment Deduction</th>
                        <th>Remarks</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                      <th>Serial No</th>
                      <th>Reward Income Type</th>
                        <th>Target Amount</th>
                        <th>Reward Days</th>
                        <th>Profit Per Day</th>
                        <th>Payment Deduction</th>
                        <th>Remarks</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>
                    <?php  $number = 1; ?>
                    @foreach($reward as $rewards)
                      <tr>
                      <td>{{$number}}. </td>
                      <td>{{$rewards->reward_name}}</td>
                      <td>${{$rewards->business_amount	}}</td>
                      <td>{{$rewards->days}}</td>
                      <td>${{$rewards->profit}}</td>
                      @if($rewards->payment_deduct == '1')
                      <td>YES</td>
                      @else
                      <td>NO</td>
                      @endif
                      <td>{{$rewards->remarks}}</td>
                      <td>
                        <p>
                        <a href="{{asset('/reward/update-reward-target/'.$rewards->id)}}" class="btn-sm btn-info">
                         <i class="fas fa-info-circle"></i>
                        </a>
                        </p> <p>
                      <a href="{{asset('/reward/delete-reward-target/'.$rewards->id)}}" class="btn-sm btn-danger">
                        <i class="fas fa-trash"></i>
                      </a>
                      </span>
                    </td>
                      </tr>
                      <?php  $number++; ?>
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