@extends('layouts.main')

@section('main-content')
    <h1 class="mb-4">Homepage</h1>

    <section class="cars">
        <h2 class="text-primary">Car list</h2>
    </section>
    <table class="table">
        <thead>
            <tr>
                <th>Car</th>
                <th>Model</th>
                <th>Fuel</th>
                <th>Year</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cars as $car)
                <tr>
                    <td>{{ $car->car }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->fuel }}</td>
                    <td>{{ $car->year }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection