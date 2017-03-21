<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script>
    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="https://cdn.bootcss.com/nprogress/0.2.0/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-progressbar/0.9.0/bootstrap-progressbar.min.js" rel="stylesheet">
    <!-- JQVMap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.24/daterangepicker.css" rel="stylesheet">


    <!-- Pnotify -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pnotify/3.0.0/pnotify.css">
    <link rel="stylesheet" href="{{ asset('/css/pnotify.buttons.css') }}">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.3.1/sweetalert2.min.css">
    <!-- <link href="./pnotify.custom.min.css" media="all" rel="stylesheet" type="text/css" /> -->


    <!-- Custom Theme Style -->
    <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body class="nav-md">

        @yield('content')

        <!-- jQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.js"></script>
        <!-- NProgress -->
        <!-- <script src="../vendors/nprogress/nprogress.js"></script> -->
        <!-- Chart.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
        <!-- gauge.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gauge.js/1.2.1/gauge.min.js"></script>
        <!-- iCheck -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
        <!-- Skycons -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/skycons/1396634940/skycons.min.js"></script>
        <!-- Flot -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.pie.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.time.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.stack.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.resize.js"></script>
        <!-- Flot plugins -->
        <!-- <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script> -->
        <!-- <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script> -->

        <script src="{{ asset('/js/jquery.flot.orderBars.js') }}"></script>
        <script src="{{ asset('/js/jquery.flot.spline.min.js') }}"></script>
        <script src="https://cdn.rawgit.com/MichaelZinsmaier/CurvedLines/1.1.1/curvedLines.js"></script>
        <!-- DateJS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datejs/1.0/date.min.js"></script>
        <!-- JQVMap -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jquery.vmap.min.js"></script>
        <!-- <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script> -->
        <!-- <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script> -->
        <!-- bootstrap-daterangepicker -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="{{ asset('/js/shCore.js') }}"></script>
        <!-- <script src="./js/datepicker/daterangepicker.js"></script> -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/pnotify/3.0.0/pnotify.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-promise/4.0.5/es6-promise.min.js"></script> <!-- for IE support -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.3.1/sweetalert2.min.js"></script>

        <!-- datatable -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.28/vue.js"></script>
        <!-- <script src="/dist/vuejs-datatable.js"></script> -->

        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.6.2/parsley.min.js"></script> -->

        <!-- Scripts -->
        <script type="text/javascript" src="{{asset('js/app.js')}}"></script>

</body>
@yield('script')
<!-- <script src="/js/app.js"></script> -->
<!-- bootstrap-progressbar -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-progressbar/0.9.0/bootstrap-progressbar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.24/daterangepicker.min.js"></script>

<script src="{{ asset('/js/custom.min.js') }}"></script>
</html>

<script>
    $(document).ready(function() {

    var cb = function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    };

    var optionSet1 = {
        startDate: moment().subtract(29, 'days'),
        endDate: moment(),
        minDate: '01/01/2012',
        maxDate: '12/31/2015',
        dateLimit: {
        days: 60
    },
    showDropdowns: true,
    showWeekNumbers: true,
    timePicker: false,
    timePickerIncrement: 1,
    timePicker12Hour: true,
    ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    },
    opens: 'left',
    buttonClasses: ['btn btn-default'],
    applyClass: 'btn-small btn-primary',
    cancelClass: 'btn-small',
    format: 'MM/DD/YYYY',
    separator: ' to ',
    locale: {
    applyLabel: 'Submit',
    cancelLabel: 'Clear',
    fromLabel: 'From',
    toLabel: 'To',
    customRangeLabel: 'Custom',
    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
    firstDay: 1
    }
    };
    $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
    $('#reportrange').daterangepicker(optionSet1, cb);
    $('#reportrange').on('show.daterangepicker', function() {
        console.log("show event fired");
    });
    $('#reportrange').on('hide.daterangepicker', function() {
        console.log("hide event fired");
    });
    $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
        console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
    });
    $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
        console.log("cancel event fired");
    });
    $('#options1').click(function() {
    $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
    });
    $('#options2').click(function() {
    $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
    });
    $('#destroy').click(function() {
    $('#reportrange').data('daterangepicker').remove();
    });
    });
</script>
