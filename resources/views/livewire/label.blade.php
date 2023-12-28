<div class="border rounded-xl p-4">
    <div>
        @if (session()->has('succ'))
            <span class="ml-2 text-xs text-teal-700">{{ session('succ') }}</span>
        @endif
        <form wire:submit="label" class="flex gap-4">
            <div class="relative mb-4 w-full">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#1F2937" width="20" height="20"
                        viewBox="0 0 24 24">
                        <path
                            d="M17.63 5.84C17.27 5.33 16.67 5 16 5L5 5.01C3.9 5.01 3 5.9 3 7v10c0 1.1.9 1.99 2 1.99L16 19c.67 0 1.27-.33 1.63-.84L22 12l-4.37-6.16z" />
                    </svg>
                </div>
                <input type="text" wire:model="name" id="email-address-icon"
                    class="bg-gray-50 border border-gray-300 @error('name') border-red-600 @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 "
                    placeholder="Label">
            </div>
            <button type="submit"
                class="flex items-center text-white bg-gray-800 hover:bg-gray-900 font-medium rounded-xl px-5 py-[0.6rem] h-fit text-center ">
                <div wire:loading>
                    <svg aria-hidden="true" role="status"
                        class="inline w-4 h-4 mr-1 text-gray-200 animate-spin dark:text-gray-600" viewBox="0 0 100 101"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                            fill="currentColor" />
                        <path
                            d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                            fill="#1C64F2" />
                    </svg>
                </div>
                <span wire:loading.remove>Add</span>
            </button>
        </form>
    </div>
    <hr>
    <div class="mt-5">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-3 py-3">Lables</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($lists as $list)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="flex items-center gap-2 px-3 py-3 text-base text-black">
                            <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#1F2937" width="20" height="20"
                                viewBox="0 0 24 24">
                                <path
                                    d="M17.63 5.84C17.27 5.33 16.67 5 16 5L5 5.01C3.9 5.01 3 5.9 3 7v10c0 1.1.9 1.99 2 1.99L16 19c.67 0 1.27-.33 1.63-.84L22 12l-4.37-6.16z" />
                            </svg>
                            {{ $list->name }}
                        </td>
                        <td>0</td>
                    </tr>
                @empty
                    <tr>
                        <td>No Data Found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="mt-4">{{ $lists->links('livewire::custom') }}</div>
    </div>
</div>
