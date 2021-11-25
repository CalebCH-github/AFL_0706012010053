@extends('layout.mainlayout')

@section('title')
<title>{{$title}}</title>

@section('main_content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>Edit Collection</h1>

            {{-- Main --}}
            <form action="{{ route('cars.update', $listcars->car_name) }}" enctype="multipart/form-data" method="post">
                {{ csrf_field() }}

                {{-- Name --}}
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label>Car name: </label>
                    <input type="text" class="form-control" name="car_name" value="{{ $listcars->car_name }}" required>
                </div>
                <br>

                {{-- Collection from --}}
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label>Collection: </label>
                    <select name="collection_from" class="custom-select">
                        @foreach ($listcollection as $collection)
                            @if ($listcars['collection_from'] == $collection['collection_name'])
                                <option value="{{ $collection['collection_name'] }}" selected>{{ $collection['collection_name'] }}
                                </option>
                            @else
                                <option value="{{ $collection['collection_name'] }}">{{ $collection['collection_name'] }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <br>

                {{-- Year --}}
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label>Year: </label>
                    <input type="text" class="form-control" name="year" value="{{ $listcars->year }}" required>
                </div>

                {{-- Color --}}
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label>Color: </label>
                    <input type="text" class="form-control" name="color" value="{{ $listcars->color }}" required>
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