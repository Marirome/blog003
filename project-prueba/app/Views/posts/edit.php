<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h2 class="text-xl font-semibold mb-4">Editar Entrada</h2>
<?php
  $action = "/posts/update/{$post['id']}";
  $buttonText = 'Actualizar';
  include('form.php');
?>
<?= $this->endSection() ?>
