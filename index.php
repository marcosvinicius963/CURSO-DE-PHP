<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <title>CURSO-PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>CURSO PHP</h1>
       <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">  
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Basico</h3>
                    <ul>
                        <li>
                            <a href="exercicios.php?dir=basico&file=ola">
                                Olá PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercicios.php?dir=basico&file=html">
                                Intregação HTML
                            </a>
                        </li>
                        <li>
                            <a href="exercicios.php?dir=basico&file=css">
                                Intregação CSS
                            </a>
                        </li>
                        <li>
                            <a href="exercicios.php?dir=basico&file=comentarios">
                                Comentários PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercicios.php?dir=basico&file=desafio">
                                Desafio PHP
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Tipos</h3>
                    <ul>
                        <li>
                            <a href="exercicios.php?dir=tipos&file=int">
                              Tipo Inteiro
                            </a>
                        </li>
                        <li>
                            <a href="exercicios.php?dir=tipos&file=float">
                              Tipo Float
                            </a>
                        </li>
                        <li>
                            <a href="exercicios.php?dir=tipos&file=aritmeticas">
                             Op. Aritméticas
                            </a>
                        </li>
                        <li>
                            <a href="exercicios.php?dir=tipos&file=desafio_precedencia">
                             Desafio Precedencia
                            </a>
                        </li>
                        <li>
                        <a href="exercicios.php?dir=tipos&file=string">
                             Tipo String
                            </a>
                        </li>
                        <li>
                        <a href="exercicios.php?dir=tipos&file=desafio_string">
                             Desafio String
                            </a>
                        </li> 
                        <li>
                        <a href="exercicios.php?dir=tipos&file=booleano">
                             Tipo Booleano
                            </a>
                        </li>
                        <li>
                        <a href="exercicios.php?dir=tipos&file=conversoes">
                             Conversões
                            </a>
                        </li> 
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>Variáveis</h3>
                    <ul>
                        <li>
                            <a href="exercicios.php?dir=variaveis&file=basico">
                              Variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicios.php?dir=variaveis&file=desafio_equacao">
                              Desafio Equação
                            </a>
                        </li>
                        <li>
                            <a href="exercicios.php?dir=variaveis&file=atribuicoes">
                              Atribuições
                            </a>
                        </li>
                        <li>
                            <a href="exercicios.php?dir=variaveis&file=interpolacao">
                              Interpolação
                            </a>
                        </li>
                        <li>
                            <a href="exercicios.php?dir=variaveis&file=variaveis_variaveis">
                              Variáveis Variáveis
                            </a>
                        </li>
                </div>
            </nav>
        </div>
    </main>
 <footer class="rodape">
        MARCOS & COMPANHIA <?= date('d/m/Y H:i:s'); ?>
 </footer>
</body>
</html>  