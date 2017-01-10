@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">DeveloperSkill {{ $developerskill->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('developer-skills/' . $developerskill->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit DeveloperSkill"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['developerskills', $developerskill->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete DeveloperSkill',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $developerskill->id }}</td>
                                    </tr>
                                    <tr><th> Skill Id </th><td> {{ $developerskill->skill_id }} </td></tr><tr><th> Developer Id </th><td> {{ $developerskill->developer_id }} </td></tr><tr><th> User Id </th><td> {{ $developerskill->user_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection