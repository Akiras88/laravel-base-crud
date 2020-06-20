@extends('layouts.main')

@section('main-content')

    @if (session('deleted'))
        <div class="alert alert-success">
            {{ session('deleted') }} has been fired
        </div>
    @endif 

    <h1 class="mb-4">Garage</h1>

    <section class="cars">
        <h2 class="text-primary">Worker list</h2>
    </section>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($garages as $garage)
                <tr>
                    <td>{{$garage->id}}</td>
                    <td>{{$garage->name}}</td>
                    <td>
                        <a class="btn btn-success" href="{{ route('garages.show', $garage->id) }}">
                            Show
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('garages.destroy', $garage->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <input class="btn btn-danger" type="submit" value="Dismiss">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection