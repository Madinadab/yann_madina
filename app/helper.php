<?php

use App\Models\User;

function isEmpty()
{

    return User::where('type', 1)->get()->count() == 0;
}
