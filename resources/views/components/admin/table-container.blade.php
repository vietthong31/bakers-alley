@props(['tableName' => 'Table'])

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        {{ $tableName }}
    </div>

    <div class="card-body">
        <table id="datatablesSimple">
            {{ $slot }}
        </table>
    </div>

</div>
