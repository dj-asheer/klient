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
	    <div class="panel-heading">Blog Post</div>
	    <div class="panel-body">
	    	@foreach ($posts as $post)

	    	@include ('posts.post')

	    	@endforeach

	    </div>
	  </div>
  	</div>
	  @include ('template.sidebar')


	</div>
	</div>

@endsection