<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Halaman Contoh</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <style>
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }
    main {
      flex: 1;
    }
  </style>
</head>
<body>

  <!-- Konten utama halaman -->
  <main class="container my-5">
    <h1></h1>
    <p>.</p>
  </main>

 <!-- Footer -->
<footer class="bg-dark text-white text-center py-3" style="width: 100%;">
  <p class="mb-0">&copy; <?= date('Y'); ?>. All rights reserved.</p>
</footer>



  <!-- Script JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/myscript.js"></script>
</body>
</html>
