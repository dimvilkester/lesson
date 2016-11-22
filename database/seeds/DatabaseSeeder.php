<?php
use Illuminate\Database\Seeder;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(PostsSeeder::class);
    }
}

class PostsSeeder extends Seeder
{
	public function run()
	{
		DB::table('Posts')->delete();
		
		Post::create([
			'fullname' => 'Иванов Иван Иванович',
			'slug' => 'ivanov-ivan-ivanovich',
			'namberphone' => '<p>12-23-34<p>',
			'published' => true,
			'published_at' => DB::raw('CURRENT_TIMESTAMP'),
		]);

		Post::create([
			'fullname' => 'Петров Петр Петрович',
			'slug' => 'petrov-petr-petrovich',
			'namberphone' => '<p>21-10-09<p>',
			'published' => false,
			'published_at' => DB::raw('CURRENT_TIMESTAMP'),
		]);

		Post::create([
			'fullname' => 'Васильев Василий Васильевич',
			'slug' => 'vasiliev-vasily-vasilievich',
			'namberphone' => '<p>98-76-54<p>',
			'published' => false,
			'published_at' => DB::raw('CURRENT_TIMESTAMP'),
		]);
	}
}