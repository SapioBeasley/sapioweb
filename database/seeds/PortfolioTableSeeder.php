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
		$portfolios = [
			[
				'title' => 'HOME VALUE',
				'content' => 'JACOBSGROUPVEGAS.COM/PROPERTY-VALUE',
			],
			[
				'title' => 'SHANICE ROSS',
				'content' => 'SHANICEROSSMUSIC.COM',
			],
			[
				'title' => 'sophisticated ignoranz',
				'content' => 'sophisticatedignoranz.com',
			],
			[
				'title' => 'Revita Brush',
				'content' => 'revitabrush.com',
			],
			[
				'title' => 'JACOBS GROUP VEGAS',
				'content' => 'JACOBSGROUPVEGAS.COM',
			],
			[
				'title' => 'Hairby Lena J',
				'content' => 'hairbylenaj.com',
			],
		];

		foreach ($portfolios as $portfolio) {
			App\Portfolio::create($portfolio);
		}
	}
}
