@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h1> Edit Tasks</h1>

			@include('common.errors')

			<form action="/tasks/{{ $task->id }}" method="POST">
				{{ method_field('PUT') }}
				{{ csrf_field() }}
				<div class="form-group">
					<label>Tulis Task Name</label>
					<input class="form-control" name="name" value="{{ $task->name }}"></input>
				</div>

				<button class="btn" type="submit">Save</button>
			</form>
		</div>
	</div>
</div>
@endsection