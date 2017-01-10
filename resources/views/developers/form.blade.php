<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    {!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
    {!! Form::label('phone', 'Phone', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('phone', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('years_of_experience') ? 'has-error' : ''}}">
    {!! Form::label('years_of_experience', 'Years Of Experience', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('years_of_experience', null, ['class' => 'form-control']) !!}
        {!! $errors->first('years_of_experience', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('pass_work') ? 'has-error' : ''}}">
    {!! Form::label('pass_work', 'Pass Work', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('pass_work', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('pass_work', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('coolest_thing') ? 'has-error' : ''}}">
    {!! Form::label('coolest_thing', 'Coolest Thing', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('coolest_thing', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('coolest_thing', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>