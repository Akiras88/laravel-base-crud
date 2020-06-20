@extends('layouts.main')

@section('main-content')
    <h1 class="mb-4">{{$salesman->name}}</h1>
    <ul class="list-group">
        <li class="list-group-item">
            ID: {{$salesman->id}}
        </li>
        <li class="list-group-item">
            Name: {{$salesman->name}}
        </li>
        <li class="list-group-item">
            Gender: {{$salesman->gender}}
        </li>
        <li class="list-group-item">
            Description: {{$salesman->descrption}}
        </li>
        <li class="list-group-item">
            Iban: {{$salesman->iban}}
        </li>
        <li class="list-group-item">
            Created at: {{$salesman->created_at}}
        </li>
        <li class="list-group-item">
            Updated at: {{$salesman->updated_at}}
        </li>
    </ul>
@endsection