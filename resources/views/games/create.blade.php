@extends('layouts.app')

@section('content')
<div class="wrapper create-game">
  <h1>Create a New Game</h1>
  <form action="{{ route('games.store') }}" method="POST">
    @csrf
    <label for="name">Your name:</label>
    <input type="text" name="name" id="name" required>
    <label for="platform">Choose type of platform:</label>
    <select name="platform" id="platform">
      <option value="xbox">xbox</option>
      <option value="pc">pc</option>
      <option value="ps4">ps4</option>
      <option value="switch">switch</option>
    </select>
    <label for="rating">Choose rating:</label>
    <select name="rating" id="rating">
      <option value="M">M</option>
      <option value="T">T</option>
      <option value="E">E</option>
    </select>
    <fieldset>
      <label>Extra addons:</label>
      <input type="checkbox" name="addons[]" value="limited-edition">limited-edition<br />
      <input type="checkbox" name="addons[]" value="dlc">dlc<br />
      <input type="checkbox" name="addons[]" value="collectors">collectors<br />
    </fieldset>
    <input type="submit" value="Order Game">
  </form>
</div>
@endsection