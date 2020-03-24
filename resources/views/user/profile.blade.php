<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <div id="user" 
    data-name="{{ $user->name }}"
    data-email="{{ $user->email }}"
    data-email_verified_at="{{ $user->email_verified_at }}"
  >   
</div>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
