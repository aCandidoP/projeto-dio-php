<?php

$validacoes = [];


if(count($_POST) > 0) {
   
    
    if(!$_POST['nome']) {
        $validacoes[] = "Preencha o nome do usuário!";
    }

    if(!$_POST['email']) {
        $validacoes[] = "Preencha o e-mail do usuário!";
    }

    if(!$_POST['passwd'] || !$_POST['confirm']) {
        $validacoes[] = "Preencha a senha e a confirmação!";
    } 
    
    else if ($_POST['passwd'] != $_POST['confirm']) {
        $validacoes[] = "As senhas devem ser iguais!";
    }

    
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,300;0,500;0,700;1,100;1,300;1,500;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <title>Cadastre-se</title>
    </head>

    <body>
        <main>
            
            <h1>Cria sua conta</h1>

            <form action="index.php" method="POST">
                
                <input type="text" name="nome" placeholder="Digite o seu nome">
            
                <input type="text" name="email" placeholder="Digite o seu e-mail">
           
                <input type="password" name="passwd" placeholder="Digite a sua senha">
            
                <input type="password" name="confirm" placeholder="Confirme a sua senha">

                <br>
            
                <input type="submit" value="Cadastrar" id="btn">
                
            </form>

            
                <?php if(count($validacoes)): ?>
                    
                    <?php foreach($validacoes as $validacao): ?>
                    <div id="alert">    
                        <ul>
                            <li class="validation"><?= $validacao ?> </li> 
                        </ul>
                    </div>
                    <?php endforeach; ?>
                    
                <?php endif; ?>
       </main>
    </body>
</html>       