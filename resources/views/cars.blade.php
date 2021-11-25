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
        <h1 class="display-3">Cars</h1>
        <a class="btn btn-outline-primary bg-dark" href="{{ route('cars.create') }}">Create Cars</a>
    </div>

    {{-- Tabel Collection --}}
    <div class="row row-cols-3 row-cols-md-3 g-3">

        @foreach ($listcars as $cars)

            <div class="col">
                <div class="card text-center bg-primary text-white" style="width:100%">
                    <br>
                    <a href="{{ route('cars.show', $cars->car_name) }}">
                        <img class="card-img-top" src="{{ url($cars['image_path_car']) }}" alt="Card image" style="height:200px">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title">{{ $cars['car_name'] }}</h4>

                        {{-- Button Show & Edit --}}
                        <form action="{{ route('cars.destroy', $cars->car_name) }}" method="POST">
                            <a class="btn btn-outline-info bg-dark" href="{{ route('cars.show', $cars->car_name) }}">Show</a>
                            <a class="btn btn-outline-warning bg-dark"
                                href="{{ route('cars.edit', $cars->car_name) }}">Edit</a>
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