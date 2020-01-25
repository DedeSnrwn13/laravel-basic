@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-body">
        <h2>Hello {{ Auth::user()->name }}</h2>
        <h5>You are login with user account</h5>
    </div>
</div>
@endsection