<?php
// Comunicação com o Banco de dados
$mysqli = mysqli_connect('localhost','root', 'senaisp', 'codigoseletras');

// Segurança em buscar valores no Banco
$columns = array('titulo','ano_publicacao','preco');

// Trazer conteúdo do Banco
$column = isset($_GET['column']) && in_array($_GET['column'], $columns) ? $_GET['column'] : $columns[0];

// Trazer dados em ordem e decrescente
$sort_order = isset($_GET['order']) && strtolower($_GET['order']) == 'desc' ? 'DESC' : 'ASC';

// Verificar dados no Banco
if ($result = $mysqli->query('SELECT * FROM livros ORDER BY ' . $column . '' . $sort_order)) {
    // Várias para a tabela
    $up_or_down = str_replace(array('ASC','DESC'), array('up','down'), $sort_order);
    $asc_or_desc = $sort_order == 'ASC' ? 'desc' : 'asc';
    $add_class = ' class="highlight"';
    ?>

    <!DOCTYPE html>
    <html>
        <head>
            <title> Banco de Dados - Códigos e Letras</title>
            <meta charset="utf-8">
        </head>
        <body>
            <table>
                <tr>
                    <th><a href="index.php?column=titulo&order=<?php echo $asc_or_desc; ?>">Título <?php echo $column == 'titulo' ? '-' . $up_or_down : ''; ?> </th>

                       <th><a href="index.php?column=ano&order=<?php echo $asc_or_desc; ?>">Ano <?php echo $column == 'ano_publicacao' ? '-' . $up_or_down : ''; ?> </th>

                          <th><a href="index.php?column=preco&order=<?php echo $asc_or_desc; ?>">Preço <?php echo $column == 'preco' ? '-' . $up_or_down : ''; ?> </th>
                </tr>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td <?php echo $column == 'titulo' ? $add_class : ''; ?>> <?php echo $row['titulo']; ?> </td>

                        <td <?php echo $column == 'ano_publicacao' ? $add_class : ''; ?>> <?php echo $row['ano_publicacao']; ?> </td>

                        <td <?php echo $column == 'preco' ? $add_class : ''; ?>> <?php echo $row['preco']; ?> </td>
                    </tr>
                    <?php endwhile;?>
            </table>
        </body>
    </html>
    <?php $result->free();
}
?>



