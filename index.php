<?php

echo "<html lang=\"en\">";
echo "<head>";
echo "<title>Estatísticas Astatine</title>";
echo "<link href='css/bootstrap.css' rel='stylesheet'>";
echo "<link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' rel='stylesheet'>";
echo "<link href='css/style.css' rel='stylesheet'>";
echo "<link href='https://fonts.googleapis.com/css?family=Lakki+Reddy' rel='stylesheet'>";
echo "</head>";
echo "<body>";
echo "<div class='logotipo' align='center'><img style='text-align: center' src='imagens/teste.jpg'></div>";

echo "<h1>Estatísticas - Servidor Chernobyl</h1>";
echo "<h6>Versão Beta</h6>";
echo"<form action='inc/player.php' method='get' enctype='multipart/form-data' class='form-horizontal'>

<legend>Verificar as Estatísticas de um Jogador</legend>
<div class='form-group'>
  <label class='col-md-4 control-label' for='player'></label>
  <div class='col-md-4'>
  <input id='player' name='player' type='text' placeholder='Nick do jogador' class='form-control input-md' required=''>
  </div>
</div>
<div class='form-group'>
  <label class='col-md-4 control-label' for='player'></label>
  <div class='col-md-4 text-center'>
    <button type='submit' name='verificar' value='Verificar' class='btn btn-primary'>Verificar</button>
  </div>
</div>

</form><hr><br/>";


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
 $tabela16=new tabela();
 $tabela17=new tabela();
echo "<table><tr class='active'>";
$tabela1->gerarTabelaFloat("Mais Ricos","","Nome","Astatos","SELECT username,balance FROM iConomy ORDER BY balance DESC LIMIT 5");
$tabela16->gerarTabela("Mais Conectou","","Nome","Quantidade","SELECT nick, Count(last_login) AS Total FROM ast_auth_multi GROUP BY nick ORDER BY Total DESC LIMIT 5;");
$tabela17->gerarTabelaTempo("Tempo Online","","Nome","Tempo","SELECT nick,time_online FROM ast_auth ORDER BY time_online DESC LIMIT 5");
$tabela2->gerarTabela("Skills Geral","","Nome","Nível","SELECT mcmmo_users.user,( mcmmo_skills.taming + mcmmo_skills.mining
         + mcmmo_skills.woodcutting
         + mcmmo_skills.repair + mcmmo_skills.unarmed
         + mcmmo_skills.alchemy
         + mcmmo_skills.herbalism
         + mcmmo_skills.excavation
         + mcmmo_skills.archery + mcmmo_skills.swords
         + mcmmo_skills.axes + mcmmo_skills.acrobatics
         + mcmmo_skills.fishing ) AS power_total FROM mcmmo_users INNER JOIN  mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id ORDER BY power_total DESC LIMIT 5");


echo "</tr></table>";
echo "<table><tr class='-warning'>";
$tabela4->gerarTabela("Mineração","","Nome","Nível","SELECT mcmmo_users.user,mcmmo_skills.mining FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id ORDER by mcmmo_skills.mining DESC LIMIT 5");
$tabela5->gerarTabela("Lenhador","","Nome","Nível","SELECT mcmmo_users.user,mcmmo_skills.woodcutting FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id ORDER by mcmmo_skills.woodcutting DESC LIMIT 5");
$tabela6->gerarTabela("Reparação","","Nome","Nível","SELECT mcmmo_users.user,mcmmo_skills.repair FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id ORDER by mcmmo_skills.repair DESC LIMIT 5");
$tabela8->gerarTabela("Herbalismo","","Nome","Nível","SELECT mcmmo_users.user,mcmmo_skills.herbalism FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id ORDER by mcmmo_skills.herbalism DESC LIMIT 5");

echo "</tr></table>";
echo "<table><tr>";
$tabela9->gerarTabela("Escavação","","Nome","Nível","SELECT mcmmo_users.user,mcmmo_skills.excavation FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id ORDER by mcmmo_skills.excavation DESC LIMIT 5");
$tabela10->gerarTabela("Arqueiro","","Nome","Nível","SELECT mcmmo_users.user,mcmmo_skills.archery FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id ORDER by mcmmo_skills.archery DESC LIMIT 5");
$tabela11->gerarTabela("Espadas","","Nome","Nível","SELECT mcmmo_users.user,mcmmo_skills.swords FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id ORDER by mcmmo_skills.swords DESC LIMIT 5");
$tabela12->gerarTabela("Machado","","Nome","Nível","SELECT mcmmo_users.user,mcmmo_skills.axes FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id ORDER by mcmmo_skills.axes DESC LIMIT 5");
echo "</tr></table>";
echo "<table><tr>";
$tabela13->gerarTabela("Acrobacia","","Nome","Nível","SELECT mcmmo_users.user,mcmmo_skills.acrobatics FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id ORDER by mcmmo_skills.acrobatics DESC LIMIT 5");
$tabela14->gerarTabela("Pescaria","","Nome","Nível","SELECT mcmmo_users.user,mcmmo_skills.fishing FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id ORDER by mcmmo_skills.fishing DESC LIMIT 5");
$tabela15->gerarTabela("Alquimia","","Nome","Nível","SELECT mcmmo_users.user,mcmmo_skills.alchemy FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id ORDER by mcmmo_skills.alchemy DESC LIMIT 5");
$tabela3->gerarTabela("Domador","","Nome","Nível","SELECT mcmmo_users.user,mcmmo_skills.taming FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id ORDER by mcmmo_skills.taming DESC LIMIT 5");
echo "</tr></table>";
$tabela7->gerarTabela("Desarmado","","Nome","Nível","SELECT mcmmo_users.user,mcmmo_skills.unarmed FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id ORDER by mcmmo_skills.unarmed DESC LIMIT 5");

echo "<table><tr>";


echo "</tr></table>";
include "./inc/_footer.inc.php";
?>

