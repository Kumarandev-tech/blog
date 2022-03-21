<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/style.css') }}" class="">


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
                    <div class="card-header">{{ $message }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (\Session::has('success'))
                            <div class="alert alert-success">
                                <ul>
                                    <li>{!! \Session::get('success') !!}</li>
                                </ul>
                            </div>
                        @endif
                        <div class="row">

                            <div class="col-md-12">
                                @if ($errors->any())
                                    <div class="alert alert-danger"></div>
                                    <strong>While image uplode is </strong>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                <table id="table_id" class="table table-hover table-bordered">
                                    <div class="col-md-12">
                                        <thead>
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Image</th>
                                                <th scope="col">Content</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($posts as $post)
                                                <tr>
                                                    <td>{{ $post->id }}</td>

                                                    <td><img src="{{ asset('images/' . $post->image) }}" width="50px"
                                                            height="50px"></td>
                                                    <td>{{ $post->content }}</td>
                                                    <td>{{ $post->description }}</td>


                                                    {{-- <td>{{ $post->image }}</td> --}}
                                                    <td>
                                                        <a href="{{ route('viewpost', $post->id) }}"
                                                            class="btn btn-success">view</a>


                                                        <a href="{{ route('edit', $post->id) }}"
                                                            class="btn btn-primary">Edit</a>


                                                        <a href="{{ route('Delete', $post->id) }}"
                                                            class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                        </tbody>
                                        @endforeach

                                </table>
                            </div>
                        </div>
                        {{ $posts->links() }}
                    </div>
                </div>
                <div class="col-md-3">
                </div>
            </div>
        </div>
    </div>
@endsection


