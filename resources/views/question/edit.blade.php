@extends('layouts.base')
@section('body')
<body>
    <div class="container">
    <a href="{{route('question.list')}}">Table Question</a>
        <div class="row my-4">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{route('question.update',$question->id)}}">
                            {{ csrf_field() }}
                            <label>Update Question </label>
                        <input type="text" name="question" class="form-control mx-2" value="{{$question->question}}" >
                            <input type="submit" class="btn btn-primary float-right" value="update">
                        </form>

                    </div>

                </div>
            </div>
        </div>

    
</body>
</html>