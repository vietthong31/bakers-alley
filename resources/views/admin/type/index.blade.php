<x-admin.layout title="Product types" h1="Product types">

    <x-slot name="breadcrumb">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item active">Product types</li>
        </ol>
    </x-slot>

    <x-admin.add-link href="{{ route('type.create') }}" />

    <x-admin.table-container tableName="Types">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Description</td>
                <td>Image</td>
                <td colspan="2"></td>
            </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
                <tr>
                    <td>{{ $type->id }}</td>
                    <td>{{ $type->name }}</td>
                    <td>{{ $type->description }}</td>
                    <td>{{ $type->image }}</td>
                    <td>
                        <x-admin.edit-link href="{{ route('type.edit', ['type' => $type->id]) }}" />
                    </td>
                    <td>
                        <x-admin.delete-form action="{{ route('type.destroy', ['type' => $type->id]) }}"
                            confirm="Delete {{ $type->name }} and all products of this type?" />
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
