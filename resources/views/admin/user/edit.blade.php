<x-admin.layout title="Edit user information" h1="Edit user">
    <x-slot name="breadcrumb">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item">User</li>
            <li class="breadcrumb-item active">Editing</li>
        </ol>
    </x-slot>

    <x-admin.edit-form :action="route('user.update', ['user' => $user->id])">
        <x-admin.input type='number' name='id' id='id' label='ID' :value="$user->id" disable="true" />
        <x-admin.input type='text' name='name' id='name' label='Name' :value="$user->name" />
        <x-admin.input type='email' name='email' id='email' label='Email' :value="$user->email" />
        <x-admin.input type='tel' name='phone' id='phone' label='Phone' :value="$user->phone" />
        <x-admin.input type='text' name='address' id='address' label='Address' :value="$user->address" />
    </x-admin.edit-form>
</x-admin.layout>
