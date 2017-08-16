<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="robots" content="noindex, nofollow" />
        <script src="{{APPDIR}}/javascript/functions.js" type="text/javascript"></script>
        <script src="{{APPDIR}}/javascript/counterhistory.class.js" type="text/javascript"></script>
        <script src="{{APPDIR}}/javascript/datatables/media/js/jquery.js" type="text/javascript"></script>
        <script src="{{APPDIR}}/javascript/datatables/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <title>Pimped Apache Status</title>

        {{HEADER}}
        
        <!-- adminlte -->
        <script src="{{APPDIR}}/vendor/adminlte/dist/js/app.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="{{APPDIR}}/vendor/adminlte/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="{{APPDIR}}/vendor/adminlte/dist/css/skins/_all-skins.min.css">

    </head>
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        {{CONTENT}}

        {{FOOTER}}{{JSONREADY}}
    </div>
    </body>
</html>