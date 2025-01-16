<div class="row">
    <div class="w-75">
        @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
    </div>
</div>