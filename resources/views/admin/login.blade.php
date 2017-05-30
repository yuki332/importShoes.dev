@extends('layouts.admin')
@section('content')
	<div class="full-height flex flex--center mainvisual">
		<form method="POST" action="/admin/login" class="form">
			{{ csrf_field() }}

			<div>
				<input class="form__input" type="text" name="username" placeholder="username">
			</div>
			<div>
				<input class="form__input" type="password" name="password" placeholder="password">
			</div>

			<div class="text--center">
				<button class="btn card__btn">Log in</button>
			</div>
		</form>
	</div>
@endsection