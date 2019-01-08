<?php

use Faker\Generator as Faker;

/*         
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber, 
        'email_verified_at' => now(),
        'password' => Hash::make('123456'), // secret
        'brief' => $faker->text,
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Doctor::class, function(Faker $faker){
    return [
        'name' => $faker->name,
        'phone' => $faker->phoneNumber, 
        'email' => $faker->safeEmail,
        'skills' => 'MBBS, FRCS, PSD', 
        'brief' => $faker->text,     
    ];
});

$factory->define(App\Doctor::class, function(Faker $faker){
    return [
        'name' => $faker->name,
        'phone' => $faker->phoneNumber,
        'degrees' => 'MBBS, FRCS, PSD',
        'skills' => 'sergeant, Medicine Spcialist, Ultrasonography', 
        'department_id' => 1, 
        'description' => $faker->text,     
        'schedule' => "Saturday to thurse day at 4 pm", 
        'image' => "image.png", 
    ];
});

$factory->define(App\Appoinment::class, function(Faker $faker){
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'phone' => $faker->phoneNumber,
        'department_id' => 2,
        'doctor_id' => 2, 
        'appoinment_date' => $faker->dateTime,
    ];
});
