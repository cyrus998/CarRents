<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //dian12345 $2y$10$.nyJWW7B8E6J0zM4xmyNNOzJseCz5h8pHTwdg1GpwRuenQUUfZFMy
        User::create([
            'name' => 'Cyrus Francisco',
            'email' => 'mjcmfrancisco@tip.edu.ph',
            'role' => '0',
            'email_verified_at' => '2022-01-24 01:28:49',
            'created_at' => '2022-01-24 01:28:35',
            'updated_at' => '2022-01-24 01:28:49',
            'password' => '$2y$10$Q4vd9eNjBa0wd0t7jInknuw/HTfRhefr4EeL1yNT150aNkEd2ER0W', // qwerqwer
        ]);

        User::create([
            'name' => 'Cyrus Francisco Admin',
            'email' => 'cyrusadmin@gmail.com',
            'role' => '1',
            'email_verified_at' => '2022-01-24 01:28:49',
            'created_at' => '2022-01-24 01:28:35',
            'updated_at' => '2022-01-24 01:28:49',
            'password' => '$2y$10$Q4vd9eNjBa0wd0t7jInknuw/HTfRhefr4EeL1yNT150aNkEd2ER0W', // qwerqwer
        ]);

        User::create([
            'name' => 'Adrian Villanueva Admin',
            'email' => 'admin@gmail.com',
            'role' => '1',
            'created_at' => '2022-02-23 11:12:05',
            'password' => '$2y$10$.nyJWW7B8E6J0zM4xmyNNOzJseCz5h8pHTwdg1GpwRuenQUUfZFMy',
        ]);


        User::create([
            'name' => 'Adrian Villanueva Admin',
            'email' => 'malvillanueva@tip.edu.ph',
            'role' => '1',
            'created_at' => '2022-02-23 11:12:05',
            'password' => '$2y$10$.nyJWW7B8E6J0zM4xmyNNOzJseCz5h8pHTwdg1GpwRuenQUUfZFMy',
        ]);

        User::create([
            'name' => 'Rico Blanco',
            'email' => 'ricoblanco@tip.edu.ph',
            'role' => '0',
            'created_at' => '2022-02-23 11:12:05',
            'password' => '$2y$10$h45XBUUIwz/mARvOZrtYIOvCV8tz6oRlxKzSxTs/7CiawU2axPRdG',
        ]);

        User::create([
            'name' => 'Connnie',
            'email' => 'connnie@tip.edu.ph',
            'role' => '0',
            'created_at' => '2022-04-23 11:12:05',
            'password' => '$2y$10$h45XBUUIwz/mARvOZrtYIOvCV8tz6oRlxKzSxTs/7CiawU2axPRdG',
        ]);

        User::create([
            'name' => 'Adieser Jabal',
            'email' => 'marjabal@tip.edu.ph',
            'role' => '0',
            'created_at' => '2022-05-23 11:12:05',
            'password' => '$2y$10$h45XBUUIwz/mARvOZrtYIOvCV8tz6oRlxKzSxTs/7CiawU2axPRdG',
        ]);

        User::create([
            'name' => 'Reiner Braun',
            'email' => 'reinerbraun@tip.edu.ph',
            'role' => '0',
            'created_at' => '2022-04-23 11:12:05',
            'password' => '$2y$10$h45XBUUIwz/mARvOZrtYIOvCV8tz6oRlxKzSxTs/7CiawU2axPRdG',
        ]);

        User::create([
            'name' => 'Mikasa Ackerman',
            'email' => 'mikasaxeren@tip.edu.ph',
            'role' => '0',
            'created_at' => '2022-03-23 11:12:05',
            'password' => '$2y$10$h45XBUUIwz/mARvOZrtYIOvCV8tz6oRlxKzSxTs/7CiawU2axPRdG',
        ]);

        User::create([
            'name' => 'Padilla Jamaico',
            'email' => 'mjdpadilla@tip.edu.ph',
            'role' => '0',
            'created_at' => '2022-05-23 11:12:05',
            'password' => '$2y$10$h45XBUUIwz/mARvOZrtYIOvCV8tz6oRlxKzSxTs/7CiawU2axPRdG',
        ]);

        User::create([
            'name' => 'Doods Rodrigo',
            'email' => 'doods2@tip.edu.ph',
            'role' => '0',
            'created_at' => '2022-06-23 11:12:05',
            'password' => '$2y$10$h45XBUUIwz/mARvOZrtYIOvCV8tz6oRlxKzSxTs/7CiawU2axPRdG',
        ]);

        User::create([
            'name' => 'Doods Rodrigo',
            'email' => 'doods@tip.edu.ph',
            'role' => '0',
            'created_at' => '2022-07-23 11:12:05',
            'password' => '$2y$10$h45XBUUIwz/mARvOZrtYIOvCV8tz6oRlxKzSxTs/7CiawU2axPRdG',
        ]);

        User::create([
            'name' => 'Eyyy Rodrigo',
            'email' => 'eyyddd@tip.edu.ph',
            'role' => '0',
            'created_at' => '2022-07-23 11:12:05',
            'password' => '$2y$10$h45XBUUIwz/mARvOZrtYIOvCV8tz6oRlxKzSxTs/7CiawU2axPRdG',
        ]);

        User::create([
            'name' => 'Rin',
            'email' => 'rddab@tip.edu.ph',
            'role' => '0',
            'created_at' => '2022-07-23 11:12:05',
            'password' => '$2y$10$h45XBUUIwz/mARvOZrtYIOvCV8tz6oRlxKzSxTs/7CiawU2axPRdG',
        ]);
    }
}
