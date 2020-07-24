<!DOCTYPE html>
<html>
<head>
<title>Print</title>
</head>
<body>
<form target="_blank" action="{{url('print')}}" method="POST">
@csrf
<button >Print</button>
</form>
</body>
</html>

