<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Transformers\UserTransformer;

class UserController extends Controller
{
    public function index()
    {
        return fractal(User::paginate(5), UserTransformer::class);
    }
}
