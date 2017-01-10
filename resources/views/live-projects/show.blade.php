@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">LiveProject {{ $liveproject->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('live-projects/' . $liveproject->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit LiveProject"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['liveprojects', $liveproject->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete LiveProject',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $liveproject->id }}</td>
                                    </tr>
                                    <tr><th> Job Id </th><td> {{ $liveproject->job_id }} </td></tr><tr><th> Developer User Id </th><td> {{ $liveproject->developer_user_id }} </td></tr><tr><th> Start Date </th><td> {{ $liveproject->start_date }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection