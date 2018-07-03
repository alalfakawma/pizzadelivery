@extends('layouts.app')

@section('content')
<div class="panel">
    <div class="panel-heading">
        <div class="title is-6 has-text-primary">
            Welcome! {{ (Auth::check()) ? Auth::user()->username : "" }}
        </div>
    </div>
    @if (Auth::check())
        <div class="has-text-success">
            You are logged in!
        </div>
    @else
        <div class="has-text-info">
            Please register or login to order a pizza!
        </div>
    @endif
</div>
@endsection
