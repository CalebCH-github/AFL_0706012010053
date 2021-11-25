@extends('layout.mainlayout')

{{-- title --}}
@section('title')
    <title>{{ $title }}</title>
@endsection


{{-- Footer --}}
@section('footer')
    @include ('layout.footer')
@endsection

{{-- Main --}}
@section('main_content')
    {{-- Create Brand Button & Tulisan List Brand --}}
    <div class="container" style="margin: 5px 5px 5px 5px;">
        <h1 class="display-3">Collections</h1>
        <a class="btn btn-outline-primary bg-dark" href="{{ route('collection.create') }}">Create Collection</a>
    </div>

    {{-- Tabel Collection --}}
    <div class="row row-cols-3 row-cols-md-3 g-3">

        @foreach ($listcollection as $collection)

            <div class="col">
                <div class="card text-center bg-primary text-white" style="width:100%">
                    <br>
                    <a href="{{ route('collection.show', $collection->collection_name) }}">
                        <img class="card-img-top" src="{{ url($collection['image_path']) }}" alt="Card image" style="height:200px">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title">{{ $collection['collection_name'] }}</h4>

                        {{-- Button Show & Edit --}}
                        <form action="{{ route('collection.destroy', $collection->collection_name) }}" method="POST">
                            <a class="btn btn-outline-info bg-dark" href="{{ route('collection.show', $collection->collection_name) }}">Show</a>
                            <a class="btn btn-outline-warning bg-dark"
                                href="{{ route('collection.edit', $collection->collection_name) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger bg-dark">Delete</button>
                        </form>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <br>
    <br>
    <br>
@endsection