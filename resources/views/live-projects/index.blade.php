@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Liveprojects</div>
                    <div class="panel-body">

                        <a href="{{ url('/live-projects/create') }}" class="btn btn-primary btn-xs" title="Add New LiveProject"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Job Id </th><th> Developer User Id </th><th> Start Date </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($liveprojects as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->job_id }}</td><td>{{ $item->developer_user_id }}</td><td>{{ $item->start_date }}</td>
                                        <td>
                                            <a href="{{ url('/live-projects/' . $item->id) }}" class="btn btn-success btn-xs" title="View LiveProject"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/live-projects/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit LiveProject"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/live-projects', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete LiveProject" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete LiveProject',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $liveprojects->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection