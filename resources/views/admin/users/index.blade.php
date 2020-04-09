@extends('layouts.app')

@section('content')
<div class="col">
    <div class="box">
        <table class="table is-fullwidth is-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created at</th>
                <th>Roles</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
            <tr>
                <th>{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                <td>

                    @can('edit-users')
                    <a href="{{ route('admin.users.edit', $user->id) }}"><button class="button is-success is-pulled-left">Edit user</button></a>
                    @endcan

                    @can('delete-users')
                    <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="is-pulled-left">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button type="submit" class="button is-danger">Delete user</button>
                    </form>
                    @endcan
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
