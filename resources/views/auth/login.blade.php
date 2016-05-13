@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <div class="card">
                <div class="content">
                    <legend>Entrar</legend>

                    <form class="form" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group label-floating {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label class="control-label">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control">

                            @include('common.hasError',['field' => 'email'])
                        </div>

                        <div class="form-group label-floating {{ $errors->has('password') ? 'has-error' : '' }}">
                            <label class="control-label">Senha</label>
                            <input type="password" name="password" class="form-control">

                            @include('common.hasError',['field' => 'password'])
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-raised btn-primary">
                                <i class="material-icons">input</i> Entrar
                            </button>
                            {{--
                             <a class="btn btn-link pull-right" href="{{ url('/password/reset') }}">
                                Esqueceu sua senha?
                            </a>
                             --}}
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
@endsection
