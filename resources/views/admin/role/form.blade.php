<div class="form-group">
	{!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('permissions', 'Permission') !!}
    {!! Form::select('permissions[]', $permissions, isset($row) ? $row->permissions->pluck('name','name') : null, ['class' => 'form-control', 'multiple']) !!}
</div>