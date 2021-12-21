<?php include 'cabecalho_rodape/cabecalho.php'; ?>
<main class="conteudo-principal pagina-receita_cadastro">
    <div class="container">
        <form action="" class="formulario formulario-receita_cadastro">
            <fieldset class="formulario__conteudo">
                <legend class="formulario__titulo">
                    Envie sua receita
                </legend>
                <div class="formulario__campo">
                    <label class="formulario__campo-label" for="nome_receita">
                        <svg 
                            xmlns="http://www.w3.org/2000/svg" 
                            xmlns:xlink="http://www.w3.org/1999/xlink" 
                            aria-hidden="true" 
                            focusable="false" 
                            width="1.0em" 
                            height="1.0em" 
                            style="
                                vertical-align: -0.125em;
                                -ms-transform: rotate(360deg);
                                -webkit-transform: rotate(360deg);
                                transform: rotate(360deg);" 
                                preserveAspectRatio="xMidYMid meet" 
                                viewBox="0 0 24 24">
                                <path d="M9.694 8l-1 6H6v6h12v-6h-2.694l-1-6H9.694zM10 3v3h4V3a1 1 0 0 1 2 0v3l1 6h1a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-6a2 2 0 0 1 2-2h1l1-6V3a1 1 0 1 1 2 0zM8 16h8v2H8v-2z" 
                                fill="#db3535" 
                                fill-rule="nonzero"/>
                        </svg>
                        Nome da receita
                    </label>
                    <input type="text" class="formulario__campo-input" name="nome_receita" placeholder="Ex. Bolo de chocolate">
                </div>

                <div class="formulario__campo">
                    <label class="formulario__campo-label" for="nome_ingrediente">
                        <svg 
                            xmlns="http://www.w3.org/2000/svg" 
                            xmlns:xlink="http://www.w3.org/1999/xlink" 
                            aria-hidden="true" 
                            focusable="false" 
                            width="1.0em" 
                            height="1.0em" 
                            style="
                                vertical-align: -0.125em;
                                -ms-transform: rotate(360deg);
                                -webkit-transform: 
                                rotate(360deg);
                                transform: rotate(360deg);" 
                                preserveAspectRatio="xMidYMid meet" 
                                viewBox="0 0 20 20">
                            <g fill="none">
                                <path d="M5.854 4.354a.5.5 0 1 0-.708-.708L3.5 5.293l-.646-.647a.5.5 0 1 0-.708.708l1 1a.5.5 0 0 0 .708 0l2-2zM8.75 4.5a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5zm0 5a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5zM8 15.25a.75.75 0 0 1 .75-.75h8.5a.75.75 0 0 1 0 1.5h-8.5a.75.75 0 0 1-.75-.75zM5.854 9.854a.5.5 0 1 0-.708-.708L3.5 10.793l-.646-.647a.5.5 0 0 0-.708.708l1 1a.5.5 0 0 0 .708 0l2-2zm0 4.292a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708 0l-1-1a.5.5 0 0 1 .708-.708l.646.647l1.646-1.647a.5.5 0 0 1 .708 0z" fill="#db3535"/>
                            </g>
                        </svg>
                        Ingredientes
                    </label>

                    <div class="formulario__campo__ingredientes">
                        <input type="text" name="nome_ingrediente" class="formulario__campo-input" placeholder="Ex. 2 xícaras de leite" id="nome_ingrediente">
                        <button 
                            type="button"
                            class="btn_add_ingredientes" id="btn_ingredientes"
                            onclick="adicionar_input()">
                            <svg 
                                xmlns="http://www.w3.org/2000/svg" 
                                xmlns:xlink="http://www.w3.org/1999/xlink" 
                                aria-hidden="true" 
                                focusable="false"         
                                style="
                                    vertical-align: -0.125em;
                                    -ms-transform: rotate(360deg); 
                                    -webkit-transform: 
                                    rotate(360deg);
                                    transform: rotate(360deg);" 
                                    preserveAspectRatio="xMidYMid meet" 
                                    viewBox="0 0 16 16">
                                    <g  
                                        fill="#db3535">
                                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
                                    </g>
                            </svg>
                        </button>
                    </div>                   
                </div>

                <div class="formulario__campo">
                    <label class="formulario__campo-label" for="modo_preparo">
                        <svg 
                            xmlns="http://www.w3.org/2000/svg" 
                            xmlns:xlink="http://www.w3.org/1999/xlink" 
                            aria-hidden="true" 
                            focusable="false" 
                            width="1em" 
                            height="1em" 
                            style="vertical-align: -0.125em;-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" 
                            preserveAspectRatio="xMidYMid meet" 
                            viewBox="0 0 256 256">
                                <path d="M252.8 102.4L224 124v60a32.037 32.037 0 0 1-32 32H64a32.037 32.037 0 0 1-32-32v-60L3.2 102.4a8 8 0 0 1 9.6-12.8L32 104V88a16.018 16.018 0 0 1 16-16h160a16.018 16.018 0 0 1 16 16v16l19.2-14.4a8 8 0 0 1 9.6 12.8zM160 56a8 8 0 0 0 8-8V16a8 8 0 0 0-16 0v32a8 8 0 0 0 8 8zm-32 0a8 8 0 0 0 8-8V16a8 8 0 0 0-16 0v32a8 8 0 0 0 8 8zm-32 0a8 8 0 0 0 8-8V16a8 8 0 0 0-16 0v32a8 8 0 0 0 8 8z" fill="#db3535"/>
                        </svg>
                        Modo de preparo
                    </label>
                    <textarea name="modo_preparo" class="formulario__campo-text-area"
                    placeholder="Ex. Bata todos os ingredientes"></textarea>
                </div>

                <div class="formulario__campo">
                    <label class="formulario__campo-label" for="descricao_receita">
                        <svg 
                            xmlns="http://www.w3.org/2000/svg" 
                            xmlns:xlink="http://www.w3.org/1999/xlink" 
                            aria-hidden="true" 
                            focusable="false" 
                            width="1.0em" 
                            height="1.0em" 
                            style="vertical-align: -0.125em;-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" 
                            preserveAspectRatio="xMidYMid meet" 
                            viewBox="0 0 256 256">
                                <path d="M252.8 102.4L224 124v60a32.037 32.037 0 0 1-32 32H64a32.037 32.037 0 0 1-32-32v-60L3.2 102.4a8 8 0 0 1 9.6-12.8L32 104V88a16.018 16.018 0 0 1 16-16h160a16.018 16.018 0 0 1 16 16v16l19.2-14.4a8 8 0 0 1 9.6 12.8zM160 56a8 8 0 0 0 8-8V16a8 8 0 0 0-16 0v32a8 8 0 0 0 8 8zm-32 0a8 8 0 0 0 8-8V16a8 8 0 0 0-16 0v32a8 8 0 0 0 8 8zm-32 0a8 8 0 0 0 8-8V16a8 8 0 0 0-16 0v32a8 8 0 0 0 8 8z" fill="#db3535"/>
                        </svg>
                        Breve descrição
                    </label>
                    <textarea name="descricao_receita" class="formulario__campo-text-area"
                    placeholder="Ex. Receita de chocolate utilizando ingredientes de fácil acesso"></textarea>
                </div>

                <div class="formulario__campo border informacoes_adicionais">
                    <div id="tempo_preparo">
                        <label class="formulario__campo-label descricao_receita" for="descricao_receita">
                            <svg 
                                xmlns="http://www.w3.org/2000/svg" 
                                xmlns:xlink="http://www.w3.org/1999/xlink" 
                                aria-hidden="true" 
                                focusable="false"
                                width="30px"
                                heighti="30px"
                                preserveAspectRatio="xMidYMid meet" 
                                viewBox="0 0 20 20">
                                    <g fill="none">
                                        <path d="M7 2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z" fill="#db3535"/>
                                        <path d="M14.45 3.929a.5.5 0 0 1 .706 0l1.414 1.414a.5.5 0 1 1-.707.707L14.45 4.636a.5.5 0 0 1 0-.707z" fill="#db3535"/>
                                        <path d="M16.5 11a7 7 0 1 1-14 0a7 7 0 0 1 14 0zM9 6.5v5a.5.5 0 0 0 1 0v-5a.5.5 0 0 0-1 0z" fill="#db3535"/>
                                    </g>
                            </svg>
                            <span>Tempo de preparo</span>
                        </label>
                        <div class="informacoes_adicionais__inputs">
                            <input type="number" class="formulario__campo-input" name="tempo_preparo">
                            <span>minutos</span>
                        </div>
                    </div>
                    <div id="serve">
                        <label class="formulario__campo-label descricao_receita" for="serve">
                            <svg
                                xmlns="http://www.w3.org/2000/svg" 
                                xmlns:xlink="http://www.w3.org/1999/xlink" 
                                aria-hidden="true" 
                                role="img" 
                                width="1.0em"           
                                height="1.0em"           
                                preserveAspectRatio="xMidYMid meet" 
                                viewBox="0 0 1024 768">
                                    <path 
                                        d="M992 640H32q-13 0-22.5-9.5T0 608q0-188 116.5-320.5T416 128q13 0 22.5-9.5T448 96t-9.5-22.5T416 64t-22.5-9.5T384 32t9.5-22.5T416 0h192q13 0 22.5 9.5T640 32t-9.5 22.5T608 64t-22.5 9.5T576 96t9.5 22.5T608 128q183 27 299.5 159.5T1024 608q0 13-9.5 22.5T992 640zM32 704h960q13 0 22.5 9.5t9.5 22.5t-9.5 22.5T992 768H32q-13 0-22.5-9.5T0 736t9.5-22.5T32 704z" 
                                        fill="#db3535"/>
                            </svg>
                            <span>Serve</span>
                        </label>

                        <div class="informacoes_adicionais__inputs">
                            <input class="formulario__campo-input" type="number" name="serve">
                            <span>pessoas</span>
                        </div>
                    </div>
                </div>

                <div class="formulario__campo border container-imagens-videos">
                    <label class="formulario__campo-label">
                        <svg id="imagem_camera_foto"
                            xmlns="http://www.w3.org/2000/svg" 
                            xmlns:xlink="http://www.w3.org/1999/xlink" 
                            aria-hidden="true" 
                            focusable="false" 
                            width="2.0em" 
                        height="2.0em" 
                            style="vertical-align: -0.125em;-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" 
                            preserveAspectRatio="xMidYMid meet" 
                            viewBox="0 0 16 16">
                                <g 
                                fill="#db3535">
                                    <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0a2.5 2.5 0 0 1 5 0z"/>
                                    <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1a.5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0a3.5 3.5 0 0 1 7 0z"/>
                                </g>
                        </svg>
                        <p class="arraste">ARRASTE PARA ENVIAR FOTOS DA RECEITA<span>Adicione até 5 imagens</span></p>
                    </label>
                    <label for="imagem_receita" class="container-imagem-receita">Adicionar imagem
                        <input type="file" name="imagem_receita" id="imagem_receita">
                    </label>
                </div>

                <div class="formulario__campo border container-imagens-videos">
                    <label class="formulario__campo-label">
                        <svg id="imagem_camera_video"
                            xmlns="http://www.w3.org/2000/svg" 
                            xmlns:xlink="http://www.w3.org/1999/xlink" 
                            aria-hidden="true" 
                            role="img" 
                            width="2.0em" 
                            height="2.0em" 
                            preserveAspectRatio="xMidYMid meet" 
                            viewBox="0 0 16 16">
                                <g 
                                    fill="#db3535">
                                    <path 
                                        fill-rule="evenodd" 
                                        d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5z"/>
                                </g>
                        </svg>
                        <p class="arraste">ARRASTE PARA ENVIAR VÍDEO DA RECEITA<span>Adicione um vídeo de até 300mb</span></p>
                    </label>
                    <label for="video_receita" class="container-imagem-receita">Adicionar vídeo
                        <input type="file" name="video_receita" id="video_receita">
                    </label>     
                </div>
                <button class="formulario__button" type="submit">Envie sua receita</button>
            </fieldset>
            </form>
    </div>   
</main>

<script>
    // ADICIONAR NOVO INPUT DOS INGREDIENTES
    var add_ingredientes = document.getElementsByClassName(`btn_add_ingredientes`)

    function adicionar_input(){
        alert("OI")
        for (let i = 0; i < add_ingredientes.length; i++) 
        {
            add_ingredientes[i].addEventListener(`click`, ()=>{
        
                var div_ingredientes = document.getElementsByClassName(`.formulario__campo__ingredientes`)
        
                clone_div = div_ingredientes[i].cloneNode(true)
                
                add = div_ingredientes[i].insertAdjacentElement(`afterend`, clone_div)
        
                if (add != null)
                {
                    add_ingredientes[i].disabled = true; 
                    add_ingredientes = document.getElementsByClassName(`btn_add_ingredientes`)
                    
                    adicionar_input()
                }
            })
        }
    }
</script>
<?php include 'cabecalho_rodape/rodape.php'; ?>