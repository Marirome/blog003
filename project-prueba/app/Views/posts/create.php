<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="flex flex-col items-center justify-center" >
  <h2 class="text-xl font-semibold mb-4">Nueva Entrada</h2>
<?php
  $action = '/posts/store';
  $buttonText = 'Crear';
  $post = [];
  include('form.php');
?>
</div>
<?= $this->endSection() ?>