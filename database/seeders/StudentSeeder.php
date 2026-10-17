<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            ['name' => 'Ahmad Fauzi', 'email' => 'ahmad.fauzi@example.com'],
            ['name' => 'Budi Santoso', 'email' => 'budi.santoso@example.com'],
            ['name' => 'Citra Dewi', 'email' => 'citra.dewi@example.com'],
            ['name' => 'Doni Pratama', 'email' => 'doni.pratama@example.com'],
            ['name' => 'Eka Puteri', 'email' => 'eka.puteri@example.com'],
            ['name' => 'Fajar Nugraha', 'email' => 'fajar.nugraha@example.com'],
            ['name' => 'Gita Lestari', 'email' => 'gita.lestari@example.com'],
            ['name' => 'Hadi Wijaya', 'email' => 'hadi.wijaya@example.com'],
            ['name' => 'Indah Permata', 'email' => 'indah.permata@example.com'],
            ['name' => 'Joko Raharjo', 'email' => 'joko.raharjo@example.com'],
        ];

        foreach ($students as $student) {
            Student::create($student);
        }
    }
}
