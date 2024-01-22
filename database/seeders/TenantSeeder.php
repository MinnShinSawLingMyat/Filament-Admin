<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::create([
            'name' => 'Min Shin Saw',
            'slug' => 'min-shin-saw',
        ])->users()->attach(User::find(1));

        Team::create([
            'name' => 'Edu Plus',
            'slug' => 'edu-plus',
        ])->users()->attach(User::all());
    }
}
