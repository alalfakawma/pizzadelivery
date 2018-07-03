@extends('layouts.app')

@section('content')

<div class="title is-2 has-text-centered has-text-success">Login</div>
<div class="columns">
    <div class="column"></div>
    <div class="column is-half">
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="field is-horizontal">
              <div class="field-label is-normal">
                <label class="label">Username</label>
              </div>
              <div class="field-body">
                <div class="field">
                  <p class="control is-expanded">
                    <input class="input" type="text" name="username" placeholder="Username" value="{{ old('username') }}">
                  </p>
                </div>
              </div>
            </div>

            <div class="field is-horizontal">
              <div class="field-label is-normal">
                <label class="label">Password</label>
              </div>
              <div class="field-body">
                <div class="field">
                  <p class="control is-expanded">
                    <input class="input" type="password" name="password" placeholder="Password">
                  </p>
                </div>
              </div>
            </div>

            <div class="field is-horizontal">
              <div class="field-label">
                <label class="label">Remember me</label>
              </div>
              <div class="field-body">
                <div class="field">
                  <div class="control">
                    <label class="checkbox">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        Yes
                    </label>
                  </div>
                </div>
              </div>
            </div>

            @if ($errors->any())
                <div class="field is-horizontal">
                  <div class="field-label">
                    <label class="label"></label>
                  </div>
                  <div class="field-body">
                    <div class="field">
                      <div class="control">
                        <div class="title is-6 has-text-danger">These credentials do not match our record.</div>
                      </div>
                    </div>
                  </div>
                </div>
            @endif

            <div class="field is-horizontal">
              <div class="field-label">
                <!-- Left empty for spacing -->
              </div>
              <div class="field-body">
                <div class="field">
                  <div class="control">
                    <button class="button is-primary">
                      Login
                    </button>
                  </div>
                </div>
              </div>
            </div>
        </form>
    </div>
    <div class="column"></div>
</div>
@endsection
