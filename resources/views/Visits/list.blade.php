<div class="card">
    <div class="content">
        @include('common.header', ['name' => 'Visitas', 'url' => '/visits'])

        @if (count($visits) > 0)

            <table class="table table-striped table-hover table-responsive">
                <thead>
                    <th>
                        <i class="material-icons text-default">done</i>
                        Nome
                    </th>
                    <th class="text-right">Visitado em</th>
                </thead>
                <tbody>

                    @foreach ($visits as $visit)
                        <tr data-href="/visit/{{ $visit->id }}/edit" rel="tooltip" title="Clique para alterar este registro">

                            <!-- name -->
                            <td>
                                {!! $visit->visitedTag() !!}{{ $visit->name }}
                            </td>

                            <!-- name -->
                            <td class="text-right">
                                {{ $visit->update_at }}
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <div class="center"> {!! $visits->links() !!} </div>

        @endif

    </div>
</div>
