<!--inserir.php-->

<?php
require 'conexao.php';

if(isset($_POST['nome']) && empty($_POST['nome']==false)){
    $nome =filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
    $email= filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
    $senha= md5(filter_input(INPUT_POST,'senha'));

    $sql= "INSERT INTO usuarios Set nome = '$nome', email = '$email',senha ='$senha'";
    $pdo->query($sql);
    
    header('Location:index.php');
}else{
    echo 'não foi possivel inserir dados';
}

?>
<form method="POST">
<label >Nome:<br/><input type="text" name="nome"></label><br/><br/>
<label >Email:<br/><input type="text" name="email"></label><br/><br/>
<label >Senha:<br/><input type="password" name="senha"></label><br/><br/>
<input type="submit" value="inserir dados">

</form>
