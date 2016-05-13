@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">

        <div class="card">
            <div class="content">
                <legend>Criar nova conta</legend>

                <form class="form" role="form" method="POST" action="{{ url('/register') }}">
                    {!! csrf_field() !!}

                    <!-- name -->
                    <div class="form-group label-floating {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label class="control-label">Nome</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                        @include('common.hasError',['field' => 'name'])
                    </div>

                    <!-- email -->
                    <div class="form-group label-floating {{ $errors->has('email') ? 'has-error' : '' }}">
                        <label class="control-label">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                        @include('common.hasError',['field' => 'email'])
                    </div>

                    <!-- password -->
                    <div class="form-group label-floating {{ $errors->has('password') ? 'has-error' : '' }}">
                        <label class="control-label">Senha</label>
                        <input type="password" class="form-control" name="password">

                        @include('common.hasError',['field' => 'password'])
                    </div>

                    <!-- password_confirmation -->
                    <div class="form-group label-floating {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                        <label class="control-label">Confirmação da senha</label>
                        <input type="password" class="form-control" name="password_confirmation">

                        @include('common.hasError',['field' => 'password_confirmation'])
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-raised btn-primary">
                            <i class="material-icons">person_add</i> Cadastrar
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
@endsection
