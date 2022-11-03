<x-admin.layout title="Create product types" h1="Create product types">

    <x-slot name="breadcrumb">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item active">New</li>
        </ol>
    </x-slot>

    <x-admin.add-form :action="route('type.store')">
        <x-admin.input type='text' name='name' id='name' label='Name' />
        <div class="mb-3">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="w-100 h-100 form-control"></textarea>
        </div>
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
