<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // attributes: job_id, job_pos, workplace, job_category, job_start_date, job_desc, job_image
    public function run(): void
    {
        DB::table('experiences')->insert([
            ['job_pos' => 'waitress',
            'workplace' => 'Ropisbak Ghifari',
            'job_category' => 'internship',
            'job_start_date' => '2019',
            'job_desc' => 'the internship duration is less than a year and by communicating with customers, serving them their ordered foods and beverages with a smile, taking notes of their orders, I have developed my communication skills.',
            'job_image' => 'experience_image/purple_bg.jpg']
        ]);
    }
}

/* note: purple_bg.jpg in project_image folder is used if no image of a project/certification/work experience is/needs to be uploaded. may be temporary */
