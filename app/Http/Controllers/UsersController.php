<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RepositoryInterfaces\UserRepositoryInterface;

class UsersController extends Controller
{
    private $userRepository;
   public function __construct(UserRepositoryInterface $userRepositoryOb){
    $this->userRepository=$userRepositoryOb;
   }
   public function index(){
    $users=$this->userRepository->all();

    return view ('welcome', ['users' => $users]);
   }
   public function store(Request $request)
    {
        $userData = $request->all();
        $user = $this->userRepository->create($userData);
        // dd($user);
        return redirect()->back()->with('success_message','user has been saved successfully');
    }
}
