@if ($errors->any())
    <div class="alert alert-danger text-white">
        @foreach ($errors->all() as $error)
            <br/>
            <span class="text-white font-weight-bold">*</span> {{ $error }}
        @endforeach
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('warning'))
    <div class="alert alert-warning">
        {{ session('warning') }}
    </div>
@endif
