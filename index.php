<?php



#Conexao dados

//include 'conexao';

#header
include 'header.php';

#Conteudo da pagina
if (isset($_GET['pagina'])){
    $pagina=$_GET['pagina'];

}else{
   $pagina='home';
}

$pagina = $_GET['pagina'];

if ($pagina=='cursos'){

    include 'cursos.php';
}
elseif($pagina=='alunos') {

include 'alunos.php';

}elseif($pagina=='matriculas'){
    include 'matriculas.php';

}
else{

    include 'home.php';
}

#Rodape
include 'footer.php';