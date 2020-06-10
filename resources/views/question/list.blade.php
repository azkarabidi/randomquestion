@extends('layouts.base')
@section('body')
<body>
    <div class="container">
    <a href="{{route('question.random')}}">Home</a>
        <div class="row my-4">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{route('question.add')}}">
                            {{ csrf_field() }}
                            <label>Question</label>
                            <input type="text" name="question"  class="form-control my-2">
                            <button type="submit" class="btn btn-primary float-right my-2"> Add question</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>
        <table class="table">
          <thead>
              <tr>
                  <th>id</th>
                  <th>question</th>
                  <th>Action</th>
                </tr>
            </thead>
                @forelse ($questions as $item)
                <tbody>

                    <tr>
                        <td>
                            {{$item->id}}
                        </td>
                        <td>
                            {{$item->question}} 
                        </td>
                        <td>
                    <a href="{{route('question.edit',$item->id)}}" class="btn btn-success">edit</a>
                        </td>
                        
                    </tr>
                    @empty
                    <tr>
                        <td colspan="2"> No list of question</td>
                    </tr>
                    
                    @endforelse
                </tbody>
            
        </table>
    </div>

    @section('script')
        
    @endsection
    @endsection
