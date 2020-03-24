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
                <a href="/users/{{ $user->id }}">{{ $user->name }}</a> 
                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                  @method('DELETE')
                  @csrf
                  <button>Delete User</button>
                </form>
            </ul>
        @endforeach
    </ul>
    {{ session('status') }}
</div>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
