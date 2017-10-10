<legend>Student List</legend>

<a href="<?= site_url('student/form') ?>" class="btn btn-success">New Student</a>

<table class="table table-bordered table-striped">
    <tr class="info">
        <td>No</td>
        <td>Name</td>
        <td>Email</td>
        <td>Action</td>
    </tr>
    <?php 
    $bil = 1;
    foreach ($students as $stu) { ?>
    <tr>
        <td><?= $bil++ ?>.</td>
        <td><?= $stu->name ?></td>
        <td><?= $stu->email ?></td>
        <td>
            <a href="<?= site_url('student/del/'.$stu->id) ?>" onclick="return confirm('Are you sure ?')">
                <span class="glyphicon glyphicon-trash"></span>
            </a>
            <a href="<?= site_url('student/edit/'.$stu->id) ?>">
                <span class="glyphicon glyphicon-pencil"></span>
            </a>
        </td>
    </tr>
    <?php } ?>
</table>
