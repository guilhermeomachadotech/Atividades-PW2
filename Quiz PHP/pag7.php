<?php
    $quest6=$_POST["Alternativas6"];
    session_start();
    if($quest6=="D) Todos acima estão corretos"){
        $_SESSION["Alternativas6"]="Você acertou essa questão!";
        $_SESSION["qtdCertoTotal"]=$_SESSION["qtdCertoTotal"]+1;
    }else{
        $_SESSION["Alternativas6"]=$quest6;
        $_SESSION["qtdErradoTotal"]=$_SESSION["qtdErradoTotal"]+1;
    }
?>
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
                        <img src="img/jim hopper.jpg" class="imgQuiz img-fluid">
                    </div>
                </div>
            </div>
            <div class="containerForm">
                <form action="pag8.php" method="post" class="formQuiz">
                    <div class="form-row">
                        <div class="col">
                            <label class="labelQuestao">7.Jim Hooper tem uma paixão com quem?</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="Alternativas7" value="A) Terry Ives">
                                <label class="form-check-label labelRadio">A) Terry Ives</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="Alternativas7"  value="B) Karen">
                                <label class="form-check-label txtRadioCheck">B) Karen</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="Alternativas7"  value="C) Joyce Byers">
                                <label class="form-check-label txtRadioCheck">C) Joyce Byers</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="Alternativas7"  value="D) Becy Ives">
                                <label class="form-check-label txtRadioCheck">D) Becy Ives</label>
                            </div> 
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="containerBotao">
                                <input type="submit" class="botao"value="Próximo">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
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