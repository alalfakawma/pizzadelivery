@extends('layouts.app')

@section('content')
<div class="panel">
    @auth
        <div class="panel-heading">
            <div class="title is-6 has-text-primary">
                Welcome!
            </div>
        </div>
        <div class="has-text-success">
            You are logged in!
        </div>
    @else
        <div class="has-text-info">
            Please register or login to order a pizza!
        </div>
    @endauth
</div>
@endsection
