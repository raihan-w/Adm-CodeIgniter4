<?= $this->extend('templates/index'); ?>

<?= $this->section('PageContent'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <?php d($user) ?>
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header d-sm-flex align-items-center justify-content-between mb-4">
                <h6 class="m-0 font-weight-bold text-primary">Detail User</h6>
                <a href="#" class="d-sm-inline-block btn btn-sm btn-warning shadow-sm" data-toggle="modal" data-target="#changeModal">
                    <i class="fas fa-key fa-sm text-white-50"></i>
                    Ubah Password
                </a>
            </div>
            <div class="row g-0 mb-4">
                <div class="col-md-4 text-center">
                    <img src="<?= base_url(); ?>/img/<?= $user->user_img; ?>" alt="" style="width: 250px">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <p> First name : <?= $user->firstname; ?></p>
                            </div>
                            <div class="col-sm-6">
                                <p> Last name : <?= $user->lastname; ?></p>
                            </div>
                        </div>
                        <p>Username : <?= $user->username; ?></p>
                        <p>Email : <?= $user->email; ?></p>
                        <hr>
                        <p class="card-text">Role : <?= $user->role; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Change Password Modal -->
<div class="modal fade" id="changeModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Password</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body flex-column border-top-0">
                <form class="user" action="" method="post">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass_confirm" class="form-control form-control-user <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        Ubah Password
                    </button>

                </form>
            </div>
        </div>
    </div>
</div>

<!-- /.container-fluid -->
<?= $this->endSection(); ?>