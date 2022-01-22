<?php

namespace App\Controllers;

use CodeIgniter\Database\Query;
use Myth\Auth\Models\UserModel;

class UserController extends BaseController
{
    protected $db, $getUsers;

    public function __construct()
    {
        $this->db           = \config\Database::connect();
        $this->getUsers     = $this->db->table('users');
    }

    public function users()
    {
        $this->getUsers->Select('users.id as userid, username, email, name as role');
        $this->getUsers->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->getUsers->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->getUsers->get();
        $data['users'] = $query->getResult();

        return view('user/users', $data);
    }
    
    public function detail($id = 0)
    {
        $this->getUsers->Select(' firstname, lastname, username, email, user_img, name as role');
        $this->getUsers->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->getUsers->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->getUsers->where('users.id', $id);
        $query = $this->getUsers->get();
        $data['user'] = $query->getRow();

        if (empty($data['user']))
        {
            return redirect()->back();
        }

        return view('user/detail', $data);
    }

    public function delete($id)
    {
        $this->getUsers->where('id', $id)->delete();
        return redirect()->back()->with('message', 'Data Deleted Successfully');
    }
}
