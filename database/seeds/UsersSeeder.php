<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $adminRole = new Role();
        $adminRole->name = "Admin";
        $adminRole->display_name = "admin";
        $adminRole->save();

        $memberRole = new Role();
        $memberRole->name = "Member";
        $memberRole->display_name = "member";
        $memberRole->save();

        $admin = new User();
        $admin->name = "Admin Toko Sepatu";
        $admin->email = "admin@gmail.com";
        $admin->password = bcrypt('rahasia');
        $admin->save();
        $admin->attachRole($adminRole);

        $member = new User();
        $member->name = "Sample Member";
        $member->email = "member@gmail.com";
        $member->password = bcrypt('rahasia');
        $member->save();
        $member->attachRole($memberRole);
    }
}
