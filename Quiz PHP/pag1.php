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
                    <img src="img/stranger thigs.png" class="imgQuiz img-fluid">
                </div>
            </div>
        </div>
        <div class="containerForm">
            <form action="pag2.php" method="post" class="formQuiz">
                <div class="form-row">
                    <div class="col">
                        <label class="labelQuestao">1.Qual opção abaixo é um personagem de Stranger Things?</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="Alternativas1" value="A) O Goku">
                            <label class="form-check-label labelRadio">A) O Goku</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="Alternativas1"  value="B) Eddie Muson">
                            <label class="form-check-label txtRadioCheck">B) Eddie Muson </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="Alternativas1"  value="C) Boby Singer">
                            <label class="form-check-label txtRadioCheck">C) Boby Singer</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="Alternativas1"  value="D) Stiles Stilinski">
                            <label class="form-check-label txtRadioCheck">D) Stiles Stilinski</label>
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