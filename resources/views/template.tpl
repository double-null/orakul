<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="/assets/admin/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Admin | {block name="title"}{/block}</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="/assets/admin/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Light Bootstrap Table core CSS    -->
    <link href="/assets/admin/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="/assets/admin/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link href="/assets/admin/css/style.css" rel="stylesheet" />

</head>
<body>
<div class="wrapper">
    <div class="sidebar" data-color="gray" data-image="/assets/admin/img/sidebar-5.jpg">
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="/" class="simple-text">{$smarty.server.HTTP_HOST}</a>
            </div>
            <ul class="nav">
                {foreach $menu as $point}
                    <li {if $module == $point.name}class="active"{/if}>
                        <a href="/admin/{$point.name}/">
                            <i class="{$point.icon}"></i><p>{$point.title}</p>
                        </a>
                    </li>
                {/foreach}
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">

                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#">Аккаунт</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    {if $action !== 'show'}
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">{block name="title"}{/block}
                                    {if $creating == 1}
                                        <a href="/admin/{$module}/create/{if !empty($params)}{$params}{/if}"
                                            class="btn btn-info btn-fill">Добавить</a>
                                    {/if}
                                </h4>
                            </div>
                            <div class="content">
                                {block name="content"}{/block}
                            </div>
                        </div>
                    </div>
                    {else}
                        {block name="content"}{/block}
                    {/if}
                </div>

            </div>
        </div>



        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left"><ul><li></li></ul></nav>

                <p class="copyright pull-right">

                </p>
            </div>
        </footer>

    </div>
</div>


</body>

<!--   Core JS Files   -->
<script src="/assets/admin/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="/assets/admin/js/bootstrap.min.js" type="text/javascript"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="/assets/admin/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
<script src="/assets/admin/js/sweetalert.min.js?d=5"></script>

<script src="/assets/admin/js/custom.js"></script>

{block name="scripts"}{/block}

</html>
