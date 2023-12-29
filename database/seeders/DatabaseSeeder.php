<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Course::create([
            'name' => 'Kalkulus I',
            'description' => 'membekali pembelajar dengan konsep-konsep dasar matematika yang mencakup sistem bilangan real, fungsi, limit, turunan, dan integral',
            'mentor_id' => '1',
            'price' => 250000
        ]);
        \App\Models\Course::create([
            'name' => 'Berpikir Komputasi',
            'description' => 'proses berpikir yang dilibatkan dalam merumuskan masalah serta mengekspresikan solusinya sedemikian rupa hingga dapat diaplikasikan oleh mesin atau mesin dengan operator manusia untuk bekerja secara efektif.',
            'mentor_id' => '2',
            'price' => 150000
        ]);
        \App\Models\Course::create([
            'name' => 'Matematika Diskrit',
            'description' => 'cabang ilmu aljabar yang mempelajari perhitungan menggunakan bilangan diskrit (tidak kontinyu)',
            'mentor_id' => '3',
            'price' => 300000
        ]);

        \App\Models\Material::create([
            'name' => 'Inequalities and Absolute Values',
            'video' => '',
            'modul' => '01 - Inequalities and Absolute Values.pdf',
            'description' => '',
            'course_id' => 1,
        ]);
        \App\Models\Material::create([
            'name' => 'Function and Their Graph',
            'video' => '',
            'modul' => '02 - P1 - Function and Their Graph.pdf',
            'description' => '',
            'course_id' => 1,
        ]);
        \App\Models\Material::create([
            'name' => 'Combining Functions: Shifting and Scaling Graphs',
            'video' => '',
            'modul' => '02 - P2 - Combining Functions; Shifting and Scaling Graphs.pdf',
            'description' => '',
            'course_id' => 1,
        ]);
        \App\Models\Material::create([
            'name' => 'Trigonometric Functions',
            'video' => '',
            'modul' => '03 - Trigonometric Functions.pdf',
            'description' => '',
            'course_id' => 1,
        ]);
        \App\Models\Material::create([
            'name' => 'Exponential Functions',
            'video' => '',
            'modul' => '04 - P1 - Exponential Functions.pdf',
            'description' => '',
            'course_id' => 1,
        ]);
        \App\Models\Material::create([
            'name' => 'Inverse Functions and Logarithms',
            'video' => '',
            'modul' => '04 - P2 - Inverse Functions and Logarithms.pdf',
            'description' => '',
            'course_id' => 1,
        ]);
        \App\Models\Material::create([
            'name' => 'Logical and Algorithmic Thinking',
            'video' => '',
            'modul' => '02 - Logical and Algorithmic Thinking.pdf',
            'description' => '',
            'course_id' => 2,
        ]);
        \App\Models\Material::create([
            'name' => 'Problem Solving and Decomposition',
            'video' => '',
            'modul' => '03 - Problem Solving and Decomposition.pdf',
            'description' => '',
            'course_id' => 2,
        ]);
        \App\Models\Material::create([
            'name' => 'Abstraction ans Modelling',
            'video' => '',
            'modul' => '04 - Abstraction ans Modelling.pdf',
            'description' => '',
            'course_id' => 2,
        ]);
        \App\Models\Material::create([
            'name' => 'Anticipating and Dealing With Errors',
            'video' => '',
            'modul' => '05 - Anticipating and Dealing With Errors.pdf',
            'description' => '',
            'course_id' => 2,
        ]);
        \App\Models\Material::create([
            'name' => 'Logika Proposisi',
            'video' => '',
            'modul' => '1.Logika proposisi-1.pdf',
            'description' => '',
            'course_id' => 3,
        ]);
        \App\Models\Material::create([
            'name' => 'Logika Predikat',
            'video' => '',
            'modul' => '4.Logika predikat1.pdf',
            'description' => '',
            'course_id' => 3,
        ]);

    }
}
