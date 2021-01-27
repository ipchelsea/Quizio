@extends('backend.layouts.master')

	@section('title','create quiz')

	@section('content')

	<div class="span9">
     <div class="content">

     	@if(Session::has('message'))

     		<div class="alert alert-success">{{Session::get('message')}}</div>
     	@endif



     <form action="{{route('question.store')}}" method="POST">@csrf
			
	<div class="module">
            <div class="module-head">
                <h3>Assign Quiz</h3>
            </div>


            <div class="module-body">
                 <div class="control-group">
				<label class="control-lable" for="name">Choose Quiz</label>
				<div class="controls"> 
					<select name="quiz" class="span8 ">
						@foreach(App\Quiz::all() as $quiz)
						<option value="{{$quiz->id}}">{{$quiz->name}}</option>
						@endforeach

					</select>
				</div>
			     @error('question')
			    <span class="invalid-feedback" role="alert">
			        <strong>{{ $message }}</strong>
			    </span>
			@enderror      

            </div>
            
            <div class="control-group">
				<label class="control-lable" for="name">Select Quiz</label>
				<div class="controls"> 
					<select name="user_id" class="span8 "> required="">
						@foreach(App\User::where('is_admin','0')->get() as $user)
						<option value="{{$quiz->id}}">{{$user->name}}</option>
						@endforeach

					</select>
                </div>
            </div>

        


			<div class="control-group">
				<div class="controls">
					<button type="submit" class="btn btn-success">Submit</button>
				</div>

		    </div>


   		</div>
	</div>

</form>


</div>
</div>
                      
                    
@endsection