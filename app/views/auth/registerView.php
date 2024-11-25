<section class="min-h-screen bg-gradient-to-br from-indigo-100 via-purple-100 to-pink-100 flex items-center justify-center">
  <div class="bg-white shadow-2xl rounded-xl p-10 max-w-3xl w-full animate-fade-in-down">
    <h1 class="text-4xl font-extrabold text-gradient bg-clip-text text-transparent bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-center mb-8">¡Regístrate</h1>
    <form action="/index.php?controller=auth/auth&action=register" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <div class="form-control col-span-1">
        <label for="user_name" class="label">
          <span class="label-text text-lg font-medium">Nombre</span>
        </label>
        <input type="text" id="user_name" name="user_name" placeholder="Tu nombre" class="input input-bordered input-primary w-full text-gray-700 focus:outline-none" required />
      </div>
      <div class="form-control col-span-1">
        <label for="user_lastname" class="label">
          <span class="label-text text-lg font-medium">Apellido</span>
        </label>
        <input type="text" id="user_lastname" name="user_lastname" placeholder="Tu apellido" class="input input-bordered input-primary w-full text-gray-700 focus:outline-none" require />
      </div>
      <div class="form-control col-span-1">
        <label for="user_email" class="label">
          <span class="label-text text-lg font-medium">Correo Electrónico</span>
        </label>
        <input type="email" id="user_email" name="user_email" placeholder="correo@ejemplo.com" class="input input-bordered input-primary w-full text-gray-700 focus:outline-none" required />
      </div>
      <div class="form-control col-span-1">
        <label for="user_document" class="label">
          <span class="label-text text-lg font-medium">Número de Documento</span>
        </label>
        <input type="text" id="user_document" name="user_document" placeholder="123456789" class="input input-bordered input-primary w-full text-gray-700 focus:outline-none" required />
      </div>
      <div class="form-control col-span-1">
        <label for="user_password" class="label">
          <span class="label-text text-lg font-medium">Contraseña</span>
        </label>
        <input type="password" id="user_password" name="user_password" placeholder="••••••••" class="input input-bordered input-primary w-full text-gray-700 focus:outline-none" required />
      </div>
      <div class="form-control col-span-1">
        <label for="confirm_password" class="label">
          <span class="label-text text-lg font-medium">Confirmar Contraseña</span>
        </label>
        <input type="password" id="confirm_password" name="confirm_password" placeholder="••••••••" class="input input-bordered input-primary w-full text-gray-700 focus:outline-none" required />
      </div>
      <div class="form-control col-span-1">
        <label for="user_profile" class="label">
          <span class="label-text text-lg font-medium">Tipo de Perfil</span>
        </label>
        <select id="user_profile" name="user_profile" class="select select-primary w-full" required>
          <option value="student">Estudiante</option>
          <option value="teacher">Profesor</option>
          <option value="admin">Administrador</option>
        </select>
      </div>
      <div class="form-control col-span-1">
        <label for="user_state" class="label">
          <span class="label-text text-lg font-medium">Estado</span>
        </label>
        <select id="user_state" name="user_state" class="select select-primary w-full" required>
          <option value="active">Activo</option>
          <option value="inactive">Inactivo</option>
        </select>
      </div>
      <div class="col-span-full">
        <button type="submit" class="btn btn-primary btn-block font-bold py-3 rounded-lg shadow-md hover:shadow-lg transition-all hover:scale-105 w-full">Registrarse</button>
      </div>
    </form>
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