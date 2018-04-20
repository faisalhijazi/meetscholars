<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      foreach (range(1 , 25) as $i) {
        $user = User::create([
          'name' => str_random(8),
          'email' => str_random(12).'@gmail.com',
          'password' => bcrypt('123456'),
          'role' => 1,
        ]);
      }
    }
}
