<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['username' => 'timon'],
            [
                'name' => 'Timothy Bernardo U. Salacup',
                'full_name' => 'Timothy Bernardo U. Salacup',
                'email' => 'timothysalacup@gmail.com',
                'password' => Hash::make('password102938'),
            ]
        );

        $tasks = [
            ['title' => 'Review class notes', 'status' => 'completed', 'day' => -1],
            ['title' => 'Organize study materials', 'status' => 'pending', 'day' => -1],
            ['title' => 'Attend web systems class', 'status' => 'pending', 'day' => 0],
            ['title' => 'Work on Laravel assignment', 'status' => 'pending', 'day' => 0],
            ['title' => 'Review migration and model code', 'status' => 'pending', 'day' => 0],
            ['title' => 'Prepare for a quiz', 'status' => 'pending', 'day' => 1],
            ['title' => 'Submit coursework', 'status' => 'pending', 'day' => 1],
            ['title' => 'Plan next week’s tasks', 'status' => 'pending', 'day' => 2],
        ];

        foreach ($tasks as $task) {
            Task::updateOrCreate(
                ['title' => $task['title']],
                [
                    'status' => $task['status'],
                    'task_date' => today()->addDays($task['day'])->toDateString(),
                ]
            );
        }
    }
}