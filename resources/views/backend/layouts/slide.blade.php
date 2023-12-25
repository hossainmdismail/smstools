    <!-- Barra lateral -->
    <div id="sideNav" class="lg:block hidden z-50 bg-white w-64 h-screen fixed rounded-none border-none shadow-md">
        <!-- Items -->
        <div class="p-4 space-y-4">
            <!-- Inicio -->
            <a href="#" aria-label="dashboard"
                class="relative px-4 py-3 flex items-center space-x-4 rounded-lg text-white bg-gradient-to-r from-sky-600 to-cyan-400">
                <i class="fas fa-home text-white"></i>
                <span class="-mr-1 font-medium">Home</span>
            </a>

            <a href="{{ route('inbox') }}"
                class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-500 group hover:text-white hover:bg-gradient-to-r from-sky-600 hover:to-cyan-400">
                <i class="fas fa-wallet"></i>
                <span>Inbox</span>
            </a>
            <a href="#"
                class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-500 group hover:text-white hover:bg-gradient-to-r from-sky-600 hover:to-cyan-400">
                <i class="fas fa-exchange-alt"></i>
                <span>Transacciones</span>
            </a>
            <a href="#"
                class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-500 group hover:text-white hover:bg-gradient-to-r from-sky-600 hover:to-cyan-400">
                <i class="fas fa-user"></i>
                <span>Add Number</span>
            </a>
            <a href="#"
                class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-500 group hover:text-white hover:bg-gradient-to-r from-sky-600 hover:to-cyan-400">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
        </div>
    </div>
