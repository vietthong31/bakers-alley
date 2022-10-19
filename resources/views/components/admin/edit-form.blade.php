{{-- Editing Form component --}}

@props(['action' => '#'])

<form action="{{ $action }}" method="POST" class="mb-2"
    enctype="multipart/form-data">
    @method('PUT')
    @csrf

    {{ $slot }}

    <div class="d-flex align-items-center justify-content-end mt-4 mb-0">
        <input type="submit" value="Update" class="btn btn-primary">
    </div>
</form>
