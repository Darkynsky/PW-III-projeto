<table>
    <tr>
        <th>Nome do produto</th>
        <th>Quantidade</th>
    </tr>
    @foreach($results as $v)
    <tr>
        <td>
            {{ $v->produto }}
        </td>
        <td>
            {{ $v->total_qtdProduto }}
        </td>
    </tr>
    @endforeach
</table>
