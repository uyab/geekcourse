@if(session()->has('success'))
    <div class="alert alert-success">{{ session()->get('success') }}</div>
@endif

@if(session()->has('warning'))
    <div class="alert alert-warning">{{ session()->get('warning') }}</div>
@endif

@if($errors->count() > 0)
    <div class="alert alert-danger">
        @foreach($errors->messages() as $messages)
            @foreach($messages as $error)
                <p>{{ $error }}</p>
            @endforeach
        @endforeach
    </div>
@endif
