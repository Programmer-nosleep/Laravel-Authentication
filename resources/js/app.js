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

// 
document.addEventListener("DOMContentLoaded", function () {

});