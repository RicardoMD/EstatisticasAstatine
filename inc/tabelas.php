
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


          echo "<td style='padding: 15px; background-color: #000000'>";
          echo "<div align='center' class='titulotabela'> Top 5 - $tit </div>";
          echo "<table border='2' class='table-responsive'><thead>";
          echo "<tr style='text-align: center;'><th>$c_0</th><th class='titc'><strong>".$c1."</strong></th><th class='titc'><strong>".$c2."</strong></td></tr></thead><tbody>";
          $i=1;
          while (mysqli_stmt_fetch($stmt)) {

              echo "<tr><td style='text-align: center'>$i º</td><td><img style='vertical-align: middle; padding:5px 10px 5px 5px;' src='http://cravatar.eu/head/$nome/128.png' width='32' height='32'>   <a name='player' href='inc/player.php?player=$nome&verificar=verificar''>$nome</a></td><td style='text-align: center'>$balance</td>";
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

                echo "  <td style='padding-left: 5px;'><strong>$tit</strong></td>";
                echo "  <td style='padding-left: 5px;'>$balance</td>";
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

                echo "  <td style='padding-left: 5px;'><strong>$tit</strong></td>";
                echo "<td style='padding-left: 5px;'>".number_format($balance,2,",",".")."</td>";
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

            echo "<td style='padding: 15px; background-color: #000000'>";
            echo "<div align='center' class='titulotabela'> Top 5 - $tit </div>";
            echo "<table border='2' class='table-responsive'><thead>";
            echo "<tr style='text-align: center;'><th>$c_0</th><th class='titc'><strong>".$c1."</strong></th><th class='titc'><strong>".$c2."</strong></td></tr></thead><tbody>";
            $i=1;
            while (mysqli_stmt_fetch($stmt)) {

                echo "<tr><td style='text-align: center'>$i º</td><td><img style='vertical-align: middle; padding:5px 10px 5px 5px;' src='http://cravatar.eu/head/$nome/128.png' width='32' height='32'><a name='player' href='inc/player.php?player=$nome&verificar=verificar'>$nome</a>";
                echo "<td style='text-align: center'>".number_format($balance,2,",",".")."</td>";

                $i++;
            }

            echo "</tbody></table></td>";

            mysqli_stmt_close($stmt);
            mysqli_close($link);
        }


    }

    function gerarTabelaTempo($tit,$c_0,$c1,$c2,$query)
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



            echo "<td style='padding: 15px; background-color: #000000'>";
            echo "<div align='center' class='titulotabela'> Top 5 - $tit </div>";
            echo "<table border='2' class='table-responsive'><thead>";
            echo "<tr style='text-align: center;'><th>$c_0</th><th class='titc'><strong>".$c1."</strong></th><th class='titc'><strong>".$c2."</strong></td></tr></thead><tbody>";
            $i=1;
            while (mysqli_stmt_fetch($stmt)) {
                $time = $balance * 60;
                $days = floor($time / (24*60*60));
                $hours = floor(($time - ($days*24*60*60)) / (60*60));
                $minutes = floor(($time - ($days*24*60*60)-($hours*60*60)) / 60);
                $seconds = ($time - ($days*24*60*60) - ($hours*60*60) - ($minutes*60)) % 60;


                echo "<tr><td style='text-align: center'>$i º</td><td><img style='vertical-align: middle; padding:5px 10px 5px 5px;' src='http://cravatar.eu/head/$nome/128.png' width='32' height='32'><a name='player' href='inc/player.php?player=$nome&verificar=verificar'>$nome</a>";

                echo "<td style='text-align: center'>".$days."d "."$hours". "h " ."$minutes". "m "."</td>";

                $i++;
            }

            echo "</tbody></table></td>";

            mysqli_stmt_close($stmt);
            mysqli_close($link);
        }


    }

    function gerarPlayerTempo($tit,$query)
    {
        include "conexao.php";

        $this->query=$query;
        $this->titulo=$tit;


        if ($stmt = mysqli_prepare($link, $query)) {

            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $nome, $balance);



            while (mysqli_stmt_fetch($stmt)) {

                $time = $balance * 60;
                $days = floor($time / (24*60*60));
                $hours = floor(($time - ($days*24*60*60)) / (60*60));
                $minutes = floor(($time - ($days*24*60*60)-($hours*60*60)) / 60);
                $seconds = ($time - ($days*24*60*60) - ($hours*60*60) - ($minutes*60)) % 60;

                echo "  <td style='padding-left: 5px;'><strong>$tit</strong></td>";
                echo "<td>".$days."d "."$hours". "h " ."$minutes". "m "."</td>";
                echo "</tr>";

            }


            mysqli_stmt_close($stmt);
            mysqli_close($link);
        }
    }


}

