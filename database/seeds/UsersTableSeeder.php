<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User as User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('users')->delete();

        $users = array(
                ['name' => 'Yuvraj Pratap', 'email' => 'yuvraj.pratap@businessprodesigns.com', 'password' => Hash::make('secret')],
                ['name' => 'Subhankar Pramanik', 'email' => 'subhankar.pramanik@businessprodesigns.com', 'password' => Hash::make('secret')],
                ['name' => 'Prasenjit Ghosh', 'email' => 'Prasenjit.Ghosh@businessprodesigns.com', 'password' => Hash::make('secret')],
                ['name' => 'Soham Banik', 'email' => 'soham.banik@businessprodesigns.com', 'password' => Hash::make('secret')],
        );
            
        // Loop through each user above and create the record for them in the database
        foreach ($users as $user)
        {
            User::create($user);
        }

        Model::reguard();
    }
}
