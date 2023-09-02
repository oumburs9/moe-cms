<?php

namespace App\Livewire\User;
use App\Models\User;
use Livewire\WithPagination;
use Livewire\Component;

class ListUser extends Component
{
    use WithPagination;
    public $recordes = 5;
     public $column = 'name';
     public $sortType='asc';

     public $search='';
    //  public $attributes=[
    //      'name', 'email', 'phone'
    //  ];

     public function updatedSearch(){
         $this->column = 'name';
         $this->sortType='asc';
         $this->resetPage();
     }

     public function sort($value){
         if($this->column==$value && $this->sortType=='asc'){
             $this->sortType='desc';
         }else{
             $this->column=$value;
             $this->sortType='asc';
         }
         $this->resetPage();
     }

    public function render()
    {
   
        return view('livewire.user.list-user', [
            'users'=>User::orderBy('created_at', 'desc')->get()])->layout('layouts.app');
    }
}
