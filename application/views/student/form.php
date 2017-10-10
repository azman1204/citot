
<?= validation_errors() ?>

<form method="post" action="<?= site_url('student/save') ?>">
    <input type="hidden" name="id" value="<?= $student->id ?>">
    Name      : <input type="text" name="name" value="<?= $student->name ?>">
    <br>
    Email     : <input type="text" name="email" value="<?= $student->email ?>">
    <br>
    Matric No : <input type="text" name="matric_no" value="<?= $student->matric_no ?>">
    <br>
    <input type="submit" value="Save" class="btn btn-primary">
</form>