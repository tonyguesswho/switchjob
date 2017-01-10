<div class="form-group {{ $errors->has('job_type_id') ? 'has-error' : ''}}">
    {!! Form::label('job_type_id', 'Job Type Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('job_type_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('job_type_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    {!! Form::label('description', 'Description', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('example_app') ? 'has-error' : ''}}">
    {!! Form::label('example_app', 'Example App', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('example_app', null, ['class' => 'form-control']) !!}
        {!! $errors->first('example_app', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('job_attachment') ? 'has-error' : ''}}">
    {!! Form::label('job_attachment', 'Job Attachment', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('job_attachment', null, ['class' => 'form-control']) !!}
        {!! $errors->first('job_attachment', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('start_date') ? 'has-error' : ''}}">
    {!! Form::label('start_date', 'Start Date', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('start_date', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('start_date', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('job_scope') ? 'has-error' : ''}}">
    {!! Form::label('job_scope', 'Job Scope', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('job_scope', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('job_scope', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>