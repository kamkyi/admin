<?php

use Illuminate\Database\Seeder;
use App\Models\Todo\Todo;

class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Todo::create([
            'user_id' => 1,
            'title' => 'တီဗီကြည့်မယ်',
            'completed' => false
        ]);
       // factory(Todo::class,1)->create();
    }
}
