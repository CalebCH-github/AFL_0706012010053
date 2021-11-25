@extends('layout.mainlayout')

@section('title')
<title>{{$title}}</title>

@section('main_content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>Create Collection</h1>

            {{-- Main --}}
            <form action="{{ route('cars.store') }}" enctype="multipart/form-data" method="post">
                {{ csrf_field() }}

                {{-- Name --}}
                <div class="form-group">
                    <label>Car name: </label>
                    <input type="text" class="form-control" name="car_name" required>
                </div>

                {{-- Year --}}
                <div class="form-group">
                    <label>Year: </label>
                    <input type="text" class="form-control" name="year" required>
                </div>

                {{-- Color --}}
                <div class="form-group">
                    <label>Color: </label>
                    <input type="text" class="form-control" name="color" required>
                </div>
                <br>

                {{-- Collection --}}
                <div class="form-group">
                    <label>Collection: </label>
                    <select name="collection_from" class="custom-select">
                        @foreach ($listcollection as $collection)
                                <option value="{{ $collection['collection_name'] }}">{{ $collection['collection_name'] }}</option>
                        @endforeach
                    </select>
                    
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