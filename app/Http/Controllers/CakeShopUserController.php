<?php



namespace App\Http\Controllers;

use App\Models\CakeShopUser;
use Illuminate\Http\Request;

class CakeShopUserController extends Controller
{
    public function countUsers()
    {
        $count = CakeShopUser::count();
        return view('cake-shop-users-count', compact('count'));
    }
}