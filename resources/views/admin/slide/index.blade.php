<x-admin.layout title="Slides" h1="Slides">

    <x-slot name="breadcrumb">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item active">Slides</li>
        </ol>
    </x-slot>

    <x-admin.add-link href="{{ route('slide.create') }}" />

    <x-admin.table-container tableName="Slides">
        <thead>
            <tr>
                <td>ID</td>
                <td>Link</td>
                <td>Image</td>
                <td colspan="2"></td>
            </tr>
        </thead>
        <tbody>
            @foreach ($slides as $slide)
                <tr>
                    <td>{{ $slide->id }}</td>
                    <td>{{ $slide->link }}</td>
                    <td>{{ $slide->image }}</td>
                    <td>
                        <x-admin.edit-link href="{{ route('slide.edit', ['slide' => $slide->id]) }}" />
                    </td>
                    <td>
                        <x-admin.delete-form action="{{ route('slide.destroy', ['slide' => $slide->id]) }}"
                            confirm="Delete?" />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </x-admin.table-container>

    @if (session()->has('success'))
        <div id="noti" x-data="{ show: true }"
            x-init="setTimeout(() => show = false, 4000)"
            x-show="show" x-transition>
            <p>{{ session('success') }}</p>
        </div>
    @endif
</x-admin.layout>
