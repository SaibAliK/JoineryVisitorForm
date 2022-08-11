<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/logo.png')}}">
  <link rel="icon" type="image/png" href="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    JoineryVisitor
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--Fonts and icons-->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href="https://weareoutman.github.io/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{asset('admin_theme/assets/css/material-dashboard.css?v=2.1.2')}}" rel="stylesheet" />
  <link type="text/css" href="{{ asset('admin_theme/assets/signature-pad.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('admin_theme/bootstrap.min.css')}}">


  <style>
    .col-lg-12 ul {
      margin-top: 0;
      margin-bottom: 24px
    }

    ul li {
      list-style: none;
    }

    ul {
      padding: 0;
      margin: 20px 0 24px;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      justify-content: space-between;
      color: #5A6872;
      font-size: 14px;
      max-width: 460px
    }

    @media (max-width:767px) {
      ul li {
        margin-bottom: 5px
      }
    }

    @media (max-width:767px) {
      ul {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column
      }
    }

    @media (max-width:1199px) {
      ul {
        margin-top: 0
      }
    }

    ul label {
      margin-bottom: 0
    }

    ul input {
      position: relative;
      margin: 2px 13px 0 2px
    }

    ul input:before {
      content: '';
      position: absolute;
      left: -2px;
      top: -2px;
      width: 16px;
      height: 16px;
      background: #FBFBFD;
      border: 1px solid #00AEAF;
      border-radius: 2px
    }

    @media (max-width:767px) {
      ul input:before {
        top: 0
      }
    }

    ul input:after {
      content: '';
      position: absolute;
      left: 1px;
      top: 1px;
      width: 10px;
      height: 10px;
      background: rgb(167, 58, 115);
      border-radius: 2px;
      display: none
    }

    @media (max-width:767px) {
      ul input:after {
        top: 3px
      }
    }

    ul input:checked:after {
      display: block
    }

    .table thead th {
      border-top-width: 1px;
    }

    .bmd-form-group .bmd-label-floating,
    .bmd-form-group .bmd-label-placeholder {
      left: 10px;
    }

    .form-control {
      border: 2px solid #eee;
      border-radius: 8px;
      padding: 4px 10px;
    }

    input.form-control,
    textarea.form-control {
      background-image: none !important;
      padding: 8px 10px;
    }

    .form-group label {
      font-weight: bold;
      text-transform: capitalize;
      margin-bottom: 3px;
    }

    .card-title {
      font-weight: bold;
    }

    .navbar .navbar-brand {
      font-weight: bold;
    }

    .dataTables_filter {
      text-align: right;
    }

    .dataTables_paginate .pagination {
      justify-content: right;
    }

    .collapsein {
      margin-top: 20px;
      padding-left: 1.5rem;
      margin-bottom: 0;
      list-style: none;
    }

    select {
      background-image:
        linear-gradient(45deg, transparent 50%, gray 50%),
        linear-gradient(135deg, gray 50%, transparent 50%),
        linear-gradient(to right, #ccc, #ccc) !important;
      background-position:
        calc(100% - 20px) calc(1em + 2px),
        calc(100% - 15px) calc(1em + 2px),
        calc(100% - 2.5em) 0.5em !important;
      background-size:
        5px 5px,
        5px 5px,
        1px 1.5em !important;
      background-repeat: no-repeat !important;
    }

    select:focus {
      background-image:
        linear-gradient(45deg, green 50%, transparent 50%),
        linear-gradient(135deg, transparent 50%, green 50%),
        linear-gradient(to right, #ccc, #ccc) !important;
      background-position:
        calc(100% - 15px) 1em,
        calc(100% - 20px) 1em,
        calc(100% - 2.5em) 0.5em !important;
      background-size:
        5px 5px,
        5px 5px,
        1px 1.5em !important;
      background-repeat: no-repeat !important;
      outline: 0 !important;
    }

    select:-moz-focusring {
      color: transparent !important;
      text-shadow: 0 0 0 #000 !important;
    }

    .bootstrap-select>.dropdown-toggle,
    .bootstrap-select>.dropdown-toggle:hover,
    .bootstrap-select>.dropdown-toggle:active,
    .bootstrap-select>.dropdown-toggle:focus {
      padding: 7px 12px !important;
      margin: 0px !important;
      color: #0f0f0f;
      background: #fff;
      box-shadow: none;
      border: 2px solid #eee;
      border-radius: 8px;
    }

    .job-checks .form-check {
      padding-left: 18px;
      flex: 1;
    }

    .nav-tabs .nav-link.disabled {
      opacity: .6;
      cursor: not-allowed;
    }

    .bold {
      font-weight: bold !important;
    }

    .form-group .alert-danger {
      font-size: 12px;
      padding: 3px;
    }

    #toast-container>.toast-success {
      opacity: 1 !important;
    }

    #toast-container>.toast-error {
      opacity: 1 !important;
    }

    .if-attending {
      display: none;
    }

    .form-header {
      background: #cb302b !important;
    }

    .header-image {
      width: 400px;
      height: 100px;
    }
  </style>

