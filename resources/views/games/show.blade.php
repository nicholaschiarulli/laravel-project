@extends('layouts.app')

@section('content')
<div class="wrapper game-details">
  <h1>Order for {{ $game->name }}</h1>
  <p class="platform">platform - {{ $game->platform }}</p>
  <p class="rating">rating - {{ $game->rating }}</p>
  <p class="addons">Extra addons:</p>
  <ul>
    @foreach($game->addons as $addon)
      <li>{{ $addon }}</li>
    @endforeach
  </ul>
  <form action="{{ route('games.destroy', $game->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button>Complete Order</button>
  </form>
</div>
<a href="{{ route('games.index') }}" class="back"><- Back to all games</a>
@endsection
