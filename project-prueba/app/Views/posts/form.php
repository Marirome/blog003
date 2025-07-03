<form method="post" action="<?= $action ?>" enctype="multipart/form-data" class="space-y-4 bg-white p-6 rounded shadow max-w-xl">

  <div>
    <label class="block mb-1 font-medium">Título</label>
    <input type="text" name="title" value="<?= esc($post['title'] ?? '') ?>" class="w-full border border-gray-300 rounded p-2" required>
  </div>

  <div>
    <label class="block mb-1 font-medium">Fecha de Creación</label>
    <input type="datetime-local" name="created_at" value="<?= esc(isset($post['created_at']) ? date('Y-m-d\TH:i', strtotime($post['created_at'])) : '') ?>" class="w-full border border-gray-300 rounded p-2">
  </div>

  <div>
    <label class="block mb-1 font-medium">Imagen</label>
    <input type="file" name="image" class="w-full border border-gray-300 rounded p-2">
    <?php if (!empty($post['image'])): ?>
      <img src="/uploads/<?= $post['image'] ?>" alt="Imagen actual" class="mt-2 h-24 rounded">
    <?php endif; ?>
  </div>

  <div>
    <label class="block mb-1 font-medium">Categoría</label>
    <select name="category" class="w-full border border-gray-300 rounded p-2">
      <option value="">-- Selecciona una categoría --</option>
      <option value="Tecnología" <?= (isset($post['category']) && $post['category'] === 'Tecnología') ? 'selected' : '' ?>>Tecnología</option>
      <option value="Educación" <?= (isset($post['category']) && $post['category'] === 'Educación') ? 'selected' : '' ?>>Educación</option>
      <option value="Cultura" <?= (isset($post['category']) && $post['category'] === 'Cultura') ? 'selected' : '' ?>>Cultura</option>
    </select>
  </div>

  <div>
    <label class="block mb-1 font-medium">Resumen</label>
    <textarea name="excerpt" class="w-full border border-gray-300 rounded p-2" required><?= esc($post['excerpt'] ?? '') ?></textarea>
  </div>

  <div>
    <label class="block mb-1 font-medium">Contenido</label>
    <textarea name="content" class="w-full border border-gray-300 rounded p-2" rows="8" required><?= esc($post['content'] ?? '') ?></textarea>
  </div>

  <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
    <?= $buttonText ?? 'Guardar' ?>
  </button>

</form>
