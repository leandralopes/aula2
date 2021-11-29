<?php
/* Criar variáveis

$nomeDaVariavel = conteúdo;

Regras :
- inicializar com $
- Não pode começar por número
- Utilizar o tratamento CamelCase
- Não pode ter acentos, espaços, símbolos *(_ + # @ ! >)

1bim - errado
$bim1 = 7.5; - certo
$nome do aluno = "Juan"; - errado
$nomdoaluno = "Juan Pablo"; - é correto mas não tá certo
$nnomeDoAluno = "Márcia";
*/
$bim1 = 8.2;
$nome = "Juan Pablo";
$idade = 45;
$profissao = "Professor";
$salario = 13546.67;

#comando de saída de tela
echo "{$bim1} <br>";
echo $nome;

/* linha de comentáriio*/ 

# Comentário de linha única
echo "Me chamo {$nome} tenho {$idade} sou {$profissao} e ganho R$ {$salario}";
echo "<hr>";

$nota1 = 5;
$nota2 = 5;
$nota3 = 5;
$nota4 = 5;
$media = $nota1+$nota2+$nota3+$nota4/4;
echo "Sua média final foi: {$media}";





