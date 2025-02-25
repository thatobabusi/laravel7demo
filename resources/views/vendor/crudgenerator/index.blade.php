@extends('system_layouts.backend.app_layout_backend_developer')

@section('content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Generator</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div id="app">
        {{--@include('crudgenerator::errors')--}}
        <?php /*dd($presets); */?>
        <crud-generator dataraw='{ "presets": {{ isset($presets) ? json_encode($presets) : '[]' }}, "csrf": "{{ csrf_token() }}" }'></crud-generator>
    </div>

    @if (session('res'))
        <div class="alert alert-success">
            {!! session('res') !!}
        </div>
    @endif

    <script src="{{ asset('vendor/crudgenerator/app.js') }}"></script>
</div>
</body>
</html>
@endsection
