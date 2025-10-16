<?php

if (empty($produtos)) {
    echo "<p>Nenhuma Forma de pagamento encontrado.</p>";
    echo "<a href='View/FormaPagamento/cadastrarpagamento.php'>Cadastrar</a>";
    return;
}

        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr><td> <a href='View/FormaPagamento/cadastrarpagamento.php'>Cadastrar</a></td></tr>";
        echo "<tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Tipo</th> 
        <th>Ações</th>
        </tr>";

        foreach ($FormaPagamentos as $FormaPagamento) {
            $id = $FormaPagamento['id'];

            echo "<tr>";
            echo "<td>{$id}</td>";
            echo "<td>{$FormaPagamento['nome ']}</td>";
            echo "<td>{$FormaPagamento['tipo']}</td>";
            echo "<td>
                <a href='View/FormaPagamento/editarpagamentoo.php?id={$id}'>Editar</a> |
                <a href='View/FormaPagamento/deletarpagamento.php?id={$id}' onclick=\"return confirm('tem certeza que deseja excluir este pagamento?')\">Deletar</a> |
                </td>"; //pra confirmar a exclusão
            echo "</tr>";
        }

        echo "</table>";