</head>

<body class="">
  <div class="wrapper">
    <div class="main-panel ml-0 w-100">
      <div class="content mt-3">
        <div class="container">
          <div class="row">
            <div class="col-md-8 offset-md-2">
              <div class="mb-5 text-center pb-3">
                <a class="pb-0" href="">
                  <img src="{{asset('/MJ new.png')}}" class="navbar-brand-img d-inline header-image" alt="Joinery work Assessment">
                </a>
              </div>
              <div class="card mt-3">
                <div class="card-header card-header-danger form-header">
                  <h4 class="card-title">{{$lang_string['form_header'] ?? "Joinery Visitor Form"}}</h4>
                </div>

                <div class="card-body">
                  <p class="p-2 mt-2">
                    {{ $lang_string['header_text'] ?? "" }}
                  </p>
                  <form method="post" action="{{route('after_assessment_store')}}" class="signature_form">
                    @csrf
                    <div class="row p-4">
                      <div class="form-group col-md-6">
                        <label>{{$lang_string['visitor_name'] ?? "Visitor Name"}} *</label>
                        <input type="text" name="driver_name" class="form-control" value="" required>
                        @error('driver_name')
                        <div class="alert alert-danger">{{ $message  ?? ""}}</div>
                        @enderror
                      </div>

                      <div class="form-group col-md-6">
                        <label>{{$lang_string['visitor_mobile'] ?? "Visitor Mobile"}}</label>
                        <input type="text" name="driver_mobile" class="form-control">
                        @error('driver_mobile')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group col-md-6">
                        <label>{{$lang_string['company_name'] ?? "Company Name"}} *</label>
                        <input type="text" name="freight_company" class="form-control">
                        @error('freight_company')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group col-md-6">
                        <label>{{$lang_string['vehicle_registration_number'] ?? "Vehicle Registration Number"}}</label>
                        <input type="text" name="vehicle_number" class="form-control">
                        @error('vehicle_number')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group col-md-6">
                        <label>{{$lang_string['arrival_date'] ?? "Arrival Date"}}</label>
                        <input type="text" name="date" id="datepicker" placeholder="Arrival Date" autocomplete="off" class="form-control">
                        @error('date')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group col-md-6">
                        <label>{{$lang_string['expected_arrival_time'] ?? "Expected Arrival Time"}}</label>
                        <input type="text" name="time" id="timepicker" class="form-control" autocomplete="off">
                        @error('time')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group col-md-6">
                        <label>{{$lang_string['depart_contact'] ?? "Department - Contact you are visiting"}}</label>
                        <select class="form-control" name="department_id" id="department" required>
                          <option selected disabled>Choose Department</option>
                          @foreach($departments as $depart)
                          <option value="{{$depart->id}}" data-zone="{{$depart->zone->number}}">{{$depart->name}}</option>
                          @endforeach
                        </select>
                        <!-- <textarea rows="3" cols="" name="description_of_freight" class="form-control"></textarea> -->
                        @error('department_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group col-md-6">
                        <label>{{$lang_string['supplier_description'] ?? "Supplier Name - Description of goods"}} </label>
                        <input type="text" name="description_of_freight" class="form-control">
                        @error('description_of_freight')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group col-md-12">
                        <label>{{$lang_string['munster_joinery_number'] ?? "Munster Joinery Zone Number"}}</label>
                        <input type="text" name="joinery_zone_number" class="form-control" value="" readonly>
                        @error('joinery_zone_number')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group col-md-12 mt-3">
                        <label>{{$lang_string['q1'] ?? " 1. Do You Have Either: A New Continuous Cough?, A High Temperature Or A Loss Of Taste Or Smell ?"}} </label>
                        <div class="row">
                          <div class="col-md-6 ">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="taste_and_smell" value="yes">
                                {{$lang_string['yes'] ?? "Yes"}}
                                <span class="circle">
                                  <span class="check"></span>
                                </span>
                              </label>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="taste_and_smell" value="no">
                                {{$lang_string['no'] ?? "No"}}
                                <span class="circle">
                                  <span class="check"></span>
                                </span>
                              </label>
                            </div>
                          </div>
                        </div>
                        @error('taste_and_smell')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <hr>
                      </div>
                      <div class="form-group col-md-12">
                        <label>{{$lang_string['q2'] ?? "2. Please List Below All The Countries You Have Visited Or Travelled Through In The Last 14 Days ?"}}</label>
                        <input type="text" name="countries[]" placeholder="Enter Multiple Countries" class="form-control">
                        @error('countries')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <hr>
                      </div>
                      <div class="form-group col-md-12 mt-3">
                        <label>{{$lang_string['q3'] ?? "3. Have You Been In Close Contact (Less Than 2 Metres For More Than 15 Minutes) With Anyone Who Has Been Diagnosed With Coronavirus?"}}</label>
                        <div class="row">
                          <div class="col-md-6 ">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="close_contact" value="yes">
                                {{$lang_string['yes'] ?? "Yes"}}
                                <span class="circle">
                                  <span class="check"></span>
                                </span>
                              </label>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="close_contact" value="no">
                                {{$lang_string['no'] ?? "No"}}
                                <span class="circle">
                                  <span class="check"></span>
                                </span>
                              </label>
                            </div>
                          </div>
                        </div>
                        @error('close_contact')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <hr>
                      </div>
                      <div class="form-group col-md-12 mt-3">
                        <label>{{$lang_string['q4'] ?? "4. Do You Agree To Notify Munster Joinery If For Any Reason Your Answers To The Above Change Or You Are Diagnosed With Covid-19 In The Next 14 Days?"}} </label>
                        <div class="row">
                          <div class="col-md-6 ">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="diagnosed_with_Covid" value="yes">
                                {{$lang_string['yes'] ?? "Yes"}}
                                <span class="circle">
                                  <span class="check"></span>
                                </span>
                              </label>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="diagnosed_with_Covid" value="no">
                                {{$lang_string['no'] ?? "No"}}
                                <span class="circle">
                                  <span class="check"></span>
                                </span>
                              </label>
                            </div>
                          </div>
                        </div>
                        @error('diagnosed_with_Covid')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <hr>
                      </div>
                      <div class="form-group col-md-12 mt-3">
                        <label>5. {{ $lang_string['q5'] ?? "Are you traveling alone in vehicle?" }}</label>
                        <div class="row">
                          <div class="col-md-6 ">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="travel_alone" value="yes">
                                {{ $lang_string['yes'] ?? "Yes" }}
                                <span class="circle">
                                  <span class="check"></span>
                                </span>
                              </label>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="col-md-6 ">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input " type="radio" name="travel_alone" value="no">
                                  {{ $lang_string['no'] ?? "No" }}
                                  <span class="circle">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 row if_have_passenger" style="display: none;">
                            <div class="col-md-12">
                              <label for="">{{ $lang_string['passenger_text'] ?? "Please note that your passenger will need to complete a form also" }}</label>
                            </div>
                            <div class="form-group col-md-6">
                              <label>{{ $lang_string['passenger_name'] ?? "Name of Passenger" }}</label>
                              <input type="text" name="passenger_name" class="form-control" value="">
                              @error('passenger_name')
                              <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                            </div>

                            <div class="form-group col-md-6">
                              <label>{{ $lang_string['passenger_contact'] ?? "Contact Number of Passenger" }}</label>
                              <input type="text" name="passenger_contact" class="form-control">
                              @error('passenger_contact')
                              <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                            </div>
                          </div>
                        </div>
                        @error('own_vehicle')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <hr>
                        @error('travel_alone')
                              <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                        <p>
                          {{ $lang_string['footer_text'] ?? "" }}
                        </p>
                      </div>
                      <div class="col-md-12 form-group">
                        <div class="signature mt-2">
                          <label class="" for="signature64"></label>
                          <div id="signature-pad" class="signature-pad">
                            <div class="signature-pad--body">
                              <canvas></canvas>
                            </div>
                            <div class="signature-pad--footer">
                              <div class="description"></div>

                              <div class="signature-pad--actions">
                                <div>
                                  <button type="button" class="btn btn-danger" data-action="clear">{{$lang_string['clear'] ?? "Clear"}}</button>
                                  <button type="button" class="btn btn-warning" data-action="undo">{{$lang_string['undo'] ?? "Undo"}}</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="Signatur"></div>
                          <br />
                        </div>
                      </div>
                      <div>
                        <button type="submit" class="ml-3 mt-0 mb-0 btn form-header btn-block form_submit text-white">{{$lang_string['submit'] ?? "Submit"}}</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>-->
  <script src="{{asset('admin_theme/assets/js/plugins/moment.min.js')}}"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <script src="{{asset('admin_theme/assets/js/plugins/sweetalert2.js')}}"></script>
  <script type="text/javascript" src="{{ asset('admin_theme/assets/signature_pad.umd.js') }}"></script>
  <script type="text/javascript" src="{{ asset('admin_theme/assets/app.js') }}"></script>
  <script src="{{asset('admin_theme/bootstrap.min.js')}}"></script>
  <script src="https://weareoutman.github.io/clockpicker/dist/jquery-clockpicker.min.js"></script>

<script>
    @if(session('swal'))
    $(document).ready(function() {
      swal("{{ session('swal_title') }}", "{{ session('swal_text') }}", "{{ session('swal_type') }}").then((result) => {
        window.location = "{{ route('thankyou') }}";
      });
    });
    @endif
  </script>
  <script>
    var d = new Date();

    function addZero(i) {
      if (i < 10) {
        i = "0" + i;
      }
      return i;
    }
    // var d = new Date();
    // var time = addZero(d.getHours()) + ":" + addZero(d.getMinutes());
    // $('input[name=time]').val(time);

    $('#datepicker').val(addZero(d.getDate()) + '/' + addZero((d.getMonth() + 1)) + '/' + d.getFullYear());
    var choices = ["00", "15", "30", "45"];
    $('#timepicker').clockpicker({
      autoclose: true,
      afterShow: function() {
        $(".clockpicker-minutes").find(".clockpicker-tick").filter(function(index, element) {
          return !($.inArray($(element).text(), choices) != -1)
        }).remove();
      }
    });
    $(document).on('change', 'input[name="travel_alone"]', function() {
      var test = $('input[name="travel_alone"]:checked').val();
      if (test == "yes") {
        $('.if_have_passenger').hide();
      } else {
        $('.if_have_passenger').show();
      }
    });
    $(document).ready(function() {
      $('#datepicker').datepicker({
        dateFormat: 'dd/mm/yy'
      });
      var data = <?php echo json_encode(session()->getOldInput()) ?>;
      mapDataToFields(data);
    });
    $(".form_submit").click(function(e) {
      $(this).prop('disabled', true);
      e.preventDefault();
      ImagePNG();
      $(".signature_form").submit();
    });
  </script>
  <script>
    $(document).on('change', '#department', function() {
      var zone_number = $(this).find(':selected').data('zone');
      $('input[name="joinery_zone_number"]').val(zone_number);
    });
    
  </script>

  <script type="text/javascript">
    function mapDataToFields(data) {
      $.map(data, function(value, index) {
        var input = $('[name="' + index + '"]');
        if ($(input).length && $(input).attr('type') !== 'file') {
          if (($(input).attr('type') == 'radio' || $(input).attr('type') == 'checkbox')) {
            $(input).each(function() {
              if ($(this).val() == value)
                $(this).prop('checked', true).change();
            })
          } else
            $(input).val(value).change();
        }
      });
    }
  </script>
</body>

</html>