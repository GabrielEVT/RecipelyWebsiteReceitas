-- USUÁRIO

INSERT INTO `tb_usuario`
VALUES
    (
        default,
        "Cleide Almonte",
        "cleide@gmail.com",
        "@cleidette_almontte",
        "senha_segura"
    ),(
       default,
        "Joseph Viril",
        "joseph@gmail.com",
        "@viril_joseph",
        "senha_segura"
    ),(
       default,
        "Ana Paula Gentil",
        "paula@gmail.com",
        "@gentil_paulinha",
        "senha_segura"
    );

-- RECEITAS

INSERT INTO `tb_receita`
VALUES
    (
        -- id
        default,
        -- nome
        "Bolo de chocolate",
        -- ingredientes
        "
            • 1 xicara (chá) de chocolate em pó
            • 2 xícaras (chá) de Farinha de Trigo Tradicional Renata
            • 1 xicara (chá) de óleo
            • 1 xicara (chá) de leite
            • 2 ovos
            • 1 colher (sopa) de fermento em pó
        ",
        -- modo de preparo
        "Em uma batedeira, bata as claras em neve. Junte as gemas, uma a uma, e acrescente o açúcar. Despeje o Leite NINHO aos poucos, sem parar de bater. Incorpore delicadamente a farinha peneirada com o Chocolate em Pó DOIS FRADES e o fermento. Despeje em uma forma redonda (28 cm de diâmetro) untada com manteiga e polvilhada com farinha de trigo e leve para assar em forno médio-alto (200ºC), preaquecido, por cerca de 40 minutos.",
        -- descricao
        "Ed ac porta mauris. Mauris commodo mi dignissim nisl porttitor finibus commodo a orci. Etiam ac elit eu turpis iaculis porttitor. Maecenas bibendum a ligula vel efficitur. ",
        -- tempo de pepraro
        "01:20:00",
        -- serve pessoas
        4,
        -- data de publicação
        "2021-12-9",
        -- views
        1001,
        -- favoritos
        228,
        -- vídeo nome
        "bolodechocolate.mp4",
        -- usuário
        1
    );


-- IMAGENS RECEITA