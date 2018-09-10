@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')
    <h1>Liste des utilisateurs :</h1>

@foreach ($users as $user) 
<h2>Nom : {{$user->name}}</h2>
<h2>adresse : </h2>
    

@endforeach
@endsection