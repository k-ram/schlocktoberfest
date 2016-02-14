<?php 

namespace App\Models;

class Comment extends DatabaseModel
{
	protected static $tableName = "comments";
	protected static $columns = ['id', 'comment', 'user_id', 'movie_id', 'time_stamp'];
	protected static $validationRules = [
					'user_id'			=> 'numeric,exists:\App\Models\User',
					'movie_id'			=> 'numeric,exists:\App\Models\Movies',
					'comment'			=> 'minlength:10,maxlength:1600',
	];

	public function user()
	{
		return new User($this->user_id);
	}
}