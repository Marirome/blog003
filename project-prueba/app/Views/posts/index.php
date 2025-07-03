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

<h2 class="text-xl font-semibold mb-4 pt-5">Últimas entradas</h2>

<?php $index = 0; ?>
<div class="space-4 gap-4 grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:h-auto min-h-[300px]" id="postContainer">
  <?php foreach ($posts as $post): ?>
    <div class="bg-white p-4 rounded shadow hover:shadow-md <?= $index >= 8 ? 'hidden' : '' ?> post-item">
        <img src="<?= base_url('uploads/' . esc($post['image'])) ?>" alt="Imagen" class="w-full h-[150px] object-cover rounded">
        <h3 class="text-lg font-bold">
          <a href="/posts/<?= $post['id'] ?>" class="text-blue-600 hover:underline"><?= esc($post['title']) ?></a>
        </h3>
        <p class="text-gray-700"><?= esc($post['excerpt']) ?></p>
        <p class="text-sm text-gray-500">
            Publicado el <?= date('d/m/Y H:i', strtotime($post['created_at'])) ?>
        </p>
    </div>
    <?php $index++; ?>
  <?php endforeach; ?>
</div>

<div class="text-center mt-6">
  <button id="loadMoreBtn" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
    Cargar más
  </button>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const posts = document.querySelectorAll('.post-item');
    const loadMoreBtn = document.getElementById('loadMoreBtn');

    let visibleCount = 8;
    const increment = 4;

    loadMoreBtn.addEventListener('click', () => {
      let hidden = 0;
      posts.forEach((post, i) => {
        if (i < visibleCount + increment) {
          post.classList.remove('hidden');
        } else {
          hidden++;
        }
      });

      visibleCount += increment;

      // Oculta el botón si ya no hay más posts
      if (visibleCount >= posts.length) {
        loadMoreBtn.style.display = 'none';
      }
    });

    // Oculta el botón si hay 8 o menos posts
    if (posts.length <= 8) {
      loadMoreBtn.style.display = 'none';
    }
  });
</script>


<?= $this->endSection() ?>
