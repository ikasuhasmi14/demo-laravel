@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h1>Tasks</h1>

			@include('common.errors')

			<form action="/tasks" method="POST">
				{{ csrf_field() }}
				<div class="form-group">
					<label>Tulis Task Name</label>
					<input class="form-control" name="name"></input>
				</div>

				<button class="btn" type="submit">Save</button>
			</form>

			<br>

			<ul>

				@foreach($tasks as $task)
					<table style="width:100%">
						
					<tr>
					<th>Task Name</th>
					<th>Action</th>
					</tr>

					
					<tr>
					
					

					<td><a href="/tasks/{{ $task->id }}/edit">{{ $task->name}} </a></td>

					<td>
						
				<form action="/tasks/{{ $task->id }}" method="POST">
				
				{{ csrf_field() }}
				{{ method_field('DELETE') }}
					<button type="submit" class="btn btn-danger">
						<i class="fa fa-btn fa-trash"></i> Delete </button> 

					</form>
					</td>
					
					</tr>
					</table>



				@endforeach
			</ul>
		</div>
	</div>
</div>
@endsection