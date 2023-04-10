<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class UserController extends Controller
{
/**
 * This function get  users .
 *
 * @return collection all users with.
 */
    public function index(): Collection
    {
        $users = User::all();
        return $users;
    
    }
/**
 * This function get  users .
 * @param int user id
 * @return User  user with orders .
 */
    public function show($userid)
    {
        $user = User::with('orders')->findorfail($userid);

        

        return $user;
    }

    /**
 * This function get  users .
 * 
 * @return User Static we can make it dynamique too just for demo purposes use .
 */
    public function filter()
    {
        $filters = [
            'role' => 'user',
            'age' => 30,    
            'location' => 'New York',
            'language_proficiency' => 'English',
        ];
        
        $users = User::filter($filters)->get();

        return $users;
    }

}
