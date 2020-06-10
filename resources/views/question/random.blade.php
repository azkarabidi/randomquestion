@extends('layouts.base')
@section('body')
    
<body>
    <div class="container ">
    <a href="{{route('question.list')}}" class="float-right btn btn-primary"> Create Quaestion</a>
    <div class="row justify-content-center my-5 mx-auto py-3">
        <div class="col-md-8 text-center">
            <h2>Generate Random Question</h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center mx2 my-2" >
                <h2 class="card-header"> Click Button To Show Question</h2>
                <div class="card-body mx-2 my-2">
                    <input type="button"  class="btn btn-primary mx-2 my-5" value="Generate Random Question Base On Your List" id="random">
                        
                </div>
            </div>
        </div>
        
    </div>
</div>
@section('script')
    

<script>
        $('#random').click(function(){
            // $.get("{{route('question')}}")
            // .done(function(data){
            //     alert(data.id);
            //     console.log(data);
            // })

let timerInterval
Swal.fire({
  title: 'Auto picking qustion',
  html: 'Please Wait',
  timer: 1500,
  timerProgressBar: true,
  onBeforeOpen: () => {
    Swal.showLoading()
    timerInterval = setInterval(() => {
      const content = Swal.getContent()
      if (content) {
        const b = content.querySelector('b')
        if (b) {
          b.textContent = Swal.getTimerLeft()
        }
      }
    }, 100)
  },
  onClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
    $.get("{{route('question')}}")
            .done(function(data){
    Swal.fire(`${data.question}`);
            })
  }
})
})  
    
    </script>

@endsection
@endsection