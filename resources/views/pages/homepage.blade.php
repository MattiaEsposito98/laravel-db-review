@extends('layouts.app')

@section('content')
    <h1>Homepage</h1>
    <div class="container">
        <div class="row">
            @foreach ($clients as $client)
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $client->name }}</h5>
                            <p class="card-text"><strong>Email:</strong> {{ $client->email }}</p>
                            <p class="card-text"><strong>Posts:</strong></p>
                            @if ($client->posts->isNotEmpty())
                                <ol>
                                    @foreach ($client->posts as $post)
                                        <li>{{ $post->title }}</li>
                                    @endforeach
                                </ol>
                            @else
                                <p>Nessun post correlato</p>
                            @endif
                            <a href="{{ route('clients.show', $client->id) }}" class="btn btn-primary">Dettagli</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
