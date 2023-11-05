<?php

namespace Database\Seeders;

use App\Models\Division;
use App\Models\SubDivision;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{

    public function run()
    {

        $roles = [
            'Super Admin',
            'Admin',
        ];

        foreach ( $roles as $role ) {

            $model             = new Role();
            $model->name       = $role;
            $model->guard_name = "web";

            $model->save();
        }

    }
}
