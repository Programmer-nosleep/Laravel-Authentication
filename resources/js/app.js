import './bootstrap';

// Actived from Dashboard menu
const toggle = document.getElementById('sidebarToggle');
const sidebar = document.getElementById('sidebar');
const content = document.getElementById('main-content');

toggle?.addEventListener('click', () => {
  sidebar.classList.toggle('-translate-x-full');
  content.classList.toggle('ml-0');
  content.classList.toggle('ml-64');
});

// Actived from menu user profile
document.addEventListener("DOMContentLoaded", function () {
  const button = document.getElementById("user-menu-button");
  const menu = document.getElementById("dropdown-menu");

  if (button && menu) {
    button.addEventListener("click", function (e) {
      e.stopPropagation(); 
      menu.classList.toggle("hidden");
    });

    document.addEventListener("click", function (event) {
      if (!button.contains(event.target) && !menu.contains(event.target)) {
        menu.classList.add("hidden");
      }
    });
  }
});

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