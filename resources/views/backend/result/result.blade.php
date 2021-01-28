@extends('backend.layouts.master')

	@section('title','exam assigned user')

	@section('content')
<div class="span9">
                    <div class="content">
                    	
                        <div class="module">
                            <div class="module-head">
                                <h3>All Quiz</h3>
                            </div>

                            <div class="module-body">
                            	<table class="table table-striped">
								  <thead>
									<tr>
										<th>#</th>
										<th>Test</th>
										<th>Total Question</th>
										<th>Attempt Question</th>
										<th>Correct Answer</th>
										<th>Incorrect Answer</th>
										<th>Percentages</th>
									</tr>
								  </thead>
								  <tbody>
								  @foreach($quiz as $q)
									<tr>
										<td>1</td>
										<td>{{$q->name}}</td>
										<td>{{$totalQuestions}}</td>
										<td>{{$attemptQuestions}}</td>
										<td>{{$userCorrectedAnswer}}</td>
										<td>{{$percentage}}</td>
									</tr>
									@endforeach
								
								  </tbody>
								</table>
                       		</div>
                   		</div>
                		
                		</div>
           			 
           			</div>
        		</div> 
@endsection