@extends('layouts.app')

@section('content')
    <div class="col-sm-12">

        <div class="col-sm-6">
            @include('visits.list', ['visits' => $visits])
        </div>

        <div class="col-sm-6">
            @if ($visit->exists)
                @include('visits.edit', ['visit' => $visit])
            @else
                @include('visits.create')
            @endif
        </div>

    </div>
@endsection
