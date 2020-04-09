@extends('layouts.app')

@section('content')
<div class="col">
    <div class="box">
        <h1>Edit </h1><br>
        <form action="{{ route('admin.users.update', $user) }}" method="POST">
            @csrf
            {{ method_field('PUT') }}

            <div class="field">
                <label class="label">Email</label>
                <div class="control has-icons-right">
                    <input class="input @error('email') is-danger @enderror" id="email" type="email" name="email" value="{{ $user->email }}" required autocomplete="off" value="{{ $user->email }}">
                    <span class="icon is-small is-right">
                <i class="fa fa-user"></i>
              </span>
                    {{-- Email error --}}
                    @error('email')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror

                </div>
            </div>

            <div class="field">
                <label class="label">Name</label>
                <div class="control has-icons-right">
                    <input class="input @error('name') is-danger @enderror" id="name" type="text" name="name" value="{{ $user->name }}" required autocomplete="off" value="{{ $user->email }}">
                    <span class="icon is-small is-right">
                <i class="fa fa-user"></i>
              </span>
                    {{-- Email error --}}
                    @error('name')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror

                </div>
            </div>

            <label class="label">Roles</label>
            @foreach($roles as $role)

                <div class="field">
                    <label class="checkbox">
                        <input type="checkbox" name="roles[]" value="{{ $role->id }}"
                        @if($user->roles->pluck('id')->contains($role->id)) checked @endif>
                        <label>{{ $role->name }}</label>
                    </label>
                </div>
            @endforeach
            <button type="submit" class="button is-primary">Save</button>
        </form>
    </div>
</div>
@endsection
