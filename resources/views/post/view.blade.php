<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    {{-- <link rel="stylesheet" href="{{ asset('css/view.css') }}" class=""> --}}

</head>

<body>
    @extends('layouts.app')
    @section('content')
        <hr>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2" id="side">
                    <nav class="nav flex-column text-center mt-4">
                        @include('layouts.sidebar')
                    </nav>
                </div>

                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <p class=text-center>{{ $post->title }}</p>
                        </div>
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('images/' . $post->image) }}"
                                        class="img-fluid rounded-start img-responsive" alt="image not  support">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Content: {{ $post->content }}</h5>
                                        <p class="card-text">Description: {{ $post->description }}</p>
                                        <p class="card-text"><small class="text-muted">Last updated
                                                {{ $post->updated_at }}
                                                ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

</body>

</html>
