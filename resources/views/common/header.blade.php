<div class="row">
    <div class="col-sm-7 col-xs-12">
        <legend>{{ $name }}</legend>
    </div>
    <div class="col-sm-5 col-xs-12">
        <!-- Search Task Form -->
        <form action="{{ $url }}/search" method="POST" class="w100 h30">
            {{ csrf_field() }}
            <div class="Grid m0 p0 w100">
                <div class="Grid-cell w100">
                  <div class="form-group m0 p0 h30">
                      <input type="text" name="search" placeholder="Pesquisar por..." class="form-control center m0 p0 h30">
                  </div>
                </div>

                <div class="Grid-cell-30">
                    @if($isFiltred)
                        <a href="{{ $url }}"
                            rel="tooltip" title="Limpar a pesquisa"
                            class="btn btn-danger btn-just-icon ml-24">
                            <i class="material-icons">close</i>
                        </a>
                    @else
                      <button type="submit"
                          rel="tooltip" title="Executar a pesquisa"
                          class="btn btn-info btn-just-icon ml-24">
                          <i class="material-icons">search</i>
                      </button>
                    @endif
                </div>

            </div>
        </form>
    </div>
</div>
