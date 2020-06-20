@extends('layouts.main')

@section('main-content')

    @if (session('deleted'))
        <div class="alert alert-success">
            {{ session('deleted') }} has been fired
        </div>
    @endif

    <h1 class="mb-4">Salesmen</h1>

    <section class="salesmen">
        <h2 class="text-primary">Salesmen list</h2>
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
            @foreach ($salesmen as $salesman)
                <tr>
                    <td>{{$salesman->id}}</td>
                    <td>{{$salesman->name}}</td>
                    <td>
                        <a class="btn btn-success" href="{{ route('salesmen.show', $salesman->id) }}">
                            Show
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('salesmen.destroy', $salesman->id) }}" method="POST">
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