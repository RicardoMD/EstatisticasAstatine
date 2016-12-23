<?php
include "_header.inc.php";
include "tabelas.php";
include "conexao.php";

header("Content-Type: text/html; charset=UTF-8", true);

if (isset($_GET['verificar'])=='verificar') {
    $player = $_GET['player'];

    if (empty($player)) {
        echo "Digite um Nick na caixa de texto.";
    } else {
        $query = "SELECT nick FROM ast_auth WHERE nick='$player'";
        $result = mysqli_query($link, $query);
        $busca = mysqli_num_rows($result);

        if ($busca > 0) {

            $tabela1 = new tabela();
            $tabela2 = new tabela();
            $tabela3 = new tabela();
            $tabela4 = new tabela();
            $tabela5 = new tabela();
            $tabela6 = new tabela();
            $tabela7 = new tabela();
            $tabela8 = new tabela();
            $tabela9 = new tabela();
            $tabela10 = new tabela();
            $tabela11 = new tabela();
            $tabela12 = new tabela();
            $tabela13 = new tabela();
            $tabela14 = new tabela();
            $tabela15 = new tabela();
            $tabela16 = new tabela();
            $tabela17 = new tabela();

            echo "<div align='center'>";
            echo "<div>";
            echo "<p style='font-size: 20px'><strong>Jogador: </strong>" . $player . "</p>";
            echo "</div>";
            echo "<table border='2' class='table-striped' id='tabelapl'>";
            echo "<tr>";
            echo "<td rowspan='17'><img style='padding-left: 23px;' src='http://www.minecraft-skin-viewer.net/3d.php?layers=true&aa=false&a=0&w=0&wt=10&abg=330&abd=40&ajg=340&ajd=20&ratio=13&format=png&login=$player&headOnly=false&displayHairs=true&randomness=309'></td>";
            $tabela1->gerarPlayerFloat("Astatos", "SELECT username,balance FROM iConomy WHERE username ='$player'");
            echo "<tr>";
            $tabela17->gerarPlayerTab("Registrou-se em", "SELECT nick, last_login FROM `ast_auth_multi` WHERE nick='$player' LIMIT 1");
            echo "<tr>";
            $tabela16->gerarPlayerTab("Qtde de Logins", "SELECT nick, Count(last_login) AS Total FROM ast_auth_multi WHERE nick='$player'");
            echo "<tr>";
            $tabela2->gerarPlayerTab("Nível na Skill Domador", "SELECT mcmmo_users.user,mcmmo_skills.taming FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id WHERE mcmmo_users.user='$player'");
            echo "<tr>";
            $tabela3->gerarPlayerTab("Nível na Skill Mineração", "SELECT mcmmo_users.user,mcmmo_skills.mining FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id WHERE mcmmo_users.user='$player'");
            echo "<tr>";
            $tabela4->gerarPlayerTab("Nível na Skill Lenhador", "SELECT mcmmo_users.user,mcmmo_skills.woodcutting FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id WHERE mcmmo_users.user='$player'");
            echo "<tr>";
            $tabela5->gerarPlayerTab("Nível na Skill Reparação", "SELECT mcmmo_users.user,mcmmo_skills.repair FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id WHERE mcmmo_users.user='$player'");
            echo "<tr>";
            $tabela6->gerarPlayerTab("Nível na Skill Desarmado", "SELECT mcmmo_users.user,mcmmo_skills.unarmed FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id WHERE mcmmo_users.user='$player'");
            echo "<tr>";
            $tabela7->gerarPlayerTab("Nível na Skill Herbalismo", "SELECT mcmmo_users.user,mcmmo_skills.herbalism FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id WHERE mcmmo_users.user='$player'");
            echo "<tr>";
            $tabela8->gerarPlayerTab("Nível na Skill Escavação", "SELECT mcmmo_users.user,mcmmo_skills.excavation FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id WHERE mcmmo_users.user='$player'");
            echo "<tr>";
            $tabela9->gerarPlayerTab("Nível na Skill Arqueiro", "SELECT mcmmo_users.user,mcmmo_skills.archery FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id WHERE mcmmo_users.user='$player'");
            echo "<tr>";
            $tabela10->gerarPlayerTab("Nível na Skill Espadas", "SELECT mcmmo_users.user,mcmmo_skills.swords FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id WHERE mcmmo_users.user='$player'");
            echo "<tr>";
            $tabela11->gerarPlayerTab("Nível na Skill Machado", "SELECT mcmmo_users.user,mcmmo_skills.axes FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id WHERE mcmmo_users.user='$player'");
            echo "<tr>";
            $tabela12->gerarPlayerTab("Nível na Skill Acrobacia", "SELECT mcmmo_users.user,mcmmo_skills.acrobatics FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id WHERE mcmmo_users.user='$player'");
            echo "<tr>";
            $tabela13->gerarPlayerTab("Nível na Skill Pescaria", "SELECT mcmmo_users.user,mcmmo_skills.fishing FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id WHERE mcmmo_users.user='$player'");
            echo "<tr>";
            $tabela14->gerarPlayerTab("Nível na Skill Alquimia", "SELECT mcmmo_users.user,mcmmo_skills.alchemy FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id WHERE mcmmo_users.user='$player'");
            echo "<tr>";
            $tabela15->gerarPlayerTab("Total nas Skills", "SELECT mcmmo_users.user,( mcmmo_skills.taming + mcmmo_skills.mining
         + mcmmo_skills.woodcutting
         + mcmmo_skills.repair + mcmmo_skills.unarmed
         + mcmmo_skills.alchemy
         + mcmmo_skills.herbalism
         + mcmmo_skills.excavation
         + mcmmo_skills.archery + mcmmo_skills.swords
         + mcmmo_skills.axes + mcmmo_skills.acrobatics
         + mcmmo_skills.fishing ) AS power_total FROM mcmmo_users INNER JOIN  mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id WHERE mcmmo_users.user='$player'");
            echo "</table>";
            echo "</div>";
            echo "</tr></table>";

        }else{
            echo " O jogador $player não possuí conta registrada no servidor Chernobyl";
        }
    }


}
echo "<br/><br/>";
echo "<div align='center'> <a style='color: blue; font-size: 16px;' href='../index.php'>Voltar</a></div>";
include "_footer.inc.php";
?>
