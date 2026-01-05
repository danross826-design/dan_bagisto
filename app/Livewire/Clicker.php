<?php 

namespace App\Livewire;

use Livewire\Component;

class Clicker extends Component
{
	public $username = "testuser";

	public function handleClick()
	{
		dump('clicked');
	}

	public function createNewUser()
	{
		User::create([
			'name' => "test user",
			'email' => "test@test.com",
			'password' => '1634343'
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