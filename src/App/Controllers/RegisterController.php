<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Services\{ValidatorService, UserService};
use App\Config\Paths;


class RegisterController
{
    public function __construct(private TemplateEngine $view, private ValidatorService $validatorService, private UserService $userService) {}

    public function register()
    {
        echo $this->view->render('register.php', [
            'title' => "register"
        ]);
    }
    public function loginView()
    {
        echo $this->view->render('login.php', [
            'title' => "login page"
        ]);
    }

    public function registers()
    {
        $this->validatorService->validateRegister($_POST);


        $this->userService->isEmailTaken($_POST['email']);

        $this->userService->create($_POST);

        redirectTo('/');
    }

    public function login()
    {
        $this->validatorService->validateLogin($_POST);

        $this->userService->login($_POST);

        redirectTo('/   ');
    }
}
