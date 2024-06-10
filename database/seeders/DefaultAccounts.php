<?php

namespace Database\Seeders;
use File;
use DateTime;
use App\Models\Role;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Database\Seeder;
use App\Models\UserAccountSetting;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;

class DefaultAccounts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createDefaultRole();
        $this->createDefaultAccount();
    }


   
    public function createDefaultRole() {

          DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::statement('TRUNCATE TABLE roles');
           DB::statement('TRUNCATE TABLE model_has_roles');
  DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $roles = ['Admin', 'Employer','Feelancer'];
        foreach($roles as $role){
            $exist = Role::where( 'name', $role )->exists();
            if(!$exist){
                Role::create([
                    'name'          => $role,
                    'guard_name'    => 'web',
                ]);
            }
        }
    }
     public function createDefaultAccount() {

       // User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        User::truncate();
DB::statement('SET FOREIGN_KEY_CHECKS=1;');

   

        $users = [
            'Admin' => [
                [//1
                    'email'         => 'admin@gmail.com',
                    'password'      => '654321',
                    'name'    => 'Admin',
                 
                ]
            ],
            
        ];
       

      


        foreach($users as $role_name => $accounts){
            foreach($accounts as $seq_no => $account){
            $checkAccount = User::where('email', $account['email'])->exists();
                if(!$checkAccount){
                    $user = User::create([
                        'email'             => ($account['email']),
                        'name'             => ($account['name']),
                        'password'          => Hash::make($account['password']),
                        'email_verified_at' => date("Y-m-d H:i:s"),
                    ]);
                
                    $role_id = getRoleByName($role_name);
                    // create new profile with role
                   

                    $user->assignRole( $role_id );

                   
                }
            }
        }
    }
}
