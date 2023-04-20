<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>To-Do List</title>
    <!-- Tambahkan link ke file CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Masukkan link ke file CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">  </head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!--icon page-->
    <link rel="icon" href="img/to-do-list.png">
  <body>
    <div class="container mt-5">
      <!-- Tampilkan konten dari setiap halaman di sini -->
      @yield('content')
      <!-- Tambahkan link ke file JavaScript -->
      <script src="{{ asset('js/app.js') }}"></script>
      <!-- Masukkan link ke file JavaScript Bootstrap -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>    </div>
  </body>
</html>
