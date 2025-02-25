<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer></script>
    <script src="js/script.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/png" href="css/img/logo.png"/>
    <title> Login - Domos </title>
</head>

<body>
    <div class="fundo-imagem pb-5">
        <?php include('header.php'); ?>
        
        <!-- Formulário de login --> 
        <div class="d-block m-auto col-8 col-md-6 col-lg-5 col-xl-4 p-5 rborder4 formulario">
            <section class="color-0491a3">
                <h1 class="text-center fs-1"> Login </h1>
            </section> <br>
            
            <form method="POST" action="login_sessao.php"> 
                <label class="fs-5 color-0491a3" id="label_cpf_cnpj" for="cpf_cnpj"> CPF / CNPJ </label>
                <input class="bg-e8e8e8 col-12 fs-4 input-form" name="cpf_cnpj" id="cpf_cnpj" type="text"> <br>

                <p id="erro_login_cpf_cnpj" class="text-danger fs-6"></p>

                <label class="fs-5 color-0491a3" id="label_senha" for="senha_login"> Senha </label>
                <input class="bg-e8e8e8 col-12 fs-4 input-form" id="senha_login" type="password"> <br>

                <p id="erro_login_senha" class="text-danger fs-6"></p>
                <div class="pe-2 text-end">
                <a href="recuperar_senha.php" class="color-0491a3"> Esqueceu sua senha? </a> 
                </div> <br> 

                <!-- Botão de entrar com validação -->
                <div class="text-end">
                    <a href="avisos.php"><input type="submit" value="Entrar" class="bg-005661 color-fff p-2 rounded border-0 col-12 col-md-6 col-xxl-3 hover-0491a3" onclick="validacao_login()"></input></a>
                </div>  
            </form>  
        </div>
        <br> <br> 
        <?php include('footer.php'); ?>
</body>
</html>