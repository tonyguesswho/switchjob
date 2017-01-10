@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Developerskills</div>
                    <div class="panel-body">

                        <a href="{{ url('/developer-skills/create') }}" class="btn btn-primary btn-xs" title="Add New DeveloperSkill"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Skill Id </th><th> Developer Id </th><th> User Id </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($developerskills as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->skill_id }}</td><td>{{ $item->developer_id }}</td><td>{{ $item->user_id }}</td>
                                        <td>
                                            <a href="{{ url('/developer-skills/' . $item->id) }}" class="btn btn-success btn-xs" title="View DeveloperSkill"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/developer-skills/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit DeveloperSkill"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/developer-skills', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete DeveloperSkill" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete DeveloperSkill',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $developerskills->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection