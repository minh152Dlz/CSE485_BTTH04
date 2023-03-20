<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HomePage</title>
</head>
<body>
@if(count($data) > 0)
@foreach($data as $row)
<p>{{ $row->student_name }}</p>
@endforeach
@endif
</body>
</html>