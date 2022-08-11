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
    <!-- CSS Files -->
    <link href="{{asset('admin_theme/assets/css/material-dashboard.css?v=2.1.2')}}" rel="stylesheet" />
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

        input[type="radio"] {
            display: block;
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
                                    <h4 class="card-title">Joinery Arrival Form</h4>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="{{route('arrival_data')}}" class="signature_form ">
                                        @csrf
                                        <div class="row p-4">
                                            <div class="form-group col-md-12">
                                                <label>Department - Contact</label>
                                                <input type="hidden" name="department_id" value="{{$departments->id}}">
                                                <input type="text" name="" class="form-control" value="{{$departments->name}} - {{$departments->email}}" readonly>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Date</label>
                                                <input type="text" name="date" id="datepicker" class="form-control" value="" readonly="">
                                                @error('date')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6 ">
                                                <label for="">Select Visitor</label>
                                                <select name="after_assessments_id" id="after_assessments_id" class="form-control">
                                                    <option value="" selected disabled>Select Visitor</option>
                                                    @foreach($visitor as $visit)
                                                    <option value="{{$visit->id}}">
                                                        {{$visit->driver_name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12 for_ajaxload">

                                            </div>
                                            <div>
                                                <button type="submit" class="ml-3 mt-0 mb-0 btn form-header btn-block form_submit text-white">Submit</button>
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

    <script src="{{asset('admin_theme/assets/js/plugins/moment.min.js')}}"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="{{asset('admin_theme/assets/js/plugins/sweetalert2.js')}}"></script>
    <script src="{{asset('admin_theme/bootstrap.min.js')}}"></script>
    <script>
        var d = new Date();

        function addZero(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }
        $('#datepicker').val(addZero(d.getDate()) + '/' + addZero((d.getMonth() + 1)) + '/' + d.getFullYear());

        @if(session('swal'))
        $(document).ready(function() {
            swal("{{ session('swal_title') }}", "{{ session('swal_text') }}", "{{ session('swal_type') }}").then((result) => {
                window.location = "{{ route('thankyou') }}";
            });;
        });
        @endif
    </script>

    <script>
        $("#after_assessments_id").change(function() {
            var visitor = $("#after_assessments_id option:selected").val();
            $.ajax({
                type: "GET",
                url: "{{route('get_visitor_detail')}}/" + visitor,
                success: function(response) {
                    $(".for_ajaxload").html(response);
                    console.log(response);
                }
            });
        });

        var d = new Date();
        var strDate = addZero(d.getDate()) + "/" + addZero(d.getMonth() + 1) + "/" + addZero(d.getFullYear());
        $('input[name=date]').val(strDate);

        function addZero(val) {
            return val < 10 ? ('0' + val) : val;
        }
        var d = new Date();
        var time = addZero(d.getHours()) + ":" + addZero(d.getMinutes());
        $('input[name=time]').val(time);

        $(document).ready(function() {
            $('.form_submit').click(function() {
                $(this).prop('disabled', true);
                $(this).closest('form').submit();
            });
            $('.bmd-form-group').each(function() {
                $(this).find('label').removeClass('bmd-label-floating');
                $(this).removeClass('bmd-form-group');
            });

            var data = <?php echo json_encode(session()->getOldInput()) ?>;
            mapDataToFields(data);
        });

        $(document).on('change', '.for_ajaxload', function() {
            $('[name="temp"],[name="common"]').on('change', function() {
                showTemp()
            });
        });


        function showTemp() {
            if (typeof $('[name=temp]:checked').val() !== "undefined" && typeof $('[name=common]:checked').val() !== "undefined") {
                if ($('[name=temp]:checked').val() !== ">39" && $('[name=temp]:checked').val() !== ">101")
                    temp = parseInt($('[name=temp]:checked').val()) + parseFloat($('[name=common]:checked').val());
                else
                    temp = $('[name=temp]:checked').val();
                $('#temperature').val(temp);

            }
        }
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
        };
    </script>

</body>

</html>