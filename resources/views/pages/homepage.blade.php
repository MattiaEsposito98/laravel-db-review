@extends('layouts.app')

@section('content')
    <h1>Homepage</h1>
    <div class="container">
        <div class="row">
            @foreach ($clients as $client)
                <ul>
                    <li>Nome:{{ $client->name }} <br>
                        Email: {{ $client->email }} <br>
                        Posts: <ol>
                            @if ($client->posts->isNotEmpty())
                                <ol>
                                    @foreach ($client->posts as $post)
                                        <li>{{ $post->title }}</li>
                                    @endforeach
                                </ol>
                            @else
                                <li>Nessun post correlato</li>
                            @endif
                </ul>
            @endforeach
        </div>

    </div>
@endsection
