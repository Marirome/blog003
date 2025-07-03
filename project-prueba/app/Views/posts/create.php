<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h2 class="text-xl font-semibold mb-4">Nueva Entrada</h2>
<?php
  $action = '/posts/store';
  $buttonText = 'Crear';
  $post = [];
  include('form.php');
?>
<?= $this->endSection() ?>