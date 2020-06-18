@extends('layouts.main')

@section('main-content')

    @if (session('deleted'))
        <div class="alert alert-success">
            {{ session('deleted') }} Successfully delete
        </div>
    @endif

    <h1 class="mb-4">Cars</h1>

    <section class="cars">
        <h2 class="text-primary">Car list</h2>
    </section>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Car</th>
                <th>Model</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr>
                    <td>{{$car->id}}</td>
                    <td>{{$car->car}}</td>
                    <td>{{$car->model}}</td>
                    <td>
                        <a class="btn btn-success" href="{{ route('cars.show', $car->id) }}">
                            Show
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('cars.edit', $car->id) }}">
                            Edit
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('cars.destroy', $car->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <input class="btn btn-danger" type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection