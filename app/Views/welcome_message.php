<?= $this->extend('layout/template'); ?>

<?= $this->section('title')?>
    Home
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
  <?= $this->include('usuario/panel') ?>
<?= $this->endSection(); ?>