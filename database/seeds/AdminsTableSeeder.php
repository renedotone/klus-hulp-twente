<?php

use Illuminate\Database\Seeder;
use\App\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create
        ([
            'name' => 'Jeroen',
            'job_title' => 'Super Admin',
            'email' => 'jeroen@hotmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456'),
        ]);
        Admin::create
        ([
            'name' => 'Rene',
            'job_title' => 'Super Admin',
            'email' => 'rene@hotmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456'),
        ]);
        Admin::create
        ([
            'name' => 'Clemens',
            'job_title' => 'Super Admin',
            'email' => 'clemens@hotmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456'),
        ]);
        Admin::create
        ([
            'name' => 'Bernard',
            'job_title' => 'Super Admin',
            'email' => 'bernard@hotmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456'),
        ]);
    }
}
