{{-- Editing Form component --}}

@props(['action' => '#'])

<form action="{{ $action }}" method="POST" class="mb-2"
    enctype="multipart/form-data">
    @csrf

    {{ $slot }}

    <div class="d-flex align-items-center justify-content-end mt-4 mb-0">
        <input type="submit" value="Create" class="btn btn-primary">
    </div>
</form>
