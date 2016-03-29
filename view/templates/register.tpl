<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><!--Bootstrap 不支持 IE 古老的兼容模式。为了让 IE 浏览器运行最新的渲染模式下-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"><!--移动设备支持,禁止缩放-->
    <title>注册</title>

    <!-- Bootstrap -->
    <link href="http://localhost/projects/blog2.0/view/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img alt="Brand" src="...">
            <a class="navbar-brand" href="#">DARKEST-blog</a>
        </div>
        <a href="http://localhost/projects/blog2.0/controller/login.php" class="btn btn-default navbar-btn">login</a>
    </div><!-- /.container-fluid -->
</nav>
<div class="container">
    <div class="row">

        <div class="col-md-4">
        </div>

        <div class="col-md-4">
            <div class="page-header">
                <h2>注册<small>register</small></h2>
            </div>

            <div class="panel panel-default">
                <div class="panel-body">
                    {if $error != NULL}
                        <div class="alert alert-danger" role="alert">{$error}</div>
                    {/if}
                </div>
                <div class="panel-footer">
                    <form action="http://localhost/projects/blog2.0/controller/register.php" enctype="multipart/form-data" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">nickname</label>
                            <input type="name" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword2">Confirm</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password2" placeholder="Confirm">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Image input</label>
                            <input type="file" id="exampleInputFile" name ="myfile">
                            <p class="help-block">Please select one picture.</p>
                        </div>
                        <input type="hidden" name="submitted"/>
                        <button type="submit" class="btn btn-default">Submit</button>

                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-4">

        </div>

    </div>
</div>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://localhost/projects/blog2.0/view/jquery/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="http://localhost/projects/blog2.0/view/bootstrap/bootstrap.min.js"></script>
</body>
</html>