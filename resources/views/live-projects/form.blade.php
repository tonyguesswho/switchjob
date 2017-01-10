<div class="form-group {{ $errors->has('job_id') ? 'has-error' : ''}}">
    {!! Form::label('job_id', 'Job Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('job_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('job_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('developer_user_id') ? 'has-error' : ''}}">
    {!! Form::label('developer_user_id', 'Developer User Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('developer_user_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('developer_user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('start_date') ? 'has-error' : ''}}">
    {!! Form::label('start_date', 'Start Date', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('start_date', null, ['class' => 'form-control']) !!}
        {!! $errors->first('start_date', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('duration') ? 'has-error' : ''}}">
    {!! Form::label('duration', 'Duration', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('duration', null, ['class' => 'form-control']) !!}
        {!! $errors->first('duration', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    {!! Form::label('status', 'Status', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('status', null, ['class' => 'form-control']) !!}
        {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('end_date') ? 'has-error' : ''}}">
    {!! Form::label('end_date', 'End Date', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('end_date', null, ['class' => 'form-control']) !!}
        {!! $errors->first('end_date', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>