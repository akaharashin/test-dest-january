<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Destination;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@g.com',
            'role' => 'admin',
            'password' => bcrypt('admin')
        ]);

        Kategori::create([
            'name' => 'Mancanegara'
        ]);
        Kategori::create([
            'name' => 'Lokal'
        ]);
        Kategori::create([
            'name' => 'Mix'
        ]);


        Destination::create([
            'name' => 'Tokyo Tower',    
            'image' => 'tokyotower.jpg',
            'address' => 'Tokyo, Japan',
            'coordinat' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.7477988419278!2d139.7428579755611!3d35.658584831218015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2sTokyo%20Tower!5e0!3m2!1sen!2sid!4v1694587818043!5m2!1sen!2sid',
            'kategori_id' => 1,
        ]);
        Destination::create([
            'name' => 'Tokyo Tower',    
            'image' => 'tokyotower.jpg',
            'address' => 'Tokyo, Japan',
            'coordinat' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.7477988419278!2d139.7428579755611!3d35.658584831218015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2sTokyo%20Tower!5e0!3m2!1sen!2sid!4v1694587818043!5m2!1sen!2sid',
            'kategori_id' => 1,
        ]);
        Destination::create([
            'name' => 'Tokyo Tower',    
            'image' => 'tokyotower.jpg',
            'address' => 'Tokyo, Japan',
            'coordinat' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.7477988419278!2d139.7428579755611!3d35.658584831218015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2sTokyo%20Tower!5e0!3m2!1sen!2sid!4v1694587818043!5m2!1sen!2sid',
            'kategori_id' => 1,
        ]);
        Destination::create([
            'name' => 'Tokyo Tower',    
            'image' => 'tokyotower.jpg',
            'address' => 'Tokyo, Japan',
            'coordinat' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.7477988419278!2d139.7428579755611!3d35.658584831218015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2sTokyo%20Tower!5e0!3m2!1sen!2sid!4v1694587818043!5m2!1sen!2sid',
            'kategori_id' => 1,
        ]);
        Destination::create([
            'name' => 'Tokyo Tower',    
            'image' => 'tokyotower.jpg',
            'address' => 'Tokyo, Japan',
            'coordinat' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.7477988419278!2d139.7428579755611!3d35.658584831218015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2sTokyo%20Tower!5e0!3m2!1sen!2sid!4v1694587818043!5m2!1sen!2sid',
            'kategori_id' => 1,
        ]);
        Destination::create([
            'name' => 'Tokyo Tower',    
            'image' => 'tokyotower.jpg',
            'address' => 'Tokyo, Japan',
            'coordinat' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.7477988419278!2d139.7428579755611!3d35.658584831218015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2sTokyo%20Tower!5e0!3m2!1sen!2sid!4v1694587818043!5m2!1sen!2sid',
            'kategori_id' => 1,
        ]);
        Destination::create([
            'name' => 'Tokyo Tower',    
            'image' => 'tokyotower.jpg',
            'address' => 'Tokyo, Japan',
            'coordinat' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.7477988419278!2d139.7428579755611!3d35.658584831218015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2sTokyo%20Tower!5e0!3m2!1sen!2sid!4v1694587818043!5m2!1sen!2sid',
            'kategori_id' => 1,
        ]);
        Destination::create([
            'name' => 'Tokyo Tower',    
            'image' => 'tokyotower.jpg',
            'address' => 'Tokyo, Japan',
            'coordinat' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.7477988419278!2d139.7428579755611!3d35.658584831218015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2sTokyo%20Tower!5e0!3m2!1sen!2sid!4v1694587818043!5m2!1sen!2sid',
            'kategori_id' => 1,
        ]);
        Destination::create([
            'name' => 'Tokyo Tower',    
            'image' => 'tokyotower.jpg',
            'address' => 'Tokyo, Japan',
            'coordinat' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.7477988419278!2d139.7428579755611!3d35.658584831218015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2sTokyo%20Tower!5e0!3m2!1sen!2sid!4v1694587818043!5m2!1sen!2sid',
            'kategori_id' => 1,
        ]);
        Destination::create([
            'name' => 'Tokyo Tower',    
            'image' => 'tokyotower.jpg',
            'address' => 'Tokyo, Japan',
            'coordinat' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.7477988419278!2d139.7428579755611!3d35.658584831218015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2sTokyo%20Tower!5e0!3m2!1sen!2sid!4v1694587818043!5m2!1sen!2sid',
            'kategori_id' => 1,
        ]);
        Destination::create([
            'name' => 'Tokyo Tower',    
            'image' => 'tokyotower.jpg',
            'address' => 'Tokyo, Japan',
            'coordinat' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.7477988419278!2d139.7428579755611!3d35.658584831218015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2sTokyo%20Tower!5e0!3m2!1sen!2sid!4v1694587818043!5m2!1sen!2sid',
            'kategori_id' => 1,
        ]);
        Destination::create([
            'name' => 'Tokyo Tower',    
            'image' => 'tokyotower.jpg',
            'address' => 'Tokyo, Japan',
            'coordinat' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.7477988419278!2d139.7428579755611!3d35.658584831218015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2sTokyo%20Tower!5e0!3m2!1sen!2sid!4v1694587818043!5m2!1sen!2sid',
            'kategori_id' => 1,
        ]);
    }
}
