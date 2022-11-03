<x-admin.layout title="Edit bill status" h1="Change status">
    <x-slot name="breadcrumb">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item">Bill</li>
            <li class="breadcrumb-item active">Change status</li>
        </ol>
    </x-slot>

    <x-admin.edit-form :action="route('bill.update', ['bill' => $bill->id])">
        <x-admin.input type='number' name='id' id='id' label='ID' :value="$bill->id" disable="true" />
        <div class="mb-3">
            <label for="status">Status</label>
            <select class="form-select" name="status" id="status" title="Status">
                <option value="Chờ lấy hàng">Chờ lấy hàng</option>
                <option value="Hủy">Hủy</option>
                <option value="Đã giao">Đã giao</option>
                <option value="Đã nhận">Đã nhận</option>
            </select>
        </div>
    </x-admin.edit-form>


</x-admin.layout>
