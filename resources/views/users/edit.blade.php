<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <h3>{{ $error }}</h3>
        @endforeach
    @endif

    <form method="POST" action="{{ route('users.update', $user['id']) }}">
        @csrf
        @method('PUT')
        <input type="text" name="name" placeholder="Nama" value="{{ $user['name'] }}"><br>
        <input type="email" name="email" placeholder="Email" value="{{ $user['email'] }}"><br>
        <input type="password" name="password" placeholder="Password" value=""><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>
