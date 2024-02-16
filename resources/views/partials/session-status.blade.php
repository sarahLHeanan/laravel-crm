@if (session('status'))
    <div class="alert alert-success bg-green-400 text-black text-bold p-4">
        {{ session('status') }}
    </div>
@endif