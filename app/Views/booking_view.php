<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Codeigniter 4 CRUD App Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
</head>
<body>
    <div class="container mt-4">
        <div class="d-flex justify-content-end">
            <a href="<?= site_url('/user-form') ?>" class="btn btn-success mb-2">Add booking</a>
        </div>
        <?php if(session()->has('msg')): ?>
            <div class="alert alert-success"><?= session('msg') ?></div>
        <?php endif; ?>

        <div class="mt-3">
            <table class="table table-bordered" id="users-list">
                <thead>
                    <tr>
                        <th>Booking Id</th>
                        <th>From Date</th>
                        <th>To Date</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($booking): ?>
                        <?php foreach($booking as $user): ?>
                            <tr>
                                <td><?= $user['bid']; ?></td>
                                <td><?= $user['from_date']; ?></td>
                                <td><?= $user['to_date']; ?></td>
                                <td><?= $user['message']; ?></td>
                                <td>
    <a href="<?= base_url('edit-view/'.$user['bid']); ?>" class="btn btn-primary btn-sm">Edit</a>
    <a href="<?= base_url('delete/'.$user['bid']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
</td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#users-list').DataTable();
        } );
    </script>
</body>
</html>
