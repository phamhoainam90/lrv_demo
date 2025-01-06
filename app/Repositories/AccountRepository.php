<?php

namespace App\Repositories;

use App\Models\Account;
use App\Repositories\BaseRepository;

class AccountRepository extends BaseRepository
{

    public function getModel()
    {
        return Account::class;
    }

    public function search($params)
    {
        $name = data_get($params, 'name');
        $email = data_get($params, 'email');
        $q = $this->_model;
        if (!blank($name)) {
            $q = $q->where('name', 'like', '%' . $name . '%');
        }
        if (!blank($email)) {
            $q = $q->where('email', 'like', '%' . $email . '%');
        }
        return $q->get();
    }
}
