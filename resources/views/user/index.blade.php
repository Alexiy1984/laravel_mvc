<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <ul>
        @foreach($users as $user)
            <ul>
                <a href="/user/{{ $user->id }}">{{ $user->name }}</a> <a class="text-danger" href="/user/{{ $user->id }}">Delete</a>
            </ul>
        @endforeach
    </ul>
</div>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
