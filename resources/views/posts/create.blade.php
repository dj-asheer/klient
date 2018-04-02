@extends ('template.layout')


@section ('content')
	<section class="jumbotron text-center">

		<div class="container">
		
			<h2 class="jumbotron-heading">The Blog from Index</h2>		
		</div>

	</section>
<div class="well navbar-default">

	<div class="row">
	<div class="col-sm-8">
	  <div class="panel panel-default">
	    <div class="panel-heading">Making Post</div>
	    <div class="panel-body">

			<form method="POST" action="/posts">
				{{ csrf_field() }}

			  <div class="form-group">

	<!-- Validataion error of filling them form elements -->
	
	  @include ('template.error')

	<!-- // Validataion error of filling them form elements -->

			    <label for="title">Title:</label>
			    <input type="text" id="title" name="title" class="form-control" id="email">
			  </div>

			  <div class="form-group">
			    <label for="body">Post Body</label>
			    <textarea class="form-control" name="body" ></textarea>
			  </div>

			  <button type="submit" class="btn btn-danger">P O S T</button>

			</form>

	    </div>
	  </div>
  	</div>
	  @include ('template.sidebar')
	</div>
</div>
@endsection