<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  @include('components.navbar')
  <div class="-z-10">
    @include('airbases.page.map')
  </div>
  <script src="{{ asset('js/map.js') }}"></script>
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
  <script>
    let map;

    window.onload = function () {
      const overlay = document.getElementById('overlay');
      if (overlay) {
        setTimeout(() => {
          overlay.classList.add('hidden');
          setTimeout(() => overlay.remove(), 300);
        }, 1000);

        overlay.addEventListener('click', () => {
          overlay.classList.add('hidden');
          setTimeout(() => overlay.remove(), 1000);
        });
      }

      const userGreeting = document.getElementById('userGreeting');
      const welcomeDisplayed = window.welcomeDisplayed;

      if (welcomeDisplayed && userGreeting) {
        setTimeout(() => {
          userGreeting.classList.add('fade');
          setTimeout(() => userGreeting.remove(), 850);
        }, 2000);
      }

      // Inisialisasi Leaflet
      map = L.map('map').setView([-6.200000, 106.816666], 10);

      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
      }).addTo(map);

      // Contoh marker statis
      L.marker([-6.266610, 106.891243])
        .addTo(map)
        .bindPopup('<strong>Lanud Halim Perdanakusuma</strong><br>Jakarta Timur')
        .openPopup();
    };
  </script>
  <script>
    window.airbaseData = @json($airbases);
    window.welcomeDisplayed = @json(session('welcome_displayed', false));
  </script>
</body>
</html>