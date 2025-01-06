<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Repositories\AccountRepository;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function __construct(
        public AccountRepository $accountRepository
    ){}

    public function getList() {
        return $this->accountRepository->getAll();
    }

    public function search(Request $request) {
        return $this->accountRepository->search($request);
    }
}
