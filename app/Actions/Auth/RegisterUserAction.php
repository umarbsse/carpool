<?php

namespace App\Actions\Auth;

use App\Events\Auth\UserRegistered;
use App\Models\User;
use App\Services\Auth\AuthService;

class RegisterUserAction
{
    public function __construct(
        private AuthService $authService
    ) {}

    public function execute(array $data): User
    {
        $user = $this->authService->register($data);

        UserRegistered::dispatch($user);

        return $user;
    }
}