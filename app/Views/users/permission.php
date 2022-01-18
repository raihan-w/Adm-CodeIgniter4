<?= $this->extend('templates/index'); ?>

<?= $this->section('PageContent'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

<?php d($permission) ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Permission</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Level</th>
                            <th>Permission</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                            <tr>
                                <td>Admin</td>
                                <td>permission</td>
                                <td>
                                    <a href="" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                </td>
                            </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>