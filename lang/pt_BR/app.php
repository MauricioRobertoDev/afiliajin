<?php

return [
    'errors' => [
        'unknown'             => 'Erro desconhecido tente novamente',
        'clone_fail'          => 'Não foi possível clonar esta página, ou não existe ou produtor bloqueou essa possibilidade',
        'clone_storage_fail'  => 'Não foi possível salvar a página clonada no storage, check as configurações do storage',
        'clone_database_fail' => 'Não foi possível salvar a página no banco de dados, check as configurações do banco',
    ],
    'success' => [
        'page' => [
            'cloned'    => 'Página clonada!',
            'destroyed' => 'Página destruída',
        ],
    ],
    'validations' => [
        'whatsapp_number_required_if' => 'O número de whatsapp é necessário.',
    ],
];
