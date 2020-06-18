@extends('layouts.main')

@section('main-content')
    <h1 class="mb-4">Edit</h1>

    @if ($errors->all())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('cars.update', $car->id) }}" method="POST">

        @csrf
        @method('PATCH')
        
        <div class="formgroup">
            <label for="name">Brend *</label>
            <input type="text" class="form-control" value="{{ old('car', $car->car) }}"
            name="car" id="name" placeholder="Car brend">
        </div>
        <div class="formgroup">
            <label for="model">Model *</label>
            <input type="text" class="form-control" value="{{ old('model', $car->model) }}"
            name="model" id="model" placeholder="Car model">
        </div>
        <div class="formgroup">
            <label for="fuel">Fuel *</label>
            <input type="text" class="form-control" value="{{ old('fuel', $car->fuel) }}"
            name="fuel" id="fuel" placeholder="fuel type">
        </div>
        <div class="formgroup">
            <label for="year">Year *</label>
            <input type="text" class="form-control" value="{{ old('year', $car->year) }}"
            name="year" id="year" placeholder="year">
        </div>
        <input class="btn btn-primary"type="submit" value="Create">

    </form>
@endsection