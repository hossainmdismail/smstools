<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    <div class="col-span-0 md:col-span-2 bg-slate-50 rounded-xl shadow-md p-4 h-fit">
        <h2 class="mb-1 text-xl font-semibold text-gray-700">Send</h2>
        <hr class="mb-3">
        <form wire:submit="send">
            @if (session()->has('send'))
                <div class="mb-3">
                    <span>{{ session('send') }}</span>
                </div>
            @endif
            {{-- Number input --}}
            <div class="flex mb-3">
                <span
                    class="inline-flex items-center px-3 text-sm text-gray-900 border border-e-0 border-gray-300 rounded-s-md">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                    </svg>
                </span>
                <input type="text" wire:model="phone"
                    class="rounded-none rounded-e-lg  border border-gray-300 @error('phone') border-red-600 @enderror text-gray-900 focus:outline-none focus:ring-1 focus:ring-cyan-500 block flex-1 min-w-0 w-full text-sm p-2.5 "
                    placeholder="+880">
            </div>

            <div class="mb-3 relative ">
                <textarea wire:model="message"
                    class="w-full p-2 border border-gray-300 @error('message') border-red-600 @enderror rounded-lg focus:outline-none focus:ring-1 focus:ring-cyan-500"
                    rows="10"></textarea>

                <div class="w-full absolute bottom-0 p-4 flex justify-end">
                    <button class="bg-gray-800 px-6 py-2 text-white rounded-xl flex gap-2 hover:bg-gray-900"
                        type="submit"><span class="font-semibold">Send
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24">
                            <path fill="currentcolor" d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"></path>
                        </svg></button>
                </div>
            </div>
        </form>
    </div>

    <div class="bg-slate-50 rounded-xl shadow-md p-4">
        <h2 class="mb-1 text-xl font-semibold text-gray-700">Contact list</h2>
        <hr class="mb-3">
        <form wire:submit="save" class="mb-3 flex">
            <div class="relative w-full">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="text" wire:model.live="number"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-1 @error('number') !border-red-600 @enderror @if (session()->has('succ')) !border-cyan-500 @enderror focus:ring-cyan-300  block w-full ps-10 p-2.5  "
                    placeholder="Search ..." min="10" max="10">
                <div>

                </div>
            </div>
            {{-- <button type="submit"
                class="p-2.5 ms-2 text-sm font-medium text-center text-white bg-gray-800 rounded-lg border  hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300">
                <span>Add</span>
            </button> --}}
        </form>
        <table class="w-full
                text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Number
                    </th>
                    <th scope="col">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($numbers as $number)
                    <tr class="bg-white border-b  hover:bg-gray-50 {{ $number->id == $lastID ? 'bg-cyan-100' : '' }}">
                        <td class="px-6 py-4 ">
                            {{ $number->name }}
                        </td>
                        <td class="px-6 py-4 ">
                            {{ $number->number }}
                        </td>
                        <td>
                            <a wire:click="clipBoard({{ $number->id }})"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">SMS</a>
                        </td>
                    </tr>
                @empty
                    <span class="w-full text-center">No data found</span>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
