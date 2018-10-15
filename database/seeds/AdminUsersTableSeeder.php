<?php

use Illuminate\Database\Seeder;
use App\Admin;
class AdminUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = new App\Admin;
        $admin->email = 'admin@app.com';
        $admin->password = Hash::make('123456');
        $admin->save();
    }
}
