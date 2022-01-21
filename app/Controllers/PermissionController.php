<?php

namespace App\Controllers;

use CodeIgniter\Database\Query;

class PermissionController extends BaseController
{
    protected $db, $getPermit;

    public function __construct()
    {
        $this->db               = \config\Database::connect();
        $this->getPermit        = $this->db->table('auth_groups');
    }

    public function index()
    {
        $this->getPermit->select('auth_groups.name as role, auth_permissions.name as permit');
        // join table auth_groups dengan table auth_groups_permissions
        $this->getPermit->join('auth_groups_permissions', 'auth_groups_permissions.group_id = auth_groups.id');
        // join table auth_groups_permissions dengan table auth_permissions
        $this->getPermit->join('auth_permissions', 'auth_permissions.id = auth_groups_permissions.permission_id');

        $query = $this->getPermit->get();
        $data['permission'] = $query->getResult();

        return view('user/permission', $data);
    }
}
