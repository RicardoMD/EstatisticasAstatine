
<?php
class tabela {
     public $titulo;
     public $c1_nome;
     public $c2_qtde;
     public $query;



 function gerarTabela($tit,$c1,$c2,$query)
 {
   include "conexao.php";
     $this->titulo=$tit;
     $this->c1_nome=$c1;
     $this->c2_qtde=$c2;
     $this->query=$query;


     /* $query = "SELECT username,balance FROM iconomy ORDER BY balance DESC LIMIT 10";*/

      if ($stmt = mysqli_prepare($link, $query)) {

          mysqli_stmt_execute($stmt);
          mysqli_stmt_bind_result($stmt, $nome, $balance);


          echo "<td style='padding: 20px;'>";
          echo "<table border='1' width='250' cellpadding=\"4\" cellspacing=\"0\" >";
          echo "<div align='center'> Top 10 - $tit </div>";
          echo "<tr><td><strong>".$c1."</strong></td><td><strong>".$c2."</strong></td></tr>";

          while (mysqli_stmt_fetch($stmt)) {

              echo "<tr><td><img style='vertical-align: middle;' src='http://cravatar.eu/head/$nome/128.png' width='32' height='32'> ".$nome."</td><td>$balance</td>";

          }

          echo "</table></td>";

          mysqli_stmt_close($stmt);
          mysqli_close($link);
      }
 }

}

