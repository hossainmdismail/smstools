<?php
$path = url()->current();
?>
<style>
    /* bg-gradient-to-r from-sky-600 to-cyan-400 */
</style>


<!-- Barra lateral -->
<div id="sideNav" class="lg:block hidden z-50 bg-white w-64 h-screen fixed rounded-none border-none shadow-md">
    <!-- Items -->
    <div class="p-4 space-y-4">
        <!-- Inicio -->
        <a href="{{ route('home') }}"
            class="{{ route('home') == $path ? 'bg-gradient-to-r from-sky-600 to-cyan-400 text-white' : '' }} px-4 py-3 flex items-center space-x-4 rounded-md text-gray-500 group hover:text-white hover:bg-gradient-to-r from-sky-600 hover:to-cyan-400">
            <i class="fas fa-home"></i>
            <span class="-mr-1 font-medium">Home</span>
        </a>

        <a href="{{ route('inbox') }}"
            class="{{ route('inbox') == $path ? 'bg-gradient-to-r from-sky-600 to-cyan-400 text-white' : '' }} px-4 py-3 flex items-center space-x-4 rounded-md text-gray-500 group hover:text-white hover:bg-gradient-to-r from-sky-600 hover:to-cyan-400">
            <i class="fas fa-wallet"></i>
            <span>Inbox</span>
        </a>
        {{-- <a href="#"
                class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-500 group hover:text-white hover:bg-gradient-to-r from-sky-600 hover:to-cyan-400">
                <i class="fas fa-exchange-alt"></i>
                <span>Contact</span>
            </a> --}}
        <a href="{{ route('contact') }}"
            class="{{ route('contact') == $path ? 'bg-gradient-to-r from-sky-600 to-cyan-400 text-white' : '' }} px-4 py-3 flex items-center space-x-4 rounded-md text-gray-500 group hover:text-white hover:bg-gradient-to-r from-sky-600 hover:to-cyan-400">
            <i class="fas fa-user"></i>
            <span>Contact</span>
        </a>
        <a href="#"
            class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-500 group hover:text-white hover:bg-gradient-to-r from-sky-600 hover:to-cyan-400">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
    </div>
</div>
