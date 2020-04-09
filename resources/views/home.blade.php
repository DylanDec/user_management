@extends('layouts.app')

@section('content')
    <div class="col">
        <div class="box">
            <div class="heading">Welcome, {{ Auth::user()->name }}</div>
        </div>
    </div>
@endsection
