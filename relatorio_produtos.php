<?php
$produtos = [
    [
        'nome' => 'patinho ralado',
        'categoria' => 'carnes',
        'preco' => '25.90',
        'descricao' => 'patinho ralado na hora'
    ],
    [
        'nome' => 'Arroz',
        'categoria' => 'grão',
        'preco' => '20.90',
        'descricao' => 'Arroz Camil'
    ],
    [
        'nome' => 'carne de  panela',
        'categoria' => 'frios',
        'preco' => '25.70',
        'descricao' => 'carne de panela sem musculo'
    ],
    [
        'nome' => 'iorgut',
        'categoria' => 'laticinios',
        'preco' => '2.90',
        'descricao' => 'iorgut pequeno'
    ],
    [
        'nome' => 'desinfetante',
        'categoria' => 'limpeza',
        'preco' => '13.90',
        'descricao' => 'detergente ipê'
    ]
];

require_once '../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();


$html = '
<h1>Relatório de Produtos</h1>
<p>Data de geração: 02/11/24 </p>
<table border="1" style="width: 100%; border-collapse: collapse;">
    <thead>
        <tr style="background-color: #f2f2f2;">
            <th>Nome</th>
            <th>Categoria</th>
            <th>Preço</th>
            <th>Descrição</th>
        </tr>
    </thead>
    <tbody>';

foreach ($produtos as $produto) {
    $html .= '
        <tr>
            <td>' . $produto['nome'] . '</td>
            <td>' . $produto['categoria'] . '</td>
            <td>' . $produto['preco'] . '</td>
            <td>' . $produto['descricao'] . '</td>
        </tr>';
}
// Fecha a tabela e finaliza o HTML
$html .= '</tbody></table>';


$mpdf->WriteHTML($html);
$mpdf->Output();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>