<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    @dd($users)
    @foreach ($users as $item)
        <div>
            <h1>{{ $item['name'] }}</h1>
        </div>
    @endforeach

</body>

</html>
