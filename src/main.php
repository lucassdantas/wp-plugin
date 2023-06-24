<?php

    // Adiciona a aba na página do produto
    add_action('woocommerce_product_tabs', 'meu_plugin_criar_aba_produto');
    function meu_plugin_criar_aba_produto($tabs) {
        // Adiciona uma nova aba com o título e o conteúdo personalizado
        $tabs['minha_aba'] = array(
            'title'     => __('Minha Aba', 'meu-plugin'),
            'priority'  => 50,
            'callback'  => 'meu_plugin_conteudo_aba_produto'
        );
        return $tabs;
    }

    // Conteúdo da aba personalizada
    function meu_plugin_conteudo_aba_produto() {
        // Aqui você pode adicionar o conteúdo da sua aba
        echo '<h2>' . __('Conteúdo da Minha Aba', 'meu-plugin') . '</h2>';
        echo '<p>' . __('Este é o conteúdo da minha aba personalizada.', 'meu-plugin') . '</p>';
    }


