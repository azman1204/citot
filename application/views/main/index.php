<legend>Login Screen</legend>
<?php
if (isset($err)) {
    echo "<div class='alert alert-danger'>$err</div>";
}
?>
<form method="post" action="<?= site_url('main/login/enter') ?>">
<div class="col-md-6 well">
    <div class="row">
        <div class="col-md-12">User ID</div>
        <div class="col-md-12">
            <input type="text" name="userid" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">Password</div>
        <div class="col-md-12">
            <input type="password" name="pwd" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12"></div>
        <div class="col-md-12">
            <input type="submit" value="Login" class="btn btn-primary">
        </div>
    </div>
</div>
</form>