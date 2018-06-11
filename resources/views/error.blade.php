@if(count($errors))

	<div class="alert alert-danger">

		<strong>Whoops!</strong> Hubo algunos problemas con tus datos.

		<br/>

		<ul>

			@foreach($errors->all() as $error)

			<li>{{ $error }}</li>

			@endforeach

		</ul>

	</div>

@endif