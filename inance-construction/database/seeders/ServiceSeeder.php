<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'title' => 'Residential Construction',
                'description' => 'Custom home building and residential construction services',
                'image' => 'residential.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Commercial Construction',
                'description' => 'Office buildings, retail spaces, and commercial construction',
                'image' => 'commercial.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Renovation & Remodeling',
                'description' => 'Home and building renovation and remodeling services',
                'image' => 'renovation.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Industrial Construction',
                'description' => 'Warehouses, factories, and industrial facility construction',
                'image' => 'industrial.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Project Management',
                'description' => 'Complete project management and construction oversight',
                'image' => 'project-management.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Green Building',
                'description' => 'Sustainable and eco-friendly construction solutions',
                'image' => 'green-building.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}