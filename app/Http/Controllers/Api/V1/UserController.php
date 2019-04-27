<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Models\User;
use App\Transformers\UserTransformer;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        return fractal(User::paginate(5), UserTransformer::class);
    }
}
