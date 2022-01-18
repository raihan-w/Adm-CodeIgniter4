<?= $this->extend('templates/index'); ?>
<?= $this->section('PageContent'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <?= $this->include('dashboard/card'); ?>

    <?= $this->include('dashboard/profile'); ?>

</div>
<!-- /.container-fluid -->

<?= $this->endSection(); ?>