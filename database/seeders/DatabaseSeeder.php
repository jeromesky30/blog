<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'Jerome Pingol',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin@gmail.com'),
            'usertype' => 'admin',
        ]);

        \App\Models\User::create([
            'name' => 'Juan Dela Cruz',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user@gmail.com'),
            'usertype' => 'user',

        ]);

        \App\Models\Post::create([
            'title' => '10 Tips for Staying Productive While Working from Home',
            'content' => "With more and more people working remotely, staying productive while working from home can be a challenge. Here are 10 tips to help you stay focused and get more done: Create a dedicated workspace: Set up a space in your home that is dedicated solely to work. This will help you create a clear separation between work and home life. Set clear boundaries: Communicate with family members and roommates to ensure they know when you are working and when you are not. Stick to a schedule: Establish a routine and try to stick to it as much as possible. This will help you stay focused and get more done. Take breaks: It's important to take regular breaks to recharge and stay refreshed. Get up and stretch, take a walk outside, or do some other activity that helps you clear your mind. Minimize distractions: Turn off your phone, log out of social media, and close your email inbox while you work. This will help you stay focused on the task at hand.",

        ]);

        \App\Models\Post::create([
            'title' => "The Science of Sleep: How to Get Better Rest and Improve Your Overall Health",
            'content' => "Sleep is essential for our physical and mental health, but many of us struggle to get the rest we need. This post could delve into the latest research on sleep and offer tips for getting better rest, such as developing a sleep routine, managing stress and anxiety, and optimizing your sleep environment.", 

        ]);

        \App\Models\Post::create([
            'title' => "Mastering the Art of Negotiation: Strategies for Getting What You Want",
            'content' => "Negotiation is an essential skill in both personal and professional settings. This post could provide readers with a step-by-step guide for negotiating effectively, covering topics like active listening, understanding your negotiation style, and developing win-win solutions.", 

        ]);

    }
}
