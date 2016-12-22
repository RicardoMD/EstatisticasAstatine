<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h2> Estatísticas - Astatine Chernobyl</h2><br/>
<div id="search">
 <h5>Verifique as estatísticas de um jogador</h5>
 <form action="inc/player.php" method="get" enctype="multipart/form-data">
  <input type="text" name="player" id="player" placeholder="Nick do Player"><br/><br/>
  <input type="submit" name="verificar" value="verificar"><br/>

 </form>
</div>
<?php
header("Content-Type: text/html; charset=UTF-8", true);

include "inc/tabelas.php";
 $tabela1=new tabela();
 $tabela2=new tabela();
 $tabela3=new tabela();
 $tabela4=new tabela();
 $tabela5=new tabela();
 $tabela6=new tabela();
 $tabela7=new tabela();
 $tabela8=new tabela();
 $tabela9=new tabela();
 $tabela10=new tabela();
 $tabela11=new tabela();
 $tabela12=new tabela();
 $tabela13=new tabela();
 $tabela14=new tabela();
 $tabela15=new tabela();
echo "<table><tr>";
$tabela1->gerarTabelaFloat("Mais Ricos","","Nome","Astatos","SELECT username,balance FROM iConomy ORDER BY balance DESC LIMIT 10");
$tabela2->gerarTabela("Skills Geral","","Nome","Nível","SELECT mcmmo_users.user,( mcmmo_skills.taming + mcmmo_skills.mining
         + mcmmo_skills.woodcutting
         + mcmmo_skills.repair + mcmmo_skills.unarmed
         + mcmmo_skills.alchemy
         + mcmmo_skills.herbalism
         + mcmmo_skills.excavation
         + mcmmo_skills.archery + mcmmo_skills.swords
         + mcmmo_skills.axes + mcmmo_skills.acrobatics
         + mcmmo_skills.fishing ) AS power_total FROM mcmmo_users INNER JOIN  mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id ORDER BY power_total DESC LIMIT 10");
$tabela3->gerarTabela("Domador","","Nome","Nível","SELECT mcmmo_users.user,mcmmo_skills.taming FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id ORDER by mcmmo_skills.taming DESC LIMIT 10");
$tabela4->gerarTabela("Mineração","","Nome","Nível","SELECT mcmmo_users.user,mcmmo_skills.mining FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id ORDER by mcmmo_skills.mining DESC LIMIT 10");

echo "</tr></table>";
echo "<table><tr>";
$tabela5->gerarTabela("Lenhador","","Nome","Nível","SELECT mcmmo_users.user,mcmmo_skills.woodcutting FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id ORDER by mcmmo_skills.woodcutting DESC LIMIT 10");
$tabela6->gerarTabela("Reparação","","Nome","Nível","SELECT mcmmo_users.user,mcmmo_skills.repair FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id ORDER by mcmmo_skills.repair DESC LIMIT 10");
$tabela7->gerarTabela("Desarmado","","Nome","Nível","SELECT mcmmo_users.user,mcmmo_skills.unarmed FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id ORDER by mcmmo_skills.unarmed DESC LIMIT 10");
$tabela8->gerarTabela("Herbalismo","","Nome","Nível","SELECT mcmmo_users.user,mcmmo_skills.herbalism FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id ORDER by mcmmo_skills.herbalism DESC LIMIT 10");

echo "</tr></table>";
echo "<table><tr>";
$tabela9->gerarTabela("Escavação","","Nome","Nível","SELECT mcmmo_users.user,mcmmo_skills.excavation FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id ORDER by mcmmo_skills.excavation DESC LIMIT 10");
$tabela10->gerarTabela("Arqueiro","","Nome","Nível","SELECT mcmmo_users.user,mcmmo_skills.archery FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id ORDER by mcmmo_skills.archery DESC LIMIT 10");
$tabela11->gerarTabela("Espadas","","Nome","Nível","SELECT mcmmo_users.user,mcmmo_skills.swords FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id ORDER by mcmmo_skills.swords DESC LIMIT 10");
$tabela12->gerarTabela("Machado","","Nome","Nível","SELECT mcmmo_users.user,mcmmo_skills.axes FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id ORDER by mcmmo_skills.axes DESC LIMIT 10");
echo "</tr></table>";
echo "<table><tr>";
$tabela13->gerarTabela("Acrobacia","","Nome","Nível","SELECT mcmmo_users.user,mcmmo_skills.acrobatics FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id ORDER by mcmmo_skills.acrobatics DESC LIMIT 10");
$tabela14->gerarTabela("Pescaria","","Nome","Nível","SELECT mcmmo_users.user,mcmmo_skills.fishing FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id ORDER by mcmmo_skills.fishing DESC LIMIT 10");
$tabela15->gerarTabela("Alquimia","","Nome","Nível","SELECT mcmmo_users.user,mcmmo_skills.alchemy FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id ORDER by mcmmo_skills.alchemy DESC LIMIT 10");
echo "</tr></table>";








?>

</body>
</html>