@props(['action' => '#', 'confirm' => 'Delete?'])

<form action="{{ $action }}" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger fs-7" type="submit"
        onclick="return confirm('{{ $confirm }}')">
        <i class="fa-solid fa-trash"></i>
    </button>
</form>
