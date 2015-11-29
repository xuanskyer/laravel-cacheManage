<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>


        {!! HTML::style('packages/flat-ui/css/vendor/bootstrap.min.css') !!}
        {!! HTML::style('packages/flat-ui/css/flat-ui.min.css') !!}
        {!! HTML::script('packages/flat-ui/js/vendor/flat-ui.min.js') !!}

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
        </div>
    </body>
</html>
