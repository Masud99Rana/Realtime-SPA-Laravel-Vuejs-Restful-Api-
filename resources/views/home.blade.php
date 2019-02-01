<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <title>Single page forum</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
  <div id="app">
    <v-app>
      	<app-home> </app-home>
    </v-app>
  </div>

  <script src="{{asset('js/app.js')}}"></script>

</body>
</html>