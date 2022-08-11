@extends('layouts.master')
@section('title', 'Dashboard | Visitor')
@section('page-heading', 'Dashboard')
@section('css')
@stop

@section('dashboard-bar')
<div class="header">
  <div class="container-fluid">
    <div class="header-body">

      <!-- Card stats -->
      <div class="row pt-5">
        <div class="col-xl-12">
          <button type="button" onclick="deleteAlert('{{route('reset_assessment')}}')" title="Delete" class="btn btn-danger" style="float: right;margin-bottom:10px">Reset All</button>
          <a href="{{route('export_arrival')}}" class="btn btn-info mr-2" style="float: right;margin-bottom:10px">Export Assessment</a>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">Today Total Visitor</h5>
                  <span class="h2 font-weight-bold mb-0">{{$visitor_count}}</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
                    <i class="ni ni-collection"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">Today Total Arrival</h5>
                  <span class="h2 font-weight-bold mb-0">{{$arrival_count}}</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                    <i class="ni ni-bullet-list-67"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">Allow to Enter Site</h5>
                  <span class="h2 font-weight-bold mb-0">{{$allow_to_enter}}</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                    <i class="ni ni-check-bold"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
@section('hide-content', 'd-none')
@section('more-content')

<!-- <div class="row">
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title mb-0">Daily Fail Visitor</h3>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <tbody>
              <tr>
                <th>Before Temperature</th>
                <td>{{$before_temperature ?? "" }}/{{$today_total_visitor ?? ""}} <span class="badge badge-danger">{{number_format($percent_fail_before_temp,2)}}%</span></td>
              </tr>
              <tr>
                <th>High Temperature</th>
                <td>{{$high_temperatur ?? "" }}/{{$today_arrival_count ?? ""}} <span class="badge badge-danger">{{number_format($percent_high_temperature,2)}}%</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title mb-0">Weekly Fail Visitor</h3>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <tbody>
              <tr>
                <th>Before Temperature</th>
                <td>{{$weekly_before_temperature ?? "" }}/{{$weekly_total_visitor ?? ""}} <span class="badge badge-danger">{{number_format($weekly_percent_fail_before_temp,2)}}%</span></td>
              </tr>
              <tr>
                <th>High Temperature</th>
                <td>{{$weekly_high_temperatur ?? "" }}/{{$weekly_total_arrival ?? ""}} <span class="badge badge-danger">{{number_format($weelly_percent_high_temperature,2)}}%</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div> -->


@stop