<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<h1>boogers</h1>
  @foreach($user as $key => $value)
    <h1> {{ $value->id }} </h1>
  @endforeach
  
</body>
</html>