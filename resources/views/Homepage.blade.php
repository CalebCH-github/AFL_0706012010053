@extends('layout.mainlayout')

{{-- title --}}
@section('title')
    <title>{{ $title }}</title>
@endsection

{{-- Footer --}}
@section('footer')
    @include ('layout.footer')
@endsection

{{-- NVM GAJADI PAKE INI --}}

@section('main_content')

    <div class="container" style="margin: 5px 5px 5px 5px;">
        <h1 class="display-3">List </h1>
        <a class="btn btn-outline-success" href="{{ route('brand.create') }}">Create Brand</a>
    </div>
    
@endsection

