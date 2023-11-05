<?php

namespace Database\Seeders;

use App\Models\Division;
use App\Models\SubDivision;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{

    public function run()
    {

        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            



        ];

        foreach ( $permissions as $permission ) {

            $is_already_exist = Permission::where('name', $permission)->exists();

            if ( !$is_already_exist) {

                $model             = new Permission();
                $model->name       = $permission;
                $model->guard_name = "web";
                $model->save();
            }
        }

    }
}
