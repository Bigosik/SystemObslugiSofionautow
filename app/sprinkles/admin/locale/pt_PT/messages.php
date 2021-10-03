<?php

/*
 * UserFrosting (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/UserFrosting
 * @copyright Copyright (c) 2019 Alexander Weissman
 * @license   https://github.com/userfrosting/UserFrosting/blob/master/LICENSE.md (MIT License)
 */

/**
 * Portuguese message token translations for the 'admin' sprinkle.
 *
 * @author Bruno Silva (brunomnsilva@gmail.com)
 * @author José Pedro Machado (V2)
 */
return [
    'ACTIVITY'              => [
        1      => 'Atividade',
        2      => 'Atividades',
        'LAST' => 'Última atividade',
        'PAGE' => 'Lista de atividade dos utilizadores',
        'TIME' => 'Tempo da Atividade',
    ],
    'CACHE'                 => [
        'CLEAR'             => 'Limpar cache',
        'CLEAR_CONFIRM'     => 'Tem a certeza que pretende limpar a cache do site?',
        'CLEAR_CONFIRM_YES' => 'Sim, limpar cache',
        'CLEARED'           => 'Cache limpa com sucesso!',
    ],
    'DASHBOARD'             => 'Painel de Controlo',
    'NO_FEATURES_YET'       => 'Parece que ainda não foram definidas funcionalidades para esta conta...!  Talvez ainda não tenham sido implementadas, ou alguém se esqueceu de lhe dar acesso. De qualquer das formas, temos prazer em tê-lo aqui connosco!',
    'DELETE_MASTER'         => 'Não pode apagar a conta principal!',
    'DELETION_SUCCESSFUL'   => 'Utilizador <strong>{{user_name}}</strong> foi removido com sucesso.',
    'DETAILS_UPDATED'       => 'Detalhes de conta atualizados para o utilizador <strong>{{user_name}}</strong>',
    'DISABLE_MASTER'        => 'Não pode desativar a conta principal!',
    'DISABLE_SELF'          => 'Não pode desativas a sua própria conta!',
    'DISABLE_SUCCESSFUL'    => 'Conta do utilizador <strong>{{user_name}}</strong> foi desativada com sucesso.',
    'ENABLE_SUCCESSFUL'     => 'Conta do utilizador <strong>{{user_name}}</strong> foi ativada com sucesso.',
    'GROUP'                 => [
        1                     => 'Grupo',
        2                     => 'Grupos',
        'CREATE'              => 'Criar grupo',
        'CREATION_SUCCESSFUL' => 'Grupo criado com sucesso',
        'DELETE'              => 'Remover grupo',
        'DELETE_CONFIRM'      => 'Tem a certeza que pretende remover o grupo <strong>{{name}}</strong>?',
        'DELETE_DEFAULT'      => 'Não pode remover o grupo <strong>{{name}}</strong> porque este está definido por defeito para novos utilizadores.',
        'DELETE_YES'          => 'Sim, remover grupo',
        'DELETION_SUCCESSFUL' => 'Grupo removido com sucesso',
        'EDIT'                => 'Editar grupo',
        'ICON'                => 'Icon do grupo',
        'ICON_EXPLAIN'        => 'Icon para membros do grupo',
        'INFO_PAGE'           => 'Página informativa do grupo {{name}}',
        'MANAGE'              => 'Gerir o grupo',
        'NAME'                => 'Nome do grupo',
        'NAME_EXPLAIN'        => 'Por favor introduza um nome para o grupo',
        'NOT_EMPTY'           => 'Não pode efetuar essa ação porque existem utilizadores associados ao grupo <strong>{{name}}</strong>.',
        'PAGE_DESCRIPTION'    => 'Lista de grupos do site. Contém opções para editar e remover grupos.',
        'SUMMARY'             => 'Resumo do grupo',
        'UPDATE'              => 'Detalhes do grupo <strong>{{name}}</strong> atualizados',
        "NONE"                => "Nenhum grupo",
    ],
    'MANUALLY_ACTIVATED'    => 'A conta de {{user_name}} foi ativada manualmente.',
    'MASTER_ACCOUNT_EXISTS' => 'A contra principal já existe!',
    'MIGRATION'             => [
        'REQUIRED' => 'É necessário uma atualização da base de dados.',
    ],
    'PERMISSION'            => [
        1                  => 'Permissão',
        2                  => 'Permissões',
        'ASSIGN_NEW'       => 'Atribuir nova permissão',
        'HOOK_CONDITION'   => 'Hook/Condições',
        'ID'               => 'ID da permissão',
        'INFO_PAGE'        => 'Página informativa da permissão\'{{name}}\'',
        'MANAGE'           => 'Gerir permissões',
        'NOTE_READ_ONLY'   => '<strong>Nota Importante:</strong> as permissões são consideradas "parte do código" e não podem ser modificadas aqui. Para adicionar, remover ou modificar permissões, os desenvolvedores do site necessitam de utilizar uma <a href="https://learn.userfrosting.com/database/extending-the-database" target="about:_blank">"database migration".</a>',
        'PAGE_DESCRIPTION' => 'Lista de permissões do site.  Contém opções para editar e remover permissões.',
        'SUMMARY'          => 'Resumo da Permissão',
        'UPDATE'           => 'Atualizar permissões',
        'VIA_ROLES'        => 'Tem permissão através do cargo',
    ],
    'ROLE'                  => [
        1                     => 'Cargo',
        2                     => 'Cargos',
        'ASSIGN_NEW'          => 'Atribuir novo cargo',
        'CREATE'              => 'Criar cargo',
        'CREATION_SUCCESSFUL' => 'Cargo criado com sucesso',
        'DELETE'              => 'Remover cargo',
        'DELETE_CONFIRM'      => 'Tem a certeza que pretende remover o cargo <strong>{{name}}</strong>?',
        'DELETE_DEFAULT'      => 'Não pode eliminar o cargo <strong>{{name}}</strong> porque é o cargo definido por defeito para os novos utilizadores.',
        'DELETE_YES'          => 'Sim, remover cargo',
        'DELETION_SUCCESSFUL' => 'Cargo removido com sucesso',
        'EDIT'                => 'Editar cargo',
        'HAS_USERS'           => 'Não pode executar essa ação porque existem utilizadores com o cargo <strong>{{name}}</strong>.',
        'INFO_PAGE'           => 'Página informativa do cargo {{name}}',
        'MANAGE'              => 'Gerir cargos',
        'NAME'                => 'Nome',
        'NAME_EXPLAIN'        => 'Por favor introduza um nome para o cargo',
        'NAME_IN_USE'         => 'O cargo <strong>{{name}}</strong> já existe',
        'PAGE_DESCRIPTION'    => 'Lista de cargos do site.  Contém opções para editar e remover cargos.',
        'PERMISSIONS_UPDATED' => 'Permissões atualizadas para o cargo <strong>{{name}}</strong>',
        'SUMMARY'             => 'Resumo do cargo',
        'UPDATED'             => 'Cargo <strong>{{name}}</strong> atualizado',
    ],
    'SYSTEM_INFO'           => [
        '@TRANSLATION' => 'Informação do sistema',
        'DB_NAME'      => 'Nome da base de dados',
        'DB_VERSION'   => 'Versão da base de dados',
        'DIRECTORY'    => 'Diretório do projeto',
        'PHP_VERSION'  => 'Versão PHP',
        'SERVER'       => 'Software do servidor web',
        'SPRINKLES'    => 'Sprinkles carregados',
        'UF_VERSION'   => 'Versão do UserFrosting',
        'URL'          => 'Raiz (url) do site',
    ],
    'TOGGLE_COLUMNS'        => 'Alternar colunas',
    'USER'                  => [
        1                  => 'Utilizador',
        2                  => 'Utilizadores',
        'ADMIN'            => [
            'CHANGE_PASSWORD'    => 'Alterar password',
            'SEND_PASSWORD_LINK' => 'Enviar um link ao utilizador que lhe permita escolher a sua password',
            'SET_PASSWORD'       => 'Definir a password do utilizador como',
        ],
        'ACTIVATE'         => 'Ativar utilizador',
        'CREATE'           => 'Criar utilizador',
        'CREATED'          => 'Utilizador <strong>{{user_name}}</strong> creado com sucesso',
        'DELETE'           => 'Remover utilizador',
        'DELETE_CONFIRM'   => 'Tem a certeza que pretende remover o utilizador <strong>{{name}}</strong>?',
        'DELETE_YES'       => 'Sim, remover utilizador',
        'DELETED'          => 'Utilizador removido com sucesso',
        'DISABLE'          => 'Desativar utilizador',
        'EDIT'             => 'Editar utilizador',
        'ENABLE'           => 'Ativar utilizador',
        'INFO_PAGE'        => 'Página de detalhes do utilizador {{name}}',
        'LATEST'           => 'Últimos Utilizadores',
        'PAGE_DESCRIPTION' => 'Lista de utilizadores do site.  Contém opções para editar detalhes, ativar/desativar utilizadores e outras.',
        'SUMMARY'          => 'Detalhes do utilizador',
        'VIEW_ALL'         => 'Ver todos os utilizadores',
        'WITH_PERMISSION'  => 'Utilizadores com esta permissão',
    ],
    'X_USER'                => [
        0 => 'Nenhum utilizador',
        1 => '{{plural}} utilizador',
        2 => '{{plural}} utilizadores',
    ],
];
