<link rel="stylesheet" href="{{ asset('css/style.css') }}" class="hr">
@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2" id="side">
                <nav class="nav flex-column text-center mt-4">
                    @include('layouts.sidebar')
                </nav>
            </div>
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Dashboard</div>
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
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">
                                <div class="card mt-1">
                                    <div class="card-header">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-center ">
                                                <h1>Create Post</h1>
                                            </div>
                                            @if ($errors->any())
                                                <div class="alert alert-danger"></div>
                                                <strong>While image uplode is </strong>
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ error }}</li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                            <form method="post" action="" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group row">
                                                    <label for="titleid" class="col-md-3 col-form-label mt-2">Title</label>
                                                    <div class="col-md-8 mt-2">
                                                        <input name="title" type="text" class="form-control" id="titleid"
                                                            placeholder="Enter Title">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="releasedateid"
                                                        class="col-md-3 mt-2 col-form-label">Content</label>
                                                    <div class="col-md-8 mt-2">
                                                        <input name="content" type="text" class="form-control"
                                                            id="releasedateid" placeholder="Enter content">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="publisherid" class="col-md-3 col-form-label mt-2">
                                                        Description</label>
                                                    <div class="col-md-8 mt-3">
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"
                                                            placeholder="Type desc"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="releasedateid"
                                                        class="col-md-3 mt-2 col-form-label">Content</label>
                                                    <div class="col-md-8 mt-2">
                                                        <input name="image" type="file" class="form-control"
                                                            id="releasedateid" placeholder="Enter content">
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-end ">
                                                    <div class="form-group row mt-2">
                                                        <button type="submit" class="btn btn-primary">Submit Post</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
