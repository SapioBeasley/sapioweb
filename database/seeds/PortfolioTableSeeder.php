<?php

use Illuminate\Database\Seeder;

class PortfolioTableSeeder extends Seeder
{
	/**
	* Run the database seeds.
	*
	* @return void
	*/
	public function run()
	{
		factory(App\Portfolio::class, 6)->create();
	}
}
