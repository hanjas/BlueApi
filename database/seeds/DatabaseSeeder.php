<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UserTableSeeder');
		$this->call('ReportsTableSeeder');
		$this->call('ProjectsTableSeeder');
		$this->call('FeedsTableSeeder');
		$this->call('CommentsTableSeeder');
		$this->call('TaskAndTaskbagTableSeeder');
	}

}