<?php

namespace App\Controllers;

use CodeIgniter\Database\Query;

class User extends BaseController
{
    protected $db, $getUser, $getPermit;

    public function __construct()
    {
        $this->db               = \config\Database::connect();
        $this->getUsers          = $this->db->table('users');
        $this->getPermit        = $this->db->table('auth_groups');
    }

    public function Users()
    {
        $this->getUsers->Select('users.id as userid, username, email, name as role');
        // join table users dengan table auth_groups_users
        $this->getUsers->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        // join table groups user dengan tabel auth_groups
        $this->getUsers->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');

        $query = $this->getUsers->get();
        $data['users'] = $query->getResult();

        return view('users/users', $data);
    }


    public function permission()
    {
        $this->getPermit->select('auth_groups.name as role, auth_permissions.name as permit');
        // join table auth_groups dengan table auth_groups_permissions
        $this->getPermit->join('auth_groups_permissions', 'auth_groups_permissions.group_id = auth_groups.id');
        // join table auth_groups_permissions dengan table auth_permissions
        $this->getPermit->join('auth_permissions', 'auth_permissions.id = auth_groups_permissions.permission_id');

        $query = $this->getPermit->get();
        $data['permission'] = $query->getResult();

        return view('users/permission', $data);
    }
}
