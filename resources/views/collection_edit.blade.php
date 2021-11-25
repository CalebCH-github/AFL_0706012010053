@extends('layout.mainlayout')

@section('title')
<title>{{$title}}</title>

@section('main_content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>Edit Collection</h1>

            {{-- Main --}}
            <form action="{{ route('collection.update', $listcollection->collection_name) }}" enctype="multipart/form-data" method="post">
                {{ csrf_field() }}

                {{-- Name --}}
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label>Collection name: </label>
                    <input type="text" class="form-control" name="collection_name" value="{{ $listcollection->collection_name }}" required>
                </div>

                {{-- Cars --}}
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label>Car quantity: </label>
                    <input type="integer" class="form-control" name="cars" value="{{ $listcollection->cars }}" required>
                </div>

                {{-- Company --}}
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label>Company: </label>
                    <input type="text" class="form-control" name="company" value="{{ $listcollection->company }}" required>
                </div>
                <br>
                
                {{-- Image --}}
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label>Image: </label>
                    <input type="file" name="image_path" accept="image/*">
                </div>
                
                <br>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection