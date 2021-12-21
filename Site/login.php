<?php include 'cabecalho_rodape/cabecalho.php'; ?>
<main class="conteudo-principal pagina-login">
    <div class="container">
        <form action="#" class="formulario formulario-login">
            <fieldset class="formulario__conteudo">
                <legend class="formulario__titulo">
                    Login
                </legend>
                <div class="formulario__campo">
                    <label class="formulario__campo-label" for="">E-mail ou nome de usuário<span>*</span></label>
                    <input class="formulario__campo-input" name="inputEmailUsername" id="inputEmailUsername" type="text" placeholder="Entre com seu email ou nome de usuário" required>
                </div>
                <div class="formulario__campo">
                    <label class="formulario__campo-label" for="">Senha<span>*</span></label>
                    <input class="formulario__campo-input" name="inputSenha" id="inputSenha" type="password" placeholder="Digite sua senha" required>
                </div>
                <label class="formulario__campo formulario__checkbox-radio-container">Mantenha-me conectado
                    <input type="checkbox" name="cbMantenhameconectado" id="cbMantenhameconectado" required>
                    <span class="checkmark"></span>
                </label>
                <button class="formulario__button" type="submit">Login</button>
                <a href="signup.php" class="formulario__redirecionar">Ainda não possui cadastro? <br><span>Crie uma conta<span></a>
            </fieldset>
            <div class="formulario__imagem-container">
                <img class="formulario__imagem" src="img/login/background_login.svg">
            </div>
        </form>
    </div>   
</main>
<?php include 'cabecalho_rodape/rodape.php'; ?>