<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = User::find(1);
       if($user){
        $user->name ='Rezaul Hoque';
        $user->email ='rhraz.bd@gmail.com';
        $user->password =Hash::make('password');
        $user->save();
       }else{
        $user = new User();
        $user->name ='Rezaul Hoque';
        $user->email ='rhraz.bd@gmail.com';
        $user->password =Hash::make('password');
        $user->save();
       }
   
    }
}
