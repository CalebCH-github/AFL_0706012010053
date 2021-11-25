@extends('layout.mainlayout')

{{-- Title --}}
@section('title')
    <title>{{ $title }}</title>
@endsection

{{-- Footer --}}
@section('footer')
    @include ('layout.footer')
@endsection

{{-- Main --}}
@section('main_content')

    {{-- Gambar Collection & Create Collection --}}
    @foreach ($listcollection as $collection)
        <br>
        <br>
        <img class="card-img-top" src="{{ url($collection['image_path']) }}" alt="Card image" style="height:400px">
        <br>
        <h1>{{ $collection['collection_name'] }}</h1>
        <p>{{ $collection['cars'] }} cars</p>
        <a class="btn btn-outline-primary bg-dark" href="{{ route('cars.create') }}">Create Car</a>
    @endforeach

    {{-- Creation table --}}
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Car Name</th>
                <th scope="col">Collection</th>
                <th scope="col">Year</th>
                <th scope="col">Color</th>   
                {{-- <th scope="col">Tahun</th>
                <th scope="col">Rating</th>
                <th scope="col">Action</th> --}}
            </tr>
        </thead>
        <tbody>
            @php $index = 1 @endphp
            @foreach ($collection->getCars as $cars)
                <tr>
                    <th scope="row">{{ $index }}</th>
                    @php $index++ @endphp
                    <td>{{ $cars['car_name'] }}</td>
                    <td>{{ $cars['collection_from'] }}</td>
                    <td>{{ $cars['year'] }}</td>
                    <td>{{ $cars['color'] }}</td>

                    {{-- Tombol Show & Edit --}}
                    <td>
                        <form action="{{ route('cars.destroy', $cars->car_name) }}" method="POST">
                            <a class="btn btn-outline-info bg-dark" href="{{ route('cars.show', $cars->car_name) }}">Show</a>
                            <a class="btn btn-outline-warning bg-dark" href="{{ route('cars.edit', $cars->car_name) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger bg-dark">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection