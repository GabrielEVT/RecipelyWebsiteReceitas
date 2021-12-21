<?php include 'cabecalho_rodape/cabecalho.php'; ?>
<main class="conteudo-principal pagina-contato">
    <div class="container">
        <form action="#" class="formulario formulario-contato">
            <fieldset class="formulario__conteudo">
                <legend class="formulario__titulo">
                    Envie sua mensagem
                </legend>
                <div class="formulario__campo">
                    <label class="formulario__campo-label" for="">E-mail<span>*</span></label>
                    <input class="formulario__campo-input" name="inputEmail" id="inputEmail" type="email" placeholder="Ex. recipely@email.com" required>
                </div>
                <div class="formulario__campo">
                    <label class="formulario__campo-label" for="">Nome<span>*</span></label>
                    <input class="formulario__campo-input" name="inputNome" id="inputNome" type="text" placeholder="Ex. Seu Nome" required>
                </div>
                <div class="formulario__campo">
                    <label class="formulario__campo-label" for="">Assunto<span>*</span></label>
                    <input class="formulario__campo-input" name="inputAssunto" id="inputAssunto" type="text" placeholder="Ex. Problemas com o envio das receitas" required>
                </div>
                <div class="formulario__campo">
                    <label class="formulario__campo-label" for="textAreaMensagem">Mensagem<span>*</span></label>
                    <textarea class="formulario__campo-text-area" name="textAreaMensagem" id="textAreaMensagem" placeholder="Ex. Olá, bom dia..." required></textarea>
                </div>
                <button class="formulario__button" type="submit">Enviar</button>
            </fieldset>
            <div class="formulario__imagem-container">
                <img class="formulario__imagem" src="img/contato/background_contato.svg">
            </div>
        </form>
    </div>   
</main>
<?php include 'cabecalho_rodape/rodape.php'; ?>