<x-admin.layout title="Edit product" h1="Edit product">
    <x-slot name="breadcrumb">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item">Product</li>
            <li class="breadcrumb-item active">Editing product</li>
        </ol>
    </x-slot>

    <x-admin.edit-form :action="route('product.update', ['product' => $product->id])">
        <x-admin.input type='number' name='id' id='id' label='ID' :value="$product->id" disable="true" />
        <div class="mb-3">
            <label for="id">Type</label>
            <select class="form-select" name="id_type" id="id_type" title="Type of product">
                @foreach ($types as $type)
                    <option value="{{ $type->id }}" {{ $type->id == $product->typeProduct->id ? 'selected' : '' }}>
                        {{ $type->name }}
                    </option>
                @endforeach
            </select>
            @error('id_type')
                {{ $message }}
            @enderror
        </div>
        <x-admin.input type='text' name='description' id='description' label="Description" :value="$product->description" />
        <x-admin.input type='number' name='unit_price' id='unitPrice' label="Unit price" :value="old('unit_price') ?? $product->unit_price" />
        <x-admin.input type='number' name='promotion_price' id='promotionPrice' label="Promotion price"
            :value="$product->promotion_price" />
        <x-admin.input type='text' name='unit' id='unit' label="Unit" :value="$product->unit" />

        <div class="mb-3">
            <label for="id">New product?</label>
            <select class="form-select" name="new" id="new" title="Is product new?">
                <option value="1" {{ $product->new == 'new' ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ $product->new == '' ? 'selected' : '' }}>No</option>
            </select>
            @error('new')
                {{ $message }}
            @enderror
        </div>


        <x-admin.input type='file' name='image' id='image' label='Image' />
    </x-admin.edit-form>


</x-admin.layout>
