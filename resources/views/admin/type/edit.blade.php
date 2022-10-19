<x-admin.layout title="Edit product type" h1="Edit product type">
    <x-slot name="breadcrumb">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item">Product type</li>
            <li class="breadcrumb-item active">Editing</li>
        </ol>
    </x-slot>

    <x-admin.edit-form :action="route('type.update', ['type' => $type->id])">
        <x-admin.input type='number' name='id' id='id' label='ID' :value="$type->id" disable="true" />
        <x-admin.input type='text' name='name' id='name' label='Name' :value="$type->name" />
        <x-admin.input type='file' name='image' id='image' label='Image' :value="$type->image" />
    </x-admin.edit-form>

</x-admin.layout>
