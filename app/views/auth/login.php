<section class="min-h-screen bg-indigo-100 flex items-center justify-center">
  <div class="bg-white shadow-lg rounded-xl p-8 max-w-md w-full">
    <h1 class="text-3xl font-bold text-indigo-700 text-center mb-6">Inicia Sesión</h1>
    <form action="#" method="POST" class="space-y-6">
      <div>
        <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">Correo Electrónico</label>
        <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg text-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent" placeholder="correo@ejemplo.com" required>
      </div>
      <div>
        <label for="password" class="block text-sm font-semibold text-gray-700 mb-1">Contraseña</label>
        <input type="password" id="password" name="password" class="w-full px-4 py-3 border border-gray-300 rounded-lg text-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent" placeholder="••••••••" required>
      </div>
      <button type="submit" class="w-full bg-blue-500 text-white font-bold py-3 rounded-lg hover:bg-blue-600 transition-transform hover:scale-105">Iniciar Sesión</button>
    </form>
    <div class="text-center mt-6">
      <p class="text-sm text-gray-600">
        ¿No tienes una cuenta?
        <a href="#" class="text-indigo-500 hover:underline">Regístrate aquí</a>
      </p>
      <a href="#" class="text-sm text-blue-500 hover:underline block mt-3">¿Olvidaste tu contraseña?</a>
    </div>
  </div>
</section>