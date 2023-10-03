<?php
    session_start();
    $quest10=$_POST["Alternativas10"];
    if($quest10=="B) Dungeons & Dragons"){
        $quest10="Você acertou essa questão!";
        $_SESSION["qtdCertoTotal"]=$_SESSION["qtdCertoTotal"]+1;
    }else{
        $_SESSION["qtdErradoTotal"]=$_SESSION["qtdErradoTotal"]+1;
    }
    $porcenCerto=($_SESSION["qtdCertoTotal"]*100)/10;
    $porcenErrado=($_SESSION["qtdErradoTotal"]*100)/10;
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Quiz</title>
</head>
<body>
    
    <div class="containerHeader">
        <header class="headerTitulo">
            <div class="txtTitulo">
                Quiz Stranger Things
            </div>
        </header>
    </div>
    <div class="containerConteudo">
        <div class="containerImg">
            <div class="row">
                <div class="col-12">
                    <img src="img/starger things-relatorio.jpg" class="imgTitulo img-fluid">
                </div>
            </div>
        </div>
        <div class="containerResposta">
            <div class="row">
                <div class="col-12">
                    <div class="respostaTitulo">
                        Respostas de cada questão
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="txtRespostaCertaErrada">
                        Resposta Certa 1: B) Eddie Muson
                    </div>
                </div>
                <div class="col-6">
                    <div class="txtRespostaCertaErrada">
                        Resposta Certa 2: D) Jim Hopper
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-6">
                    <div class="txtRespostaCertaErrada">
                        Resposta Certa 3: C) Running Up That Hill
                    </div>
                </div>
                <div class="col-6">
                    <div class="txtRespostaCertaErrada">
                    Resposta Certa 4: B) Henry Creel
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="txtRespostaCertaErrada">
                        Resposta Certa 5: B) 2° temporada
                    </div>
                </div>
                <div class="col-6">
                    <div class="txtRespostaCertaErrada">
                    Resposta Certa 6: D) Todos acima estão corretos
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="txtRespostaCertaErrada">
                        Resposta Certa 7: C) Joyce Byers
                    </div>
                </div>
                <div class="col-6">
                    <div class="txtRespostaCertaErrada">
                    Resposta Certa 8: D) Guitarra
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="txtRespostaCertaErrada">
                        Resposta Certa 9: D) Mundo Invertido
                    </div>
                </div>
                <div class="col-6">
                    <div class="txtRespostaCertaErrada">
                    Resposta Certa 10: B) Dungeons & Dragons
                    </div>
                </div>
            </div>
            //
            <div class="row">
                <div class="col-12">
                    <div class="respostaTitulo">
                        Resposta Errada: 
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="txtRespostaCertaErrada">
                        Resposta Errada 1: <?php echo $_SESSION["Alternativas1"];?>
                    </div>
                </div>
                <div class="col-6">
                    <div class="txtRespostaCertaErrada">
                        Resposta Errada 2: <?php echo $_SESSION["Alternativas2"];?>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-6">
                    <div class="txtRespostaCertaErrada">
                        Resposta Errada 3: <?php  echo $_SESSION["Alternativas3"];?>
                    </div>
                </div>
                <div class="col-6">
                    <div class="txtRespostaCertaErrada">
                    Resposta Errada 4: <?php  echo $_SESSION["Alternativas4"];?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="txtRespostaCertaErrada">
                        Resposta Errada 5: <?php echo $_SESSION["Alternativas5"];?>
                    </div>
                </div>
                <div class="col-6">
                    <div class="txtRespostaCertaErrada">
                    Resposta Errada 6: <?php echo $_SESSION["Alternativas6"];?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="txtRespostaCertaErrada">
                        Resposta Errada 7: <?php echo $_SESSION["Alternativas7"];?>
                    </div>
                </div>
                <div class="col-6">
                    <div class="txtRespostaCertaErrada">
                    Resposta Errada 8: <?php echo $_SESSION["Alternativas8"];?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="txtRespostaCertaErrada">
                        Resposta Errada 9: <?php  echo $_SESSION["Alternativas9"];?>
                    </div>
                </div>
                <div class="col-6">
                    <div class="txtRespostaCertaErrada">
                    Resposta Errada 10: <?php echo $quest10;?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="respostaTitulo">
                        Porcentagem
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="txtPorcentagem">
                        Acertos: <?php echo $porcenCerto;?>%
                    </div>
                </div>
                <div class="col-6">
                    <div class="txtPorcentagem">
                        Erros: <?php echo $porcenErrado;?>%
                    </div>
                </div>
            </div>
        </div>
        <form action="index.html" method="post">
            <div class="form-row">
                <div class="col">
                    <div class="containerBotao">
                        <input type="submit" class="botao"value="Início">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="containerFooter">
        <footer class="footer">
            <div class="containerTxtFooter">
                <div class="row">
                    <div class="col-12">
                        <div class="txtFooter">
                            Facebook: QuizGeek@ Instagram:Quiz Geek SP
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="txtFooter">
                            Email: quizgeeks@gmail.com.br
                        </div>
                        
                    </div>
                </div>
            </div>
        </footer>
    </div>
   
</body>
</html>