@props(['message' => null])

@if ($message != null)
    <div class="alert alert-success" role="alert" id='noti'>
        <span>{{ $message }}</span>
    </div>

    <script>
        const div = document.querySelector('#noti');
        setTimeout(() => {
            div.style.display = 'none';
        }, 5000);
    </script>
@endif
