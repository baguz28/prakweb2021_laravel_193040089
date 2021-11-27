<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        User::create([
            'name' => 'Tito Bagus',
            'username' => 'titobagus',
            'email' => 'tito@gmail.com',
            'password' => bcrypt('password')
        ]);
        
        /*
        User::create([
            'name' => 'Abel',
            'email' => 'abel@gmail.com',
            'password' => bcrypt('12345')
        ]);*/

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        /*
        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem, ipsum pertama',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore laudantium maxime veritatis vero, quaerat necessitatibus ratione voluptatum quod eveniet id, perferendis iure odit rem quis cum molestiae eaque quam sapiente adipisci ipsa dolore voluptas facere ipsum. Atque nihil vitae possimus esse, quis dignissimos sequi eaque modi officiis eligendi sunt in accusamus. Itaque ut nisi laborum magni labore blanditiis? Assumenda soluta amet iusto! Nisi aspernatur illo obcaecati et iusto unde corporis exercitationem commodi amet, sunt voluptates soluta eaque omnis eveniet similique magni quae cumque id accusantium vel minima nobis est esse?</p> <p>Aspernatur, ullam perspiciatis aliquid qui quos nam expedita et recusandae eaque quae iste. Molestiae, quos quia! Officia autem non sapiente ullam architecto, tempora nisi ex temporibus laboriosam sed perspiciatis et impedit quasi repellat voluptatem repellendus. Impedit in molestiae excepturi, fugit cupiditate ex? Quaerat pariatur, eum maxime veritatis ipsum voluptate consequuntur id repudiandae odio nulla consequatur sed culpa, fugiat expedita tempora.</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem, ipsum kedua',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore laudantium maxime veritatis vero, quaerat necessitatibus ratione voluptatum quod eveniet id, perferendis iure odit rem quis cum molestiae eaque quam sapiente adipisci ipsa dolore voluptas facere ipsum. Atque nihil vitae possimus esse, quis dignissimos sequi eaque modi officiis eligendi sunt in accusamus. Itaque ut nisi laborum magni labore blanditiis? Assumenda soluta amet iusto! Nisi aspernatur illo obcaecati et iusto unde corporis exercitationem commodi amet, sunt voluptates soluta eaque omnis eveniet similique magni quae cumque id accusantium vel minima nobis est esse?</p> <p>Aspernatur, ullam perspiciatis aliquid qui quos nam expedita et recusandae eaque quae iste. Molestiae, quos quia! Officia autem non sapiente ullam architecto, tempora nisi ex temporibus laboriosam sed perspiciatis et impedit quasi repellat voluptatem repellendus. Impedit in molestiae excepturi, fugit cupiditate ex? Quaerat pariatur, eum maxime veritatis ipsum voluptate consequuntur id repudiandae odio nulla consequatur sed culpa, fugiat expedita tempora.</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem, ipsum ketiga',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore laudantium maxime veritatis vero, quaerat necessitatibus ratione voluptatum quod eveniet id, perferendis iure odit rem quis cum molestiae eaque quam sapiente adipisci ipsa dolore voluptas facere ipsum. Atque nihil vitae possimus esse, quis dignissimos sequi eaque modi officiis eligendi sunt in accusamus. Itaque ut nisi laborum magni labore blanditiis? Assumenda soluta amet iusto! Nisi aspernatur illo obcaecati et iusto unde corporis exercitationem commodi amet, sunt voluptates soluta eaque omnis eveniet similique magni quae cumque id accusantium vel minima nobis est esse?</p> <p>Aspernatur, ullam perspiciatis aliquid qui quos nam expedita et recusandae eaque quae iste. Molestiae, quos quia! Officia autem non sapiente ullam architecto, tempora nisi ex temporibus laboriosam sed perspiciatis et impedit quasi repellat voluptatem repellendus. Impedit in molestiae excepturi, fugit cupiditate ex? Quaerat pariatur, eum maxime veritatis ipsum voluptate consequuntur id repudiandae odio nulla consequatur sed culpa, fugiat expedita tempora.</p>',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem, ipsum keempat',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore laudantium maxime veritatis vero, quaerat necessitatibus ratione voluptatum quod eveniet id, perferendis iure odit rem quis cum molestiae eaque quam sapiente adipisci ipsa dolore voluptas facere ipsum. Atque nihil vitae possimus esse, quis dignissimos sequi eaque modi officiis eligendi sunt in accusamus. Itaque ut nisi laborum magni labore blanditiis? Assumenda soluta amet iusto! Nisi aspernatur illo obcaecati et iusto unde corporis exercitationem commodi amet, sunt voluptates soluta eaque omnis eveniet similique magni quae cumque id accusantium vel minima nobis est esse?</p> <p>Aspernatur, ullam perspiciatis aliquid qui quos nam expedita et recusandae eaque quae iste. Molestiae, quos quia! Officia autem non sapiente ullam architecto, tempora nisi ex temporibus laboriosam sed perspiciatis et impedit quasi repellat voluptatem repellendus. Impedit in molestiae excepturi, fugit cupiditate ex? Quaerat pariatur, eum maxime veritatis ipsum voluptate consequuntur id repudiandae odio nulla consequatur sed culpa, fugiat expedita tempora.</p>',
            'category_id' => 2,
            'user_id' => 2
        ]);
        */
    }
}
