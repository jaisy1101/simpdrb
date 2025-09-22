<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  @vite('resources/css/app.css')
</head>
<script src="//unpkg.com/alpinejs" defer></script>
<body class="bg-white text-gray-800">
  <div class="min-h-screen">
    @yield('content')
  </div>
</body>
</html>
