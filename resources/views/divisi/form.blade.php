<div class="form-group">
	{!! Form::label('name', 'Name') !!}
	{!! Form::text('name', null, ['class' => $errors->has('name') ? 'form-control is-invalid' : $errors->has('name') ? 'form-control is-invalid' : 'form-control']) !!}
	@if ($errors->has('name'))
	<span class="invalid-feedback">
		<strong>{{ $errors->first('name') }}</strong>
	</span>
	@endif
</div>