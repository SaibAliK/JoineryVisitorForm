@extends('layouts.master')
@section('title', 'Dashboard | Language String')
@section('page-heading', 'Add Language Translation')
@section('css')
@stop

@section('dashboard-bar')
@stop

@section('content')
<div class="mt-5">
    <form action="{{route('language.store.translation', [$lang_id])}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Header Text</label>
                    <textarea rows="3" cols="" name="header_text" class="form-control">{{$language['header_text'] ?? ""}}</textarea>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Footer Text</label>
                    <textarea rows="3" cols="" name="footer_text" class="form-control">{{$language['footer_text'] ?? ""}}</textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Joinery Visitor Form</label>
                    <textarea rows="3" cols="" name="form_header" class="form-control">{{$language['form_header'] ?? ""}}</textarea>
                </div>
                @error('form_header')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Visitor Name</label>
                    <textarea rows="3" cols="" name="visitor_name" class="form-control">{{$language['visitor_name'] ?? ""}}</textarea>
                </div>
                @error('visitor_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Visitor Mobile</label>
                    <textarea rows="3" cols="" name="visitor_mobile" class="form-control">{{$language['visitor_mobile'] ?? ""}}</textarea>
                </div>
                @error('visitor_mobile')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Company Name</label>
                    <textarea rows="3" cols="" name="company_name" class="form-control">{{$language['company_name'] ?? ""}}</textarea>
                </div>
                @error('company_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Vehicle Registration Number</label>
                    <textarea rows="3" cols="" name="vehicle_registration_number" class="form-control">{{$language['vehicle_registration_number'] ?? ""}}</textarea>
                </div>
                @error('vehicle_registration_number')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Arrival Date</label>
                    <textarea rows="3" cols="" name="arrival_date" class="form-control">{{$language['arrival_date'] ?? ""}}</textarea>
                </div>
                @error('arrival_date')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Expected Arrival Time</label>
                    <textarea rows="3" cols="" name="expected_arrival_time" class="form-control">{{$language['expected_arrival_time'] ?? ""}}</textarea>
                </div>
                @error('expected_arrival_time')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Department - Contact You Are Visiting</label>
                    <textarea rows="3" cols="" name="depart_contact" class="form-control">{{$language['depart_contact'] ?? ""}}</textarea>
                </div>
                @error('depart_contact')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Supplier Name - Description Of Goods</label>
                    <textarea rows="3" cols="" name="supplier_description" class="form-control">{{$language['supplier_description'] ?? ""}}</textarea>
                </div>
                @error('supplier_description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Munster Joinery Zone Number</label>
                    <textarea rows="3" cols="" name="munster_joinery_number" class="form-control">{{$language['munster_joinery_number'] ?? ""}}</textarea>
                </div>
                @error('munster_joinery_number')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Do You Have Either: A New Continuous Cough?, A High Temperature Or A Loss Of Taste Or Smell ?</label>
                    <textarea rows="3" cols="" name="q1" class="form-control">{{$language['q1'] ?? ""}}</textarea>
                </div>
                @error('q1')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Please List Below All The Countries You Have Visited Or Travelled Through In The Last 14 Days ?</label>
                    <textarea rows="3" cols="" name="q2" class="form-control">{{$language['q2'] ?? ""}}</textarea>
                </div>
                @error('q2')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Have You Been In Close Contact (Less Than 2 Metres For More Than 15 Minutes) With Anyone Who Has Been Diagnosed With Coronavirus?</label>
                    <textarea rows="3" cols="" name="q3" class="form-control">{{$language['q3'] ?? ""}}</textarea>
                </div>
                @error('q3')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Do You Agree To Notify Munster Joinery If For Any Reason Your Answers To The Above Change Or You Are Diagnosed With Covid-19 In The Next 14 Days?</label>
                    <textarea rows="3" cols="" name="q4" class="form-control">{{$language['q4'] ?? ""}}</textarea>
                </div>
                @error('q4')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Are you traveling alone in vehicle?</label>
                    <textarea rows="3" cols="" name="q5" class="form-control">{{$language['q5'] ?? ""}}</textarea>
                </div>
                @error('q5')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Please note that your passenger will need to complete a form also</label>
                    <textarea rows="3" cols="" name="passenger_text" class="form-control">{{$language['passenger_text'] ?? ""}}</textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Name of Passenger</label>
                    <textarea rows="3" cols="" name="passenger_name" class="form-control">{{$language['passenger_name'] ?? ""}}</textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Contact Number of Passenger</label>
                    <textarea rows="3" cols="" name="passenger_contact" class="form-control">{{$language['passenger_contact'] ?? ""}}</textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Yes</label>
                    <textarea rows="3" cols="" name="yes" class="form-control">{{$language['yes'] ?? ""}}</textarea>
                </div>
                @error('yes')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">No</label>
                    <textarea rows="3" cols="" name="no" class="form-control">{{$language['no'] ?? ""}}</textarea>
                </div>
                @error('no')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Submit</label>
                    <textarea rows="3" cols="" name="submit" class="form-control">{{$language['submit'] ?? ""}}</textarea>
                </div>
                @error('submit')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Clear</label>
                    <textarea rows="3" cols="" name="clear" class="form-control">{{$language['clear'] ?? ""}}</textarea>
                </div>
                @error('submit')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">undo</label>
                    <textarea rows="3" cols="" name="undo" class="form-control">{{$language['undo'] ?? ""}}</textarea>
                </div>
                @error('submit')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-success" style="float: right;">Submit</button>
            <a href="{{route('language.index')}}" class="btn btn-danger mr-2" style="float: right;">Close</a>
        </div>
    </form>
</div>
@stop
@section('js')
<script type="text/javascript">
    < script >
        @if(session('swal'))
    $(document).ready(function() {
        swal("{{ session('error') }}", "{{ session('error_text') }}", "{{ session('error_type') }}");
    });
    @endif
</script>
</script>
@stop