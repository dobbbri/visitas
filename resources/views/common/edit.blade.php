<div class="form-group">
    <button type="submit"
        rel="tooltip" title="Gravar as alterações deste registo"
        class="btn btn-sm btn-raised btn-primary btn-default-size">
        <i class="material-icons">edit</i> Gravar
    </button>

    <a href="{{ $url }}"
        rel="tooltip" title="Cancenlar a alteração"
        class="btn btn-sm btn-raised btn-default btn-default-size">
        <i class="material-icons">clear</i> Cancelar
    </a>

    <button type="button" data-toggle="modal" data-target="#myModal"
        rel="tooltip" title="Excluir este registo"
        class="btn btn-sm btn-raised btn-danger btn-default-size pull-right">
        <i class="material-icons">delete_forever</i> Excluir
    </button>
</div>
