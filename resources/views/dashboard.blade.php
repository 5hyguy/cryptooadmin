@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
   <style>
       .table-responsive {
display: block;
overflow-x: auto;
width: 80%;
-webkit-overflow-scrolling: touch;
-ms-overflow-style: -ms-autohiding-scrollbar;
}

.bg-default {
width : 100%;
background-color: #172b4d !important;
}
       </style>
        <div class="row">
            <div class="col">
              <div class="card bg-default shadow">
                <div class="card-header bg-transparent border-0">
                  <h3 class="text-white mb-0">Dark table</h3>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-dark table-flush">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col" class="sort" data-sort="name">Project</th>
                        <th scope="col" class="sort" data-sort="budget">Budget</th>
                        <th scope="col" class="sort" data-sort="status">Status</th>
                        <th scope="col">Users</th>
                        <th scope="col" class="sort" data-sort="completion">Completion</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody class="list">
                      <tr>
                        <th scope="row">
                          <div class="media align-items-center">
                            <a href="#" class="avatar rounded-circle mr-3">
                              <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                            </a>
                            <div class="media-body">
                              <span class="name mb-0 text-sm">Argon Design System</span>
                            </div>
                          </div>
                        </th>
                        <td class="budget">
                          $2500 USD
                        </td>
                        <td>
                          <span class="badge badge-dot mr-4">
                            <i class="bg-warning"></i>
                            <span class="status">pending</span>
                          </span>
                        </td>
                        <td>
                          <div class="avatar-group">
                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                              <img alt="Image placeholder" src="../assets/img/theme/team-1.jpg">
                            </a>
                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                              <img alt="Image placeholder" src="../assets/img/theme/team-2.jpg">
                            </a>
                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                              <img alt="Image placeholder" src="../assets/img/theme/team-3.jpg">
                            </a>
                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                              <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                            </a>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <span class="completion mr-2">60%</span>
                            <div>
                              <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="text-right">
                          <div class="dropdown">
                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      
                  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
              <br />     <br />   
            
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush