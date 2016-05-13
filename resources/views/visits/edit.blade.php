<div class="card">
    <div class="content">
        <legend>Alterar visita</legend>

        <form action="/visit/{{ $visit->id }}" method="POST" class="form">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <fieldset>
                @include('visits.fields')
            </fieldset>
            @include('common.edit', ['url' => '/visits'])
        </form>

    </div>
</div>
