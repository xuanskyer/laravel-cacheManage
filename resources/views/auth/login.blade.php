<!DOCTYPE html>
<html>
    <head>
        <title>缓存管理系统</title>
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
                font-size: 40px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">cache manage system</div>
                <form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">

                    <div class="login-form">

                        <div class="form-group">

                            <input name="login_name" type="text" class="form-control login-field" value="" placeholder="Username" id="login-name" />

                            <label class="login-field-icon fui-user" for="login-name"></label>

                        </div>



                        <div class="form-group">

                            <input  name="login_password" type="password" class="form-control login-field" value="" placeholder="Password" id="login-pass" />

                            <label class="login-field-icon fui-lock" for="login-pass"></label>

                        </div>

                        <input class="btn btn-primary btn-lg btn-block" type="submit"  name="dlf_submit" value="Log in" />

                </form>

            </div>
            </div>
        </div>
    </body>
</html>
