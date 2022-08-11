@extends('layouts.master')
@section('title', 'Dashboard | Setting')
@section('page-heading', 'Update Setting')
@section('css')
@stop

@section('dashboard-bar')
@stop
@section('hide-content', 'd-none')
@section('more-content')
<form action="{{route('Save_Setting')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mb-0">General Settings</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>HR Email</label>
                                <input type="email" class="form-control" name="hr_email" value="{{$setting['hr_email'] ??  ''}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <button class="btn btn-success btn-lg">Update Settings</button>
        </div>
    </div>
</form>
@stop
@section('js')

@stop