<!-- app/Views/layout.php -->
<head>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= esc($title ?? 'Mini Blog') ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

  <!-- Header -->
  <header class="bg-[#1E1E1E] shadow p-4 mb-6 sticky lg:top-5 top-0 lg:w-[60%] mx-auto lg:rounded-2xl ">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="text-2xl font-bold text-white"><a href="/">Mini Blog</a></h1>
      <a href="/posts/create" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Nueva Entrada</a>    
    </div>
  </header>

  <!-- Contenido -->
  <main class="container mx-auto px-4">
    <?= $this->renderSection('content') ?>
  </main>

  <!-- Footer -->
  <footer class="mt-10 bg-white text-center text-sm py-4 shadow">
    &copy; <?= date('Y') ?> Mini Blog desarrollado para Prueba Técnica
  </footer>

</body>
</html>
