<!-- Modal Core -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="modal-body center">
                <h4><legend>Confirme a exclusão?</legend></h4>
            </div>

            <div class="modal-footer center">

                <form action="{{ $url }}" method="POST" class="form-delete">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-md btn-raised btn-danger btn-default-size">
                        <i class="material-icons">delete_forever</i> Excluir
                    </button>
                    <button type="button" data-dismiss="modal"
                        class="btn btn-md btn-raised btn-default btn-default-size" >
                        <i class="material-icons">clear</i> Cancelar
                    </button>
                </form>

            </div>

        </div>
    </div>
</div>
