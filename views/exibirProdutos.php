<?php        
      require_once 'includes/cabecalho.inc.php';   
      require_once '../classes/produto.inc.php';
      require_once '../utils/funcoesUteis.php';
?>
<p>
<h1 class="text-center">Produtos do estoque</h1>
<p> 
<div class="table-responsive">
<table class="table table-light table-hover">
      <thead class="table-primary">
            <tr class="align-middle" style="text-align: center">
                <th witdh="10%">ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Data de Fabricação</th>
                <th>Preço unitário</th>
                <th>Em Estoque</th>
                <th>Fabricante</th>
                <th>Operação</th>
            </tr>
      </thead>
      <tbody class="table-group-divider">
      <?php
            $produtos = [];
            if(isset($_SESSION["allProdutos"])){
                  $produtos = $_SESSION["allProdutos"];
            // }else{
            //       header('Location: ../controlers/controlerProduto.php?pOpcao=2');
            // }

            foreach ($produtos as $prd) {
                  echo "<tr align='center'>";
                  echo "<td>"."$prd->produto_id"."</td>";
                  echo "<td><strong>"."$prd->nome"."</strong></td>";
                  echo "<td>"."$prd->resumo"."</td>";
                  echo "<td>". converterDataFromMySql($prd->data_fabricacao)."</td>";
                  echo "<td>"."$prd->preco"."</td>";
                  echo "<td>"."$prd->estoque"."</td>";
                  echo "<td>"."$prd->nome_fabricante"."</td>";
                  echo "<td><a href='../controlers/controlerProduto.php?pOpcao=4&pId=$prd->produto_id' class='btn btn-success btn-sm'>A</a> ";
                  echo "<a href='../controlers/controlerProduto.php?pOpcao=3&produto_id=$prd->produto_id' class='btn btn-danger btn-sm'>X</a></td>";
                  echo "</tr>";
                  }
            }
      ?>
      </tbody>  
</table>
</div>

<?php
       require_once 'includes/rodape.inc.php';
?>

