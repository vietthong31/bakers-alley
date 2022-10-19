<x-admin.layout title="Users" h1="Users">

    <x-slot name="breadcrumb">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item active">Users</li>
        </ol>
    </x-slot>

    <x-admin.table-container tableName="Users">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Password</td>
                <td>Phone</td>
                <td>Address</td>
                <td colspan="2"></td>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ Str::limit($user->password, 16) }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->address }}</td>
                    <td>
                        <x-admin.edit-link href="{{ route('user.edit', ['user' => $user->id]) }}" />
                    </td>
                    <td>
                        <x-admin.delete-form action="{{ route('user.destroy', ['user' => $user->id]) }}"
                            confirm="Delete {{ $user->email }}?" />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </x-admin.table-container>
</x-admin.layout>
