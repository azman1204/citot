<!doctype html>
<html>
    <head>
        <title>CI Tutorial</title>
        <link href="<?= base_url() ?>public/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url() ?>public/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="xwrapper" class="container">
            <div id="xheader" style="font-size: 38px;">Codeigniter 3 Tutorial</div>
            <div id="xmenu">
                Home | 
                About | 
                <a href="<?= site_url('main/login/logout') ?>">Logout</a></div>
            <div id="xcontent"><?php $this->load->view($v) ?></div>
            <div id="xfooter"></div>
        </div>
    </body>
</html>