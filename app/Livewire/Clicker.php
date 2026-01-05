<?php 

namespace App\Livewire;

use Livewire\Component;

class Clicker extends Component
{
	#[Rule('required|min:2|max:50')]
	public $name = '';

	#[Rule('required|email|unique:users')]
	public $email = '';

	#[Rule('required')]
	public $password = '';

	public function handleClick()
	{
		dump('clicked');
	}

	public function createNewUser()
	{
		$validated = $this->validate();

		User::create([
			'name' => $validated['name'],
			'email' => $validated['email'],
			'password' => Hash::make($validated['password'])
		]);
	}

	public function render()
	{
		$title = "Test";

		$users = User::all();

		return view('livewire.clicker', [
			'title' => $title,
			'users' => $users
		]);
	}

}