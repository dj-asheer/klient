

<h2> 

	<a href="/posts/{{ $post->id }}">
		{{ $post ->title }} 
	</a>

</h2>

<h4 class="">Kreated At ====>> {{ $post -> created_at ->toFormattedDateString() }} </h4>

<p>  {{ $post -> body }} </p>
 <hr class="btn-danger">  