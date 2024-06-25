<?php

namespace App\Models;

use CodeIgniter\Model;

class CheckLoginModel extends Model
{
    Protected $table = 'register';

    Public function checkIfExists($username, $password)
    {
        return $this->where('email', $username)
                    ->where('password', $password)
                    ->countAllResults() > 0;
    }
}
