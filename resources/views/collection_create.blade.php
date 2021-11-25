@extends('layout.mainlayout')

@section('title')
<title>{{$title}}</title>

@section('main_content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>Create Collection</h1>

            {{-- Main --}}
            <form action="{{ route('collection.store') }}" enctype="multipart/form-data" method="post">
                {{ csrf_field() }}

                {{-- Name --}}
                <div class="form-group">
                    <label>Collection name: </label>
                    <input type="text" class="form-control" name="collection_name" required>
                </div>

                {{-- Jumlah mobil --}}
                <div class="form-group">
                    <label>Car quantity: </label>
                    <input type="integer" class="form-control" name="cars" required>
                </div>

                {{-- Company --}}
                <div class="form-group">
                    <label>Company: </label>
                    <input type="text" class="form-control" name="company" required>
                </div>
                <br>
                
                {{-- Image --}}
                <div class="form-group">
                    <label>Image: </label>
                    <input type="file" name="image_path" accept="image/*">
                </div>
                
                <br>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
@endsection