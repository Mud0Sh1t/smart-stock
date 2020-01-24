<?php
/**
 * Created by PhpStorm.
 * User: MUD0
 * Date: 24/01/2020
 * Time: 15:01
 */

namespace App\Controller\AdminController;

use Symfony\Component\Routing\Annotation\Route;

/**
 * Class logoutAdminController
 * @package App\Controller\AdminController
 * @Route("/logout", name="logout")
 */
class LogoutAdminController
{
    public function __invoke()
    {
        return new \Exception('Logout success');
    }
}