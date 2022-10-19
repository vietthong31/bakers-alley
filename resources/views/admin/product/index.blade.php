<x-admin.layout title="Products" h1="Products">

    <x-slot name="breadcrumb">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item active">Products</li>
        </ol>
    </x-slot>

    <x-admin.table-container tableName="Products">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Type</td>
                <td>Description</td>
                <td>Unit price</td>
                <td>Promotion price</td>
                <td>Image</td>
                <td>Unit</td>
                <td>New</td>
                <td colspan="2"></td>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->typeProduct->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->unit_price }}</td>
                    <td>{{ $product->promotion_price }}</td>
                    <td>{{ $product->image }}</td>
                    <td>{{ $product->unit }}</td>
                    <td>{{ $product->new }}</td>
                    <td>
                        <x-admin.edit-link href="{{ route('product.edit', ['product' => $product->id]) }}" />
                    </td>
                    <td>
                        <x-admin.delete-form action="{{ route('product.destroy', ['product' => $product->id]) }}"
                            confirm="Delete {{ $product->name }}?" />
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
