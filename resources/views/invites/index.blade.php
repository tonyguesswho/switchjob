@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Invites</div>
                    <div class="panel-body">

                        <a href="{{ url('/invites/create') }}" class="btn btn-primary btn-xs" title="Add New Invite"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Company Name </th><th> Email </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($invites as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->company_name }}</td><td>{{ $item->email }}</td>
                                        <td>
                                            <a href="{{ url('/invites/' . $item->id) }}" class="btn btn-success btn-xs" title="View Invite"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/invites/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Invite"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/invites', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Invite" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Invite',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $invites->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection