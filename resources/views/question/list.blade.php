<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{route('question.add')}}">
    {{ csrf_field() }}
        <input type="text" name="question">
        <button type="submit"> Add question</button>
    </form>
    <table>
        <tr>
            <td>id</td>
            <td>question</td>
        </tr>
        @forelse ($questions as $item)
            <tr>
                <td>
                    {{$item->id}}
                </td>
                <td>
                    {{$item->question}}
                </td>
            </tr>
        @empty
        <tr>
            <td colspan="2"> No list of question</td>
        </tr>
            
        @endforelse

    </table>
</body>
</html>