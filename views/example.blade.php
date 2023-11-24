<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Listing</title>
</head>

<body>

    <h1>Room Listing</h1>

    @if (isset($rooms) && count($rooms) > 0)
    <ul>
        @foreach ($rooms as $room)
        <li>
            Room ID: {{ $room['id'] }}<br>
            Room Name: {{ $room['room_number'] }}<br>
            <img src={{ $room[ 'photos' ] }} alt="">
        </li>
        <br>
        @endforeach
    </ul>
    @else
    <p>No rooms available.</p>
    @endif

</body>

</html>