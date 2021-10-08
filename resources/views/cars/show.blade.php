<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $car->producer}} | {{ $car->title }}</title>
</head>
<body>
    <h1><b>{{ $car->producer }} | {{ $car->title }}</b></h1>
    <p>Broj vrata : {{ $car->number_of_doors }}</p>
</body>
</html>