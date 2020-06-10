<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{route('question.update',$question->id)}}">
        {{ csrf_field() }}
    <input type="text" name="question" value="{{$question->question}}" >
        <input type="submit" value="update">
    </form>
    
</body>
</html>