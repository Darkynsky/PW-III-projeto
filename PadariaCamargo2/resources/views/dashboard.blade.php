
<table>
    <tr>
        <th>id produto</th>
        <th>quantidade</th>
    </tr>
    @foreach($sql as $v)
    <tr>
        <td>
            {{$v->idProduto}}
        </td>
        <td>
            {{$v->qtdProduto}}
        </td>
        @endforeach
    </tr>
</table>