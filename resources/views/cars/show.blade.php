@extends('layouts.main')

@section('main-content')
    <h1 class="mb-4">{{$car->car}}</h1>
    <ul class="list-group">
        <li class="list-group-item">
            ID: {{$car->id}}
        </li>
        <li class="list-group-item">
            Model: {{$car->model}}
        </li>
        <li class="list-group-item">
            Fuel: {{$car->fuel}}
        </li>
        <li class="list-group-item">
            Created at: {{$car->created_at}}
        </li>
        <li class="list-group-item">
            Updated at: {{$car->updated_at}}
        </li>
    </ul>
@endsection