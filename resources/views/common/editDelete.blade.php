<table>
    <tr>
        <td>
            <a href="{{ $url }}/edit" rel="tooltip" title="Alterar este registro"
                class="btn btn-success btn-just-icon">
                <i class="material-icons">edit</i>
            </a>
        </td>
        <td>
            <form action="{{ $url }}" method="POST" class="form-delete">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" data-toggle="confirmation" rel="tooltip" title="Excluir este registro"
                    class="btn btn-danger btn-just-icon">
                    <i class="material-icons">delete_forever</i>
                </button>
            </form>
        </td>
    </tr>
</table>
