<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('/assets/')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('/assets/')}}/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('/assets/')}}/dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Morris Charts CSS -->

    <link href="{{asset('/assets/')}}/vendor/morrisjs/morris.css" rel="stylesheet">
    <!--Data table-->
    <link href="{{asset('/assets/')}}/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <!-- DataTables Responsive CSS -->

    <link href="{{asset('/assets/')}}/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{asset('/assets/')}}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        @include('includes.header')
        <!-- /.navbar-top-links -->

        @include('includes.navbar')
        <!-- /.navbar-static-side -->
    </nav>

    @yield('content')
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{asset('/assets/')}}/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('/assets/')}}/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{asset('/assets/')}}/vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="{{asset('/assets/')}}/vendor/raphael/raphael.min.js"></script>
<script src="{{asset('/assets/')}}/vendor/morrisjs/morris.min.js"></script>
<script src="../data/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="{{asset('/assets/')}}/dist/js/sb-admin-2.js"></script>

{{--Data table--}}
<script src="{{asset('/assets/')}}/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="{{asset('/assets/')}}/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="{{asset('/assets/')}}/vendor/datatables-responsive/dataTables.responsive.js"></script>

<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>

</body>

</html>
