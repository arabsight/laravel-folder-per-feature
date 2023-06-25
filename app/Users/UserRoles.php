<?php

namespace App\Users;

enum UserRoles: string
{
    case USER = 'USER';
    case ADMIN = 'ADMIN';
    case SUPERADMIN = 'SUPERADMIN';
}
