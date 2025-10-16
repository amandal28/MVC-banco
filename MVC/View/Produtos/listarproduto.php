<?php

if (empty($produtos)) {
    echo "<p>Nenhum produto encontrado.</p>";
    echo "<a href='View/Produtos/cadastrarproduto.php'>Cadastrar</a>";
    return;
}

        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr><td> <a href='View/Produto/cadastrarproduto.php'>Cadastrar</a></td></tr>";
        echo "<tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Quantidade</th>
        <th>Código de Barras</th>
        <th>Preço</th> 
        <th>Ações</th>
        </tr>";

        foreach ($produtos as $produto) {
            $id = $produto['id'];

            echo "<tr>";
            echo "<td>{$id}</td>";
            echo "<td>{$produto['nome ']}</td>";
            echo "<td>{$produto['descricao']}</td>";
            echo "<td>{$produto['quantidade']}</td>";
            echo "<td>{$produto['codigo']}</td>";
            echo "<td>{$produto['preco']}</td>";
            echo "<td>
                <a href='View/produto/editarproduto.php?id={$id}'>Editar</a> |
                <a href='View/produto/deletarproduto.php?id={$id}' onclick=\"return confirm('tem certeza que deseja excluir este produto?')\">Deletar</a> |
                </td>"; //pra confirmar a exclusão
            echo "</tr>";
        }

        echo "</table>";

