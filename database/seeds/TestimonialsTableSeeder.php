<?php

use Illuminate\Database\Seeder;

class TestimonialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $testimonials = [
			[
				'from' => 'Bettina C.',
				'content' => 'I will recommend you to my colleagues. Needless to say we are extremely satisfied with the results. I have gotten at least 50 times the value from Sapioweb. Great job!',
			],
			[
				'from' => 'Sherman G.',
				'content' => 'I STRONGLY recommend Sapioweb to EVERYONE interested in running a successful online business! Needless to say we are extremely satisfied with the results. Thanks guys.',
			],
			[
				'from' => 'Melvyn O.',
				'content' => 'Sapioweb really saves me time and effort. They are exactly what our business has been lacking and the best investment our company has made. Hosting is also highly adaptable.',
			],
		];

		foreach ($testimonials as $testimonial) {
			App\Testimonial::create($testimonial);
		}
    }
}
