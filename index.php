<?php
require 'conexao.php';
?>
<a href="inserir.php"><button>inserir registro</button></a>
<table border="1" width="100%">
    <th>Nome:</th>
    <th>Email:</th>
    <th>Senha:</th>
    <th>Ações</th>

<?php
$sql = "SELECT * FROM usuarios";
$sql = $pdo->query($sql);

if($sql->rowCount()>0){
foreach($sql->fetchAll() as $usuario){
    echo '<tr>';
    echo '<td>'.$usuario['nome'].'</td>';
    echo '<td>'.$usuario['email'].'</td>';
    echo '<td>'.$usuario['senha'].'</td>';
    echo '<td><a href="excluir.php?id='.$usuario['id'] .'"><button>excluir</button></a>--<a href="editar.php?id='.$usuario['id']  .'">
    <button>modificar</button></a></td>';
    echo '</tr>';
}
}
?>
</table>



