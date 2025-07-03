<h1>Blog</h1>
<a href="/posts/create">Nueva Entrada</a>
<?php foreach ($posts as $post): ?>
  <div class="bg-white p-6 rounded shadow hover:shadow-md grid lg:grid-cols-6 gap-6">
    <div>
        <?php if (!empty($post['image'])): ?>
            <img src="<?= base_url('uploads/' . $post['image']) ?>" alt="Imagen" class="h-80 w-128 object-cover rounded">
        <?php endif; ?>

      <h3 class="text-lg font-bold">
        <a href="/posts/<?= $post['id'] ?>" class="text-blue-600 hover:underline"><?= esc($post['title']) ?></a>
      </h3>
       <p class="text-gray-700"><?= esc($post['excerpt']) ?></p>
      <p class="text-sm text-gray-500">
        Publicado el <?= date('d/m/Y H:i', strtotime($post['created_at'])) ?>
        </p>

    </div>

  </div>
<?php endforeach; ?>

<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<h2 class="text-xl font-semibold mb-4">Últimas entradas</h2>

<div class="space-4 gap-4 grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:h-auto min-h-[300px]">
<?php foreach ($posts as $post): ?>
  <div class="bg-white p-4 rounded shadow hover:shadow-md">
        <img src="<?= base_url('uploads/' . $post['image']) ?>" alt="Imagen" class="w-full h-[150px] object-cover rounded">
        <h3 class="text-lg font-bold">
      <a href="/posts/<?= $post['id'] ?>" class="text-blue-600 hover:underline"><?= esc($post['title']) ?></a>
    </h3>
    <p class="text-gray-700"><?= esc($post['excerpt']) ?></p>
    <p class="text-sm text-gray-500">
        Publicado el <?= date('d/m/Y H:i', strtotime($post['created_at'])) ?>
        </p>
  </div>
<?php endforeach; ?>
</div>

<?= $this->endSection() ?>
