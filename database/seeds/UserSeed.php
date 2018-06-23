<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Admin', 'email' => 'admin@admin.com', 'password' => '$2y$10$2kK/Yjku2V2DvpXtBJMlMO3/k3vz4.TAT7wBBWwsWCNJnmTw5A4RK', 'role_id' => 1, 'remember_token' => '',],
            ['id' => 2, 'name' => 'Minhazul Kabir', 'email' => 'kabir110409@acc.edu.bd', 'password' => '$2y$10$HqQzk.ZE78tdY6sOBzThqeo4yHpWgLwh4Jq0fXtpo7i2nJr3NA2SO', 'role_id' => 1, 'remember_token' => null,],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
