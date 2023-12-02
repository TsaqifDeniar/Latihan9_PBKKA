<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class News extends Seeder
{
	public function run()
	{
		// membuat data
		$news_data = [
			[
				'title' => 'Selamat datang di Codeigntier ini',
				'slug'  => 'codeigniter-intro',
				'content' => 'Pengenalan Codeigniter'
			],
			[
				'title' => 'Hello World',
				'slug' => 'hello-world',
				'content' => 'Hello World, contoh artikel'
			],
			[
				'title' => 'komunitas Codeigniter Indonesia',
				'slug'	=> 'codeigniter-meetup',
				'content' => 'Seru sekali meetup perdana komunitas'
			]
		];

		foreach($news_data as $data){
			// insert semua data ke tabel
			$this->db->table('news')->insert($data);
		}

	}
}