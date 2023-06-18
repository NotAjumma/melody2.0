<?php 
namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $allowedFields = ['username', 'password', 'email', 'date_of_birth', 'gender'];

    protected $beforeInsert = ['assignDefaultRole'];

    protected function assignDefaultRole(array $data)
    {
        $data['data']['role_id'] = 2; // Set default role_id to 2
        return $data;
    }
}
