@extends('layouts.main')

@section('main-content')
    <h1 class="mb-4">Add a new car</h1>

    @if ($errors->all())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('cars.store') }}" method="POST">

        @csrf
        @method('POST')
        <div class="formgroup">
            <input type="text" class="form-control"
            name="car" placeholder="Car brend">
        </div>
        <div class="formgroup">
            <input type="text" class="form-control"
            name="model" placeholder="Car model">
        </div>
        <div class="formgroup">
            <input type="text" class="form-control"
            name="fuel" placeholder="fuel type">
        </div>
        <div class="formgroup">
            <input type="text" class="form-control"
            name="year" placeholder="year">
        </div>
        <input class="btn btn-primary"type="submit" value="Create">

    </form>
@endsection