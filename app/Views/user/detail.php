<?= $this->extend('templates/index'); ?>

<?= $this->section('PageContent'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <?php d($user) ?>
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header d-sm-flex align-items-center justify-content-between mb-4">
                <h6 class="m-0 font-weight-bold text-primary">Detail User</h6>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
                    <i class="fas fa-edit"></i>
                </a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?= base_url(); ?>/img/<?= $user->user_img; ?>" alt="">
                    </div>
                    <div class="col-md-8">
                        <form class="user" action="" method="post">
                            <?= csrf_field() ?>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="">First name</label>
                                    <input type="text" name="firstname" class="form-control form-control-user" placeholder="First Name" value="<?= $user->firstname; ?>">
                                </div>
                                <div class="col-sm-6">
                                    <label for="">Last name</label>
                                    <input type="text" name="lastname" class="form-control form-control-user " placeholder="Last Name" value="<?= $user->lastname; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" name="username" class="form-control form-control-user" placeholder="" value="<?= $user->username; ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control form-control-user" placeholder="" value="<?= $user->email; ?>">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>