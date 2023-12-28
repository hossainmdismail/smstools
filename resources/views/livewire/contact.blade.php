<div class="border rounded-xl p-4">
    {{-- Model Add --}}
    <div
        class="{{ $model ? '' : 'hidden' }} absolute flex justify-center w-full h-screen bg-[#00000045] top-0 left-0 z-50 p-10">
        <div class="mt-10 md:mt-32 bg-white w-full md:w-2/5 h-fit p-6 rounded-xl">
            <div class="pb-6 text-end cursor-pointer" wire:click="hideHande">X</div>
            <form wire:submit="submit" class="flex flex-col gap-4">

                {{-- Label --}}
                <div class="relative mb-4">
                    <select wire:model="label"
                        class="bg-gray-50 border border-gray-300 @error('label') border-red-600 @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 ">
                        <option value="">Select Labels</option>
                        @forelse ($lists as $list)
                            <option value="{{ $list->id }}">{{ $list->name }}</option>
                        @empty
                        @endforelse
                    </select>
                </div>

                {{-- Name --}}
                <div class="relative mb-4">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                        </svg>
                    </div>
                    <input type="text" id="email-address-icon" wire:model="name"
                        class="bg-gray-50 border border-gray-300 @error('name') !border-red-600 @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5"
                        placeholder="Elon Mask">
                </div>

                {{-- Number --}}
                <div class=" flex items-center  mb-3">
                    <button id="dropdown-phone-button" data-dropdown-toggle="dropdown-phone"
                        class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100"
                        type="button">
                        <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                        <svg class="mr-1" width="20" height="20" viewBox="0 0 36 36"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            aria-hidden="true" role="img" class="iconify iconify--twemoji"
                            preserveAspectRatio="xMidYMid meet">
                            <path fill="#006A4D"
                                d="M36 27a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V9a4 4 0 0 1 4-4h28a4 4 0 0 1 4 4v18z"></path>
                            <circle fill="#F42A41" cx="16" cy="17.5" r="7"></circle>
                        </svg>
                        +88
                    </button>
                    <div class="relative w-full">
                        <input type="phone" id="phone-input" wire:model="number"
                            class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-0 border border-gray-300 @error('number') !border-red-600 @enderror focus:ring-blue-500 focus:border-blue-500 "
                            placeholder="016-000-0000">
                    </div>
                </div>

                {{-- Email --}}
                <div class="relative mb-4 w-full">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                            <path
                                d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                            <path
                                d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                        </svg>
                    </div>
                    <input type="text" id="email-address-icon" wire:model="email"
                        class="bg-gray-50 border border-gray-300 @error('email') !border-red-600 @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5"
                        placeholder="name@flowbite.com">
                </div>

                <button type="submit"
                    class="flex items-center justify-center text-white bg-gray-800 hover:bg-gray-900 font-medium rounded-xl px-5 py-[0.6rem] h-fit text-center ">
                    <div wire:loading>
                        <svg aria-hidden="true" role="status"
                            class="inline w-4 h-4 mr-1 text-gray-200 animate-spin dark:text-gray-600"
                            viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                fill="currentColor" />
                            <path
                                d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                fill="#1C64F2" />
                        </svg>
                    </div>
                    <span wire:loading.remove>Add Contact</span>
                </button>
            </form>
        </div>
    </div>

    {{-- Model Edit --}}
    <div
        class="{{ $edit ? '' : 'hidden' }} absolute flex justify-center w-full h-screen bg-[#00000045] top-0 left-0 z-50 p-10">
        <div class="mt-10 md:mt-32 bg-white w-full md:w-2/5 h-fit p-6 rounded-xl">
            <div class="pb-6 text-end cursor-pointer" wire:click="editHande">X</div>
            <form wire:submit.prevent="update" class="flex flex-col gap-4">

                <input type="hidden" wire:model="contactid">
                {{-- Label --}}
                <div class="relative mb-4">
                    <select wire:model="label"
                        class="bg-gray-50 border border-gray-300 @error('label') border-red-600 @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 ">
                        <option value="">Select Labels</option>
                        @forelse ($lists as $list)
                            <option value="{{ $list->id }}">{{ $list->name }}</option>
                        @empty
                        @endforelse
                    </select>
                </div>

                {{-- Name --}}
                <div class="relative mb-4">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                        </svg>
                    </div>
                    <input type="text" id="email-address-icon" wire:model="name"
                        class="bg-gray-50 border border-gray-300 @error('name') !border-red-600 @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5"
                        placeholder="Elon Mask">
                </div>

                {{-- Number --}}
                <div class=" flex items-center  mb-3">
                    <button id="dropdown-phone-button" data-dropdown-toggle="dropdown-phone"
                        class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100"
                        type="button">
                        <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                        <svg class="mr-1" width="20" height="20" viewBox="0 0 36 36"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            aria-hidden="true" role="img" class="iconify iconify--twemoji"
                            preserveAspectRatio="xMidYMid meet">
                            <path fill="#006A4D"
                                d="M36 27a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V9a4 4 0 0 1 4-4h28a4 4 0 0 1 4 4v18z"></path>
                            <circle fill="#F42A41" cx="16" cy="17.5" r="7"></circle>
                        </svg>
                        +88
                    </button>
                    <div class="relative w-full">
                        <input type="phone" id="phone-input" wire:model="number"
                            class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-0 border border-gray-300 @error('number') !border-red-600 @enderror focus:ring-blue-500 focus:border-blue-500 "
                            placeholder="016-000-0000">
                    </div>
                </div>

                {{-- Email --}}
                <div class="relative mb-4 w-full">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                            <path
                                d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                            <path
                                d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                        </svg>
                    </div>
                    <input type="text" id="email-address-icon" wire:model="email"
                        class="bg-gray-50 border border-gray-300 @error('email') !border-red-600 @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5"
                        placeholder="name@flowbite.com">
                </div>

                <button type="submit"
                    class="flex items-center justify-center text-white bg-gray-800 hover:bg-gray-900 font-medium rounded-xl px-5 py-[0.6rem] h-fit text-center ">
                    <div wire:loading>
                        <svg aria-hidden="true" role="status"
                            class="inline w-4 h-4 mr-1 text-gray-200 animate-spin dark:text-gray-600"
                            viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                fill="currentColor" />
                            <path
                                d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                fill="#1C64F2" />
                        </svg>
                    </div>
                    <span wire:loading.remove>Update Contact</span>
                </button>
            </form>
        </div>
    </div>

    {{-- Model Edit --}}
    <div
        class="{{ $delete ? '' : 'hidden' }} absolute flex justify-center w-full h-screen bg-[#00000045] top-0 left-0 z-50 p-10">
        <div class="mt-10 md:mt-32 bg-white w-full md:w-2/5 h-fit p-6 rounded-xl">
            <div class="pb-6 text-xl font-semibold">Are you sure you want to delete this contact?</div>
            <hr class="mb-5">
            <form wire:submit.prevent="delete" class="flex gap-4">

                <input type="hidden" wire:model="contactid">
                <button type="submit" wire:click="deleteHande"
                    class="w-full justify-center border hover:text-white hover:bg-gray-900 font-medium rounded-xl px-5 py-[0.6rem] h-fit text-center ">
                    <span>Cancel</span>
                </button>

                <button type="submit" wire:click="remove"
                    class="w-full justify-center text-white bg-[#dc3741] hover:bg-[#e9303b] font-medium rounded-xl px-5 py-[0.6rem] h-fit text-center ">
                    <span>Delete</span>
                </button>
            </form>
        </div>
    </div>


    {{-- Header --}}
    <div>
        @if (session()->has('succ'))
            <span class="ml-2 text-xs text-teal-700">{{ session('succ') }}</span>
        @endif
        <div class="flex flex-col sm:flex-row gap-4">

            <div class="relative mb-0 sm:mb-4 w-full">
                <select type="text" wire:model.live="category" id="email-address-icon"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 ">
                    <option value="">Select Labels</option>
                    @forelse ($lists as $list)
                        <option wire:model="label" value="{{ $list->id }}">{{ $list->name }}</option>
                    @empty
                    @endforelse
                </select>
            </div>

            <div class="relative mb-0 sm:mb-4 w-full">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                    </svg>
                </div>
                <input type="text" id="email-address-icon"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 "
                    placeholder="Search ..." wire:model.live="search">
            </div>

            <div class="flex justify-end gap-2 mb-4">
                <button type="button"
                    class="flex items-center text-black bg-gray-300 hover:bg-gray-200 font-medium rounded-xl px-5 py-[0.6rem] h-fit text-center "
                    wire:click="clearFilter">
                    Clear
                </button>
                <button type="button"
                    class="items-center text-white bg-gray-800 hover:bg-gray-900 font-medium rounded-xl px-5 py-[0.6rem] h-fit text-center "
                    wire:click="hideHande">
                    +Add
                </button>
            </div>
        </div>
    </div>

    <hr>

    {{-- Body --}}
    <div class="overflow-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <caption
                class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Contact List
            </caption>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        SL
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Number
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    {{-- <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th> --}}
                </tr>
            </thead>
            <tbody>
                @forelse ($contacts as $key => $contact)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="text-center px-2 py-2 md:px-3 md:py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $key + 1 }}
                        </th>
                        <td class="px-2 py-2 md:px-3 md:py-3">{{ $contact->name }}</td>
                        <td class="px-2 py-2 md:px-3 md:py-3">
                            {{ $contact->number }}
                        </td>
                        <td class="px-2 py-2 md:px-3 md:py-3">
                            {{ $contact->email }}
                        </td>
                        <td class="flex gap-2 pr-2 py-2 md:pr-3 md:py-3 text-right">
                            <a wire:click="loadContact({{ $contact->id }})"
                                class="p-1 w-7 bg-gray-100 hover:bg-gray-200 rounded-md cursor-pointer">
                                <img src="{{ asset('logos/edit.svg') }}" alt="" srcset="">
                            </a>
                            <a wire:click="loadDelete({{ $contact->id }})"
                                class="p-1 w-7 bg-gray-100
                                hover:bg-gray-200 rounded-md cursor-pointer">
                                <img src="{{ asset('logos/delete-1.svg') }}" alt="" srcset="">
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>No Data Found</tr>
                @endforelse
            </tbody>
        </table>
        <div class="mt-4">
            <span>{{ $contacts->links('livewire::custom') }}</span>
        </div>
    </div>
</div>


{{-- between.items-center.px-9 {
    position: fixed;
    width: 100%;
    top: 0;
    left: 0;
    z-index: 100;
    background: white;
} --}}
