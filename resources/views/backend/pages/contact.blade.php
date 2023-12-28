@extends('backend.layouts.app')

@section('content')
    <div class="flex flex-col md:flex-row gap-4">
        {{-- label --}}
        <div class="w-full md:w-2/5">
            <livewire:label />
        </div>
        {{-- Contact --}}
        <div class="w-full">
            <livewire:contact />
        </div>
    </div>
@endsection
