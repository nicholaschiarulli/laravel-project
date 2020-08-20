@extends('layouts.app')

@section('content')
<div class="wrapper game-index">
  <h1>Game Orders</h1>
  @foreach($games as $game)
    <div class="game-item">
      <img src="/img/game-logo.jpeg" alt="game-logo icon">
      <h4><a href="{{ route('games.show', $game->id) }}">{{ $game->name }}</a></h4>
    </div>
  @endforeach

</div>

@endsection
