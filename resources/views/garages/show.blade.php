@extends('layouts.main')

@section('main-content')
    <h1 class="mb-4">{{$garage->name}}</h1>
    <ul class="list-group">
        <li class="list-group-item">
            ID: {{$garage->id}}
        </li>
        <li class="list-group-item">
            Name: {{$garage->name}}
        </li>
        <li class="list-group-item">
            Gender: {{$garage->gender}}
        </li>
        <li class="list-group-item">
            Description: {{$garage->descrption}}
        </li>
        <li class="list-group-item">
            Iban: {{$garage->iban}}
        </li>
        <li class="list-group-item">
            Created at: {{$garage->created_at}}
        </li>
        <li class="list-group-item">
            Updated at: {{$garage->updated_at}}
        </li>
    </ul>
@endsection