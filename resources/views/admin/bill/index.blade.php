<x-admin.layout title="Bills" h1="Bills">

    <x-slot name="breadcrumb">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item active">Bills</li>
        </ol>
    </x-slot>

    <x-admin.table-container tableName="Bills">
        <thead>
            <tr>
                <td>ID</td>
                <td>Customer</td>
                <td>Ordered</td>
                <td>Total</td>
                <td>Payment</td>
                <td>Status</td>
                <td colspan="2"></td>
            </tr>
        </thead>
        <tbody>
            @foreach ($bills as $bill)
                <tr>
                    <td>{{ $bill->id }}</td>
                    <td>{{ $bill->id_customer }}</td>
                    <td>{{ $bill->date_order }}</td>
                    <td>{{ $bill->total }}</td>
                    <td>{{ $bill->payment }}</td>
                    <td>{{ $bill->status }}</td>
                    <td>
                        <x-admin.edit-link href="{{ route('bill.edit', ['bill' => $bill->id]) }}" />
                    </td>
                    <td>
                        <x-admin.delete-form action="{{ route('bill.destroy', ['bill' => $bill->id]) }}"
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
