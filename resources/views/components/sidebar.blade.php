<div id="sidebar" class="w-64 bg-white border-r border-gray-200 fixed inset-y-0 left-0 z-30 md:translate-x-0 transform -translate-x-full transition-transform duration-300">
  <div class="flex flex-col h-full justify-between">
    <!-- Logo and Title -->
    <div>
      <div class="flex items-center space-x-2 px-5.5 py-5.5">
        <div class="">
          {{-- <img src="{{ asset('assets/img/wallpaper3.png') }}" alt="" class="w-18 h-auto object-contain"> --}}
          <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="h-7 w-full" />
        </div>
        <h1 class="text-xl font-bold text-gray-700 font-sans">{{ $title_sidebar }}</h1>
      </div>

      <!-- Menu Section -->
      <div class="px-6 text-xs uppercase text-gray-500 tracking-wider mt-4 mb-2">Menu</div>
      <ul class="px-4 space-y-1">
        <li>
          <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-2 px-3 py-2 rounded-lg bg-gray-100 text-sm font-medium text-gray-900">
            <i class="fas fa-house text-gray-700 w-5 h-5"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="{{ route('admin.users') }}" class="flex items-center space-x-2 px-3 py-2 rounded-lg hover:bg-gray-100 text-sm font-medium text-gray-700">
            <i class="fas fa-users text-gray-700 w-5 h-5"></i>
            <span>Users</span>
          </a>
        </li>
        <li>
          <a href="{{ route('admin.schedule') }}" class="flex items-center space-x-2 px-3 py-2 rounded-lg hover:bg-gray-100 text-sm font-medium text-gray-700">
            <i class="fas fa-calendar-alt text-gray-700 w-5 h-5"></i>
            <span>Schedules</span>
          </a>
        </li>
        <li>
          <a href="#" class="flex items-center space-x-2 px-3 py-2 rounded-lg hover:bg-gray-100 text-sm font-medium text-gray-700">
            <i class="fas fa-tasks text-gray-700 w-5 h-5"></i>
            <span>Tasks</span>
          </a>
        </li>
        <li>
          <a href="#" class="flex items-center space-x-2 px-3 py-2 rounded-lg hover:bg-gray-100 text-sm font-medium text-gray-700">
            <i class="fas fa-chart-line text-gray-700 w-5 h-5"></i>
            <span>Reports</span>
          </a>
        </li>
      </ul>
    </div>

    <!-- Bottom Buttons -->
    <div class="px-4 py-4 space-y-2 border-t border-gray-200">
      <a href="#" class="flex items-center space-x-2 px-3 py-2 rounded-lg hover:bg-gray-100 text-sm font-medium text-gray-700">
        <i class="fas fa-comments text-gray-700 w-5 h-5"></i>
        <span>Chat</span>
      </a>
      <a href="#" class="flex items-center space-x-2 px-3 py-2 rounded-lg hover:bg-gray-100 text-sm font-medium text-gray-700">
        <i class="fas fa-life-ring text-gray-700 w-5 h-5"></i>
        <span>Support</span>
      </a>
    </div>
  </div>
</div>
