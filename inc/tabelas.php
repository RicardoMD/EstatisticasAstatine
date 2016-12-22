
<?php
class tabela {
     public $titulo;
     public $c1_nome;
     public $c2_qtde;
     public $c_0;
     public $query;



 function gerarTabela($tit,$c_0,$c1,$c2,$query)
 {
   include "conexao.php";
     $this->titulo=$tit;
     $this->c_0=$c_0;
     $this->c1_nome=$c1;
     $this->c2_qtde=$c2;
     $this->query=$query;



      if ($stmt = mysqli_prepare($link, $query)) {

          mysqli_stmt_execute($stmt);
          mysqli_stmt_bind_result($stmt, $nome, $balance);


          echo "<td style='padding: 16px;'>";
          echo "<table border='1' width='300' cellpadding=\"3\" cellspacing=\"0\" >";
          echo "<div align='center'> Top 10 - $tit </div>";
          echo "<tr style='text-align: center;'><td>$c_0</td><td><strong>".$c1."</strong></td><td><strong>".$c2."</strong></td></tr>";
          $i=1;
          while (mysqli_stmt_fetch($stmt)) {

                  echo "<tr><td style='text-align: center'>$i º</td><td><img style='vertical-align: middle; padding-right: 10px; padding-left: 5px;' src='http://cravatar.eu/head/$nome/128.png' width='32' height='32'>   <a style='color: blue' name='player' href='inc/player.php?player=$nome&verificar=verificar''>$nome</a>  </td><td style='text-align: center'>$balance</td>";
              $i++;
          }

          echo "</table></td>";

          mysqli_stmt_close($stmt);
          mysqli_close($link);
      }
 }

    function gerarPlayerTab($tit,$query)
    {
        include "conexao.php";

        $this->query=$query;
        $this->titulo=$tit;


        if ($stmt = mysqli_prepare($link, $query)) {

            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $nome, $balance);



            while (mysqli_stmt_fetch($stmt)) {

                echo "  <td>$tit</td>";
                echo "  <td>$balance</td>";
                echo "</tr>";

            }


            mysqli_stmt_close($stmt);
            mysqli_close($link);
        }
    }


    function gerarPlayerFloat($tit,$query)
    {
        include "conexao.php";

        $this->query=$query;
        $this->titulo=$tit;


        if ($stmt = mysqli_prepare($link, $query)) {

            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $nome, $balance);



            while (mysqli_stmt_fetch($stmt)) {

                echo "  <td>$tit</td>";
                printf("  <td>%2.2f</td>",$balance);
                echo "</tr>";

            }


            mysqli_stmt_close($stmt);
            mysqli_close($link);
        }
    }

    function gerarTabelaFloat($tit,$c_0,$c1,$c2,$query)
    {
        include "conexao.php";
        $this->titulo=$tit;
        $this->c_0=$c_0;
        $this->c1_nome=$c1;
        $this->c2_qtde=$c2;
        $this->query=$query;



        if ($stmt = mysqli_prepare($link, $query)) {

            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $nome, $balance);


            echo "<td style='padding: 16px;'>";
            echo "<table border='1' width='300' cellpadding=\"3\" cellspacing=\"0\" >";
            echo "<div align='center'> Top 10 - $tit </div>";
            echo "<tr style='text-align: center;'><td>$c_0</td><td><strong>".$c1."</strong></td><td><strong>".$c2."</strong></td></tr>";
            $i=1;
            while (mysqli_stmt_fetch($stmt)) {

                echo "<tr><td style='text-align: center'>$i º</td><td><img style='vertical-align: middle; padding-right: 10px; padding-left: 5px;' src='http://cravatar.eu/head/$nome/128.png' width='32' height='32'>   <a style='color: blue' name='player' href='inc/player.php?player=$nome&verificar=verificar''>$nome</a>  </td>";
                printf("<td style='text-align: center'>%2.2f</td>",$balance);
                $i++;
            }

            echo "</table></td>";

            mysqli_stmt_close($stmt);
            mysqli_close($link);
        }
    }

}

