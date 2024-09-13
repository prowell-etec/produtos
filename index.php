<?php 
// Inclui o arquivo 'products.php', que contém o array de produtos.
// Isso permite acessar a variável $products neste arquivo.
include 'products.php'; 
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <!-- Definição de meta tags e configuração da codificação e viewport para responsividade -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <!-- Vinculação ao arquivo CSS externo -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Container principal que centraliza o conteúdo na página -->
    <div class="container">
        <h1>Lista de Produtos</h1>
        <!-- Div que contém a lista de produtos -->
        <div class="product-list">
            <!-- Looping através do array de produtos para gerar os itens na lista -->
            <?php foreach ($products as $product): ?>
                <!-- Cada produto é mostrado dentro de um div com a classe 'product-item' -->
                <div class="product-item">
                    <!-- Exibe o nome do produto -->
                    <h2><?php echo $product['name']; ?></h2>
                    <!-- Exibe o preço do produto, formatado em R$ com 2 casas decimais -->
                    <p>Preço: R$ <?php echo number_format($product['price'], 2, ',', '.'); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
