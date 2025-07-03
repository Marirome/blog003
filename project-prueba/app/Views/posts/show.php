<h1><?= esc($post['title']) ?></h1>
<p><em><?= esc($post['excerpt']) ?></em></p>
<div><?= esc($post['content']) ?></div>
<a href="/posts">Volver</a>

<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<article class="bg-white p-6 rounded shadow max-w-3xl mx-auto">
    <?php if (!empty($post['image'])): ?>
        <img src="/uploads/<?= esc($post['image']) ?>" alt="Imagen del post" class="w-full max-w-2xl mx-auto mb-4 rounded shadow">
    <?php endif; ?>
  <h2 class="text-2xl font-bold mb-2"><?= esc($post['title']) ?></h2>
  <p class="text-gray-600 italic mb-4"><?= esc($post['excerpt']) ?></p>
  <div class="prose max-w-none"><?= esc($post['content']) ?></div>
  <p class="text-sm text-gray-500">
        Publicado el <?= date('d/m/Y H:i', strtotime($post['created_at'])) ?>
        </p>
</article>

<div class="mt-6">
    <a href="/posts" class="text-blue-500 hover:underline">← Volver al listado</a>
    <a href="/posts/edit/<?= $post['id'] ?>" class="text-yellow-600 hover:underline">✏️ Editar</a>
    <a href="/posts/delete/<?= $post['id'] ?>" class="text-red-600 hover:underline ml-4" onclick="return confirm('¿Estás seguro de eliminar esta entrada?')">🗑️ Eliminar</a>
</div>

<?= $this->endSection() ?>

