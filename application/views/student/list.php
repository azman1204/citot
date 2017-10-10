<legend>Student List</legend>
<table class="table table-bordered table-striped">
    <tr class="info">
        <td>No</td>
        <td>Name</td>
        <td>Email</td>
        <td>Action</td>
    </tr>
    <?php 
    foreach ($students as $stu) { ?>
    <tr>
        <td></td>
        <td><?= $stu->name ?></td>
        <td><?= $stu->email ?></td>
        <td></td>
    </tr>
    <?php } ?>
</table>
