<?php include 'cabecalho_rodape/cabecalho.php'; ?>
<main class="conteudo-principal pagina-signup">
    <div class="container">
        <form action="#" class="formulario formulario-signup">
            <fieldset class="formulario__conteudo">
                <legend class="formulario__titulo">
                    Crie sua conta
                </legend>
                <div class="formulario__campo">
                    <label class="formulario__campo-label" for="inputEmail">E-mail<span>*</span></label>
                    <input class="formulario__campo-input" name="inputEmail" id="inputEmail" type="email" placeholder="Ex. mail@email.com" required>
                </div>
                <div class="formulario__campo">
                    <label class="formulario__campo-label" for="inputNome">Nome completo<span>*</span></label>
                    <input class="formulario__campo-input" name="inputNome" id="inputNome" type="text" placeholder="Ex. Seu Nome" required>
                </div>
                <div class="formulario__campo">
                    <label class="formulario__campo-label" for="inputNomeUsuario">Nome de usuário<span>*</span></label>
                    <input class="formulario__campo-input" name="inputNomeUsuario" id="inputNomeUsuario" type="text" placeholder="Ex. Seu nome no site" required>
                </div>
                <div class="formulario__campo">
                    <label class="formulario__campo-label" for="inputSenha">Senha<span>*</span></label>
                    <input class="formulario__campo-input" name="inputSenha" id="inputSenha" type="password" placeholder="Digite sua senha" required>
                </div>
                <div class="formulario__campo">
                    <label class="formulario__campo-label" for="inputConfirmarSenha">Confirmar senha<span>*</span></label>
                    <input class="formulario__campo-input" name="inputConfirmarSenha" id="inputConfirmarSenha" type="password" placeholder="Confirme sua senha" required>
                </div>
                <button class="formulario__button" type="submit">Cadastrar-se</button>
                <a href="login.php" class="formulario__redirecionar">Já possui cadastro? <br><span>Faça o login<span></a>
            </fieldset>
            <div class="formulario__imagem-container">
                <img class="formulario__imagem" src="img/signup/background_signup.svg">
            </div>
        </form>
    </div>   
</main>
<?php include 'cabecalho_rodape/rodape.php'; ?>