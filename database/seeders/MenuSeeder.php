<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu = Menu::firstOrCreate([
            'title' => 'Dashboard',
            'icon' => 'home-outline',
            'route' => '/',
        ]);
        $menu = Menu::firstOrCreate([
            'title' => 'Widgets',
            'icon' => 'apps-outline',
            'route' => '/widgets',
        ]);
        $menu = Menu::firstOrCreate([
            'title' => 'Forms',
            'icon' => 'id-card-outline',
            'route' => '/forms',
        ]);
        $menu = Menu::firstOrCreate([
            'title' => 'Sliders',
            'icon' => 'images-outline',
            'route' => '/sliders',
        ]);
        $menu = Menu::firstOrCreate([
            'title' => 'Settings',
            'icon' => 'settings-outline',
            'route' => '/new',
        ]);
        $menu = Menu::firstOrCreate([
            'title' => 'Password',
            'icon' => 'lock-closed-outline',
            'route' => '/new',
        ]);
        $menu = Menu::firstOrCreate([
            'title' => 'Sign out',
            'icon' => 'log-out-outline',
            'route' => '/new',
        ]);


    }
}
