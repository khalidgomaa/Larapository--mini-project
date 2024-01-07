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
    return view ('welcome');
   }
   public function store(){

   }
}
