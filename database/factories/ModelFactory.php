<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

//$factory->define(App\User::class, function ($faker) {
//    return [
//        'name' => $faker->name,
//        'email' => $faker->email,
//        'password' => str_random(10),
//        'remember_token' => str_random(10),
//    ];
//});

$factory->define(\LumenAgenda\Entities\Pessoa::class, function($faker) {
   return[
       'nome' => $faker->unique()->name,
       'apelido' => $faker->unique()->firstname,
       'sexo' => $faker->randomElement(['F','M'])
   ];
});

$factory->define(\LumenAgenda\Entities\Telefone::class, function($faker){
    return[
        'descrição' => $faker->randomElement(['Celular','Comercial', 'Residencial', 'Recados']),
        'codpaís' => $faker->optional(0.7, 55)->numberBetween(1,197),
        'ddd' => $faker->numberBetween(11, 91),
        'prefixo' => $faker->randomNumber(4),
        'sufixo' => $faker->randomNumber(4),
        'pessoa_id' => $faker->numberBetween(1,130)
    ];

});