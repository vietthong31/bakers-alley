<x-admin.layout title="Edit slide" h1="Edit slide">
    <x-slot name="breadcrumb">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item">Slides</li>
            <li class="breadcrumb-item active">Editing slide</li>
        </ol>
    </x-slot>

    <x-admin.edit-form :action="route('slide.update', ['slide' => $slide->id])">
        <x-admin.input type='number' name='id' id='id' label='ID' :value="$slide->id" disable="true" />
        <x-admin.input type='text' name='link' id='link' label='Link' :value="$slide->link"
            placeholder="http(s)://www.website.com" />
        <x-admin.input type='file' name='image' id='image' label='Image' :value="$slide->image" />
    </x-admin.edit-form>


</x-admin.layout>
