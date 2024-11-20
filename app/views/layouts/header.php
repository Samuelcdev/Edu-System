<div class="navbar text-black max-w-[1200px] mx-auto my-3 rounded-xl shadow-xl sticky top-0 z-50 backdrop-blur-md bg-white/70">
  <div class="navbar-start">
    <div class="dropdown">
      <button tabindex="0" role="button" class="btn btn-ghost lg:hidden text-black">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-6 w-6"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
          aria-label="Abrir menú">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M4 6h16M4 12h8m-8 6h16" />
        </svg>
      </button>
      <ul
        tabindex="0"
        class="menu menu-sm dropdown-content bg-white text-gray-800 rounded-xl z-10 mt-3 w-52 p-3 shadow-lg">
        <li><a href="#" class="hover:bg-indigo-100 rounded-lg">Inicio</a></li>
        <li tabindex="0">
          <a class="justify-between hover:bg-indigo-100 rounded-lg">
            Recursos
            <svg
              class="h-4 w-4 fill-current"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20">
              <path d="M5.5 7l4.5 4.5L14.5 7H5.5z" />
            </svg>
          </a>
          <ul class="p-2 bg-gray-100 rounded-lg shadow-md">
            <li><a href="#" class="hover:bg-gray-200 rounded-lg">Submenu 1</a></li>
            <li><a href="#" class="hover:bg-gray-200 rounded-lg">Submenu 2</a></li>
          </ul>
        </li>
        <li><a href="#" class="hover:bg-indigo-100 rounded-lg">Contacto</a></li>
      </ul>
    </div>
    <a href="#" class="btn btn-ghost text-2xl font-extrabold tracking-widest text-black">
      Edu-System
    </a>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      <li><a href="#" class="hover:bg-indigo-500/50 rounded-lg px-3 py-2 transition">Inicio</a></li>
      <li tabindex="0">
        <details>
          <summary class="hover:bg-indigo-500/50 rounded-lg px-3 py-2 transition">Recursos</summary>
          <ul class="p-2 bg-gray-100 text-gray-800 rounded-lg shadow-md">
            <li><a href="#" class="hover:bg-gray-200 rounded-lg">Submenu 1</a></li>
            <li><a href="#" class="hover:bg-gray-200 rounded-lg">Submenu 2</a></li>
          </ul>
        </details>
      </li>
      <li><a href="#" class="hover:bg-indigo-500/50 rounded-lg px-3 py-2 transition">Contacto</a></li>
    </ul>
  </div>
  <div class="navbar-end gap-3">
    <a href="#" class="btn bg-blue-500 text-white hover:bg-blue-600 transition-all transform hover:scale-105">
      Registrarse
    </a>
    <a href="#" class="btn btn-outline bg-blue-500 text-white hover:bg-blue-600 hover:text-white transition-all transform hover:scale-105">
      Iniciar Sesión
    </a>
  </div>
</div>

