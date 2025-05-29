<!DOCTYPE html>
<html>
<div>
    <h1>Game Details</h1>
    <h2>{{ $game['title'] }}</h2>
    <ul>
        <li><b><i>ID: {{ $game['id'] }}</i></b></li>
        <li><b>Title: {{ $game['title'] }}</b></li>
        <li><i>Developer: {{ $game['developer'] }}</i></li>
        <li>Publisher: {{ $game['publisher'] }}</li>
        <li>Genre: {{ $game['genre'] }}</li>
        <li>Release Date: {{ $game['releaseDate'] }}</li>
        <li>Platform: {{ $game['platform'] }}</li>
        <li>Price: ${{ $game['price'] }}</li>
    </ul>
</div>
</html>