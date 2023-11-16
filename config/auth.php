<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Configurações Padrão de Autenticação
    |--------------------------------------------------------------------------
    |
    | Esta opção controla as configurações padrão de "guarda" de autenticação e opções de redefinição de senha para sua aplicação. Você pode alterar esses padrões
    | conforme necessário, mas eles são um ponto de partida perfeito para a maioria das aplicações.
    |
    */


    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

   /*
    |--------------------------------------------------------------------------
    | Guardas de Autenticação
    |--------------------------------------------------------------------------
    |
    | Em seguida, você pode definir cada guarda de autenticação para sua aplicação.
    | Claro, uma ótima configuração padrão já foi definida para você
    | aqui, que usa armazenamento de sessão e o provedor de usuário Eloquent.
    |
    | Todos os drivers de autenticação têm um provedor de usuário. Isso define como
    | os usuários são realmente recuperados do seu banco de dados ou outro armazenamento
    | mecanismos usados por esta aplicação para persistir os dados do usuário.
    |
    | Suportado: "session"
    |
    */


    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
    ],

     /*
    |--------------------------------------------------------------------------
    | Provedores de Usuário
    |--------------------------------------------------------------------------
    |
    | Todos os drivers de autenticação têm um provedor de usuário. Isso define como
    | os usuários são realmente recuperados do seu banco de dados ou outro armazenamento
    | mecanismos usados por esta aplicação para persistir os dados do usuário.
    |
    | Se você tiver várias tabelas ou modelos de usuário, pode configurar várias
    | fontes que representam cada modelo / tabela. Essas fontes podem então
    | ser atribuídas a quaisquer guardas de autenticação adicionais que você tenha definido.
    |
    | Suportado: "database", "eloquent"
    |
    */


    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expiry time is the number of minutes that each reset token will be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    | The throttle setting is the number of seconds a user must wait before
    | generating more password reset tokens. This prevents the user from
    | quickly generating a very large amount of password reset tokens.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
    | Here you may define the amount of seconds before a password confirmation
    | times out and the user is prompted to re-enter their password via the
    | confirmation screen. By default, the timeout lasts for three hours.
    |
    */

    'password_timeout' => 10800,

];
