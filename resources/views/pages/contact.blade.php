@extends('layouts.app')

@section('content')
    @foreach ($contacts as $contact)
        <ul>
            <li>{{ $contact }}</li>
        </ul>
    @endforeach
@endsection
