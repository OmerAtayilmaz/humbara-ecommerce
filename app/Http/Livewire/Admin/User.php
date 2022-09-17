<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User as UserORM;
class User extends Component
{
    public $search='';
    public $limit=10;
    public function render()
    {
        $search=$this->search;
        $userList=UserORM::
        select('id','email_verified_at','profile_photo_path','name','surname','email')
        ->latest()
        ->where(function($query) use ($search){
            return $query->where('name','LIKE',"%".$search."%")
                    ->orWhere('email','LIKE','%'.$search.'%')
                    ->orWhere('surname','LIKE','%'.$search.'%')
                    ->orWhere('id','LIKE','%'.$search.'%');
        })
        ->limit($this->limit)
        ->get();


        return view('livewire.admin.user',[
            'userList'=>$userList
        ]);
    }
}
