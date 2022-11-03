<x-admin.layout title="Create slide" h1="Create slide">

    <x-slot name="breadcrumb">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item active">New</li>
        </ol>
    </x-slot>

    <x-admin.add-form :action="route('slide.store')">
        <x-admin.input type='text' name='link' id='link' label='Link' />
        <x-admin.input type='file' name='image' id='image' label='Image' />
    </x-admin.add-form>

    @if (session()->has('success'))
        <div id="noti" x-data="{ show: true }"
            x-init="setTimeout(() => show = false, 4000)"
            x-show="show" x-transition>
            <p>{{ session('success') }}</p>
        </div>
    @endif
</x-admin.layout>
