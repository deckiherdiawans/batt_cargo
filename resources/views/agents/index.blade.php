@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Agents</h2>
            </div>
            <div class="pull-right">
                @can('agent-create')
                    <a class="btn btn-success" href="{{ route('agents.create') }}"> Create New Agent</a>
                @endcan
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($agents as $agent)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $agent->name }}</td>
                <td>{{ $agent->detail }}</td>
                <td>
                    <form action="{{ route('agents.destroy', $agent->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('agents.show', $agent->id) }}">Show</a>
                        @can('agent-edit')
                            <a class="btn btn-primary" href="{{ route('agents.edit', $agent->id) }}">Edit</a>
                        @endcan

                        @csrf
                        @method('DELETE')
                        @can('agent-delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        @endcan
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $agents->links() !!}

    <p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>
@endsection
