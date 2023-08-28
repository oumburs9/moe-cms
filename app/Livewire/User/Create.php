<?php

namespace App\Livewire\User;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Actions\Fortify\PasswordValidationRules;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Create extends Component
{
    use PasswordValidationRules;
    public $data, $roles, $role=[];
    public $name, $email, $phone;
    public $password, $confirmpassword;

     // Validation rules
     protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|same:confirmpassword',
        'phone' => 'nullable|numeric',
        'role'=>'required'
    ];

    public function mount()
    {
        $user=Auth::user();
        $this->roles = Role::whereIn('name', $user->getRoleNames())->pluck('name','name')->all();

        if ( $user->hasRole(['Content-Manager'])) {
            $this->roles = Role::whereIn('name', ['Content-Manager'])->pluck('name','name')->all();
        }

        if($user->hasRole(['Super-Admin', 'Admin']))
        {
            // $this->users = User::all();
            $this->roles = Role::pluck('name','name')->all();
        }
    }

    public function addUser()
    {
        $this->validate();

        $validatedData = $this->validate($this->rules);
        $validatedData['password'] = Hash::make($this->password);
        // $validatedData->assignRole($request->input('roles'));
        // dd($validatedData['role']);
        $user = User::create($validatedData);
        $user->assignRole($validatedData['role']);
        $this->alertSuccess();
    }

    public function alertSuccess()
    {
        $this->dispatchBrowserEvent(
            'alert',
            ['type' => 'success',  'message' => 'User Created Successfully!']
        );
    }

    public function alertError($name)
    {
        $this->dispatchBrowserEvent(
            'alert',
            ['type' => 'error',  'message' => $name.' Required!']
        );
    }

    public function render()
    {
        return view('livewire.user.create');
    }
}
