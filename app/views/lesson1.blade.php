@extends('masterThemeTwo')

@section('title')
	Stroke of Genius
	
@stop
 
 @section('content')


	  	<!-- START MAIN CONTAINER -->
	  	<div class="main-container">
	  		<div class="container">
	  			<!-- ABOUT -->
	  			<h2 class="with-breaker animate-me fadeInUp">
		  			Finding the square of a number that ends in 5
	  			</h2>
	  			<div class="row">
	  				<div class="col-md-8">
						
						<h4>Instructions:</h4>
						<br /><br />
	  					<p class="text-justify">In this lesson you will learn how to square any 2-digit number that ends with the number 5.<br />
						For example:<br />
						<center><b>65^2 = 4,225</b></center> <br />
						First, you want to take the first digit and then multiple it by itself plus 1.<br />
						For example:<br />
						<center><b>6 x 7 = 42</b></center> <br />
						<br />
						Next, you take the number 25 and place it on the end of the number you got above. <br />
						For example:<br />
						<center><b>4,225</b></center> <br />
						</p>
						<br />
						<br />
						<u><a href="beginnerlessons"><font color="#0066CC"><b>Try A Different Lesson</b></font></a></u>
					<br />
					<!--Comments Section-->
					<h3>How'd you like this lesson?</h3><br/>
							{{ Form::open(array('url' => '/comment/create')) }}
								{{ Form::label('name','Name') }}
								{{ Form::text('name'); }}<br />
								{{ Form::label('note','Note') }}
								{{ Form::text('note'); }}<br />
								{{ Form::label('university','University') }}
								{{ Form::text('university'); }}<br />
								{{ Form::submit('Add'); }}
							{{ Form::close() }}
						<br />
						<h4><font color="purple">Comments on this lesson:</font></h4>
							
							<?php
							$collection = Comment::all();

							foreach($collection as $comment) {
								echo "<br />";
								echo "<b>Name</b><br />";
								echo $comment->name."<br />";
								echo "<b>University</b><br />";
								echo $comment->university."<br />";
								echo "<b>Note</b><br />";
								echo $comment->note."<br />";
							}
						?>
						<br />	
						
					<!--End Comments Section Here-->
		  			</div>
		  			<div class="col-md-4">
		  				<h4><font color="purple">Try it out for yourself with this quiz:</font></h4>
		  				<iframe src="quizzes/lesson1quiz.php" height="400" frameborder="0"></iframe>
		
		  			</div>
	  			</div>
	  			<br />
				<br />
				<br />
	  		</div>
	  	
	  		
	  	</div>
	  	<!-- END MAIN CONTAINER -->
@stop