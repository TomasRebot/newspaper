<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $user =   User::create([
          'name'=> 'Tomas rebot',
          'email'=> 'tomas.devel@gmail.com' ,
          'password'=> Hash::make('tomas') ,

      ]);
    }
}
