<section class="min-h-screen bg-gradient-to-br from-indigo-100 via-purple-100 to-pink-100 flex items-center justify-center">
  <div class="bg-white shadow-2xl rounded-xl p-10 max-w-lg w-full animate-fade-in-down">
    <h1 class="text-4xl font-extrabold text-gradient bg-clip-text text-transparent bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-center mb-8">
      ¡Bienvenido!
    </h1>
    <form action="#" method="POST" class="space-y-8">
      <div class="form-control">
        <label for="email" class="label">
          <span class="label-text text-lg font-medium">Correo Electrónico</span>
        </label>
        <input type="email" id="email" name="email" placeholder="correo@ejemplo.com" class="input input-bordered input-primary w-full text-gray-700 focus:outline-none" required />
      </div>
      <div class="form-control">
        <label for="password" class="label">
          <span class="label-text text-lg font-medium">Contraseña</span>
        </label>
        <input type="password" id="password" name="password" placeholder="••••••••" class="input input-bordered input-primary w-full text-gray-700 focus:outline-none" required />
      </div>
      <button
        type="submit"
        class="btn btn-primary btn-block font-bold py-3 rounded-lg shadow-md hover:shadow-lg transition-all hover:scale-105">
        Iniciar Sesión
      </button>
    </form>
    <div class="text-center mt-8 space-y-4">
      <p class="text-md text-gray-600">
        ¿No tienes una cuenta?
        <a href="#" class="text-primary font-medium hover:underline">Regístrate aquí</a>
      </p>
      <a href="#" class="text-primary text-md font-medium hover:underline">¿Olvidaste tu contraseña?</a>
    </div>
  </div>
</section>

<style>
  @keyframes fade-in-down {
    0% {
      opacity: 0;
      transform: translateY(-20px);
    }

    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .animate-fade-in-down {
    animation: fade-in-down 0.8s ease-out;
  }

  .text-gradient {
    background-image: linear-gradient(to right, #4f46e5, #9333ea, #ec4899);
  }
</style>