<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => $errors->has('name') ? 'form-control is-invalid' : $errors->has('name') ? 'form-control is-invalid' : 'form-control']) !!}
    @if ($errors->has('name'))
    <span class="invalid-feedback">
        <strong>{{ $errors->first('name') }}</strong>
    </span>
    @endif
</div>

<div class="form-group">
    {!! Form::label('email', 'Email') !!}
    {!! Form::email('email', null, ['class' => $errors->has('email') ? 'form-control is-invalid' : $errors->has('email') ? 'form-control is-invalid' : 'form-control']) !!}
    @if ($errors->has('email'))
    <span class="invalid-feedback">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
    @endif
</div>

<div class="form-group">
    {!! Form::label('roles', 'Role') !!}
    {!! Form::select('roles[]', ['admin'=>'admin', 'karyawan'=>'karwayan'], isset($row) ? $row->roles->pluck('name','name') : null, ['class' => $errors->has('roles') ? 'form-control is-invalid' : $errors->has('roles') ? 'form-control is-invalid' : 'form-control']) !!}
    @if ($errors->has('roles'))
    <span class="invalid-feedback">
        <strong>{{ $errors->first('roles') }}</strong>
    </span>
    @endif

</div>


<div class="form-group row">
    {!! Form::label('password', 'Password') !!}
    {!! Form::password('password', ['class' => $errors->has('password') ? 'form-control is-invalid' : $errors->has('password') ? 'form-control is-invalid' : 'form-control']) !!}
    @if ($errors->has('password'))
    <span class="invalid-feedback">
        <strong>{{ $errors->first('password') }}</strong>
    </span>
    @endif

</div>

<div class="form-group row">
    {!! Form::label('password_confirmation', 'Confirm Password') !!}
    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
</div>