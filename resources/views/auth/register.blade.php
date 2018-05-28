@extends('layouts.app')

@section('content')
                    <form class="m-login__form m-form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group m-form__group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <input id="name" type="text" class="form-control m-input" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group m-form__group{{ $errors->has('email') ? ' has-error' : '' }}">
                               <input id="email" type="email" placeholder="Email ID" class="form-control m-input" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group m-form__group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" placeholder="Password" type="password" class="form-control m-input" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group m-form__group">
                                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control m-input" name="password_confirmation" required>
                        </div>

                        <div class="m-login__form-action">
                                <button type="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
                                    Register
                                </button>
                        </div>
                    </form>
@endsection
