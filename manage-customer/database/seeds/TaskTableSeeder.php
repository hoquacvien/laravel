<?php
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder {

	public function run() {
		$dataArray = [];
		for ($i = 0; $i < 10; $i++) {
			array_push($dataArray, [
				'title' => str_random(10),
				'content' => str_random(10),
				'image' => str_random(10) . '/public/',
				'due_date' => date('Y-m-d H:i:s'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			]);
		}
		DB::table('task')->insert($dataArray);
	}
}