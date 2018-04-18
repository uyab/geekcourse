<h2>Recommended Course</h2>
<div class="row">
    @foreach(range(1,5) as $item)
        @include('courses._card')
    @endforeach
</div>

@push('head')
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href={{ asset('css/fontawesome-stars.css') }}>
@endpush

@push('end')
    <script src={{ asset('js/jquery.barrating.min.js') }}></script>

    <script type="text/javascript">
        $(function() {
            $('.rating').barrating({
                theme: 'fontawesome-stars'
            });
        });
    </script>

@endpush
