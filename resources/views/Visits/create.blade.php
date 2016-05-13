<div class="card">
    <div class="content">
        <legend>Incluir nova visita</legend>

        <form action="/visit" method="POST" class="form">
            {{ csrf_field() }}
            <fieldset>
                @include('visits.fields')
            </fieldset>
            @include('common.create', ['url' => '/visits'])
        </form>

    </div>
</div>
