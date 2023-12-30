<nav class="bg-white border-b border-gray-300">
    <div class="flex justify-between items-center px-9">
        <!-- Aumenté el padding aquí para añadir espacio en los lados -->
        <!-- Ícono de Menú -->
        <button id="menuBtn">
            <i class="fa-solid fa-bars-staggered text-cyan-500 text-xl"></i>
        </button>

        <!-- Logo -->
        <div class="ml-1">
            <img src="{{ asset('asset/logo_dsefault.png') }}" alt="logo" class="w-32 p-2">
        </div>

        <!-- Ícono de Notificación y Perfil -->
        <div class="space-x-4">
            <button>
                <i class="fas fa-bell text-cyan-500 text-lg"></i>
            </button>

            <!-- Botón de Perfil -->
            <button>
                <i class="fas fa-user text-cyan-500 text-lg"></i>
            </button>
        </div>
    </div>
</nav>
