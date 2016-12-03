<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
	public function index() {
		$users = [
			0 => [
				'first_name' => 'Nho',
				'last_name' => 'Nguyen',
				'location' => 'Da Nang'
			],
			1 => [
				'first_name' => 'Minh',
				'last_name' => 'Tran',
				'location' => 'Quang Nam'
			]
		];

		return view('admin.users.index', compact('users'));
	}

	public function create() {
		return view('admin.users.create');
	}

	public function store(Request $request) {
		User::create($request->all());
		return 'success';
		return $request->all();
	}
}
