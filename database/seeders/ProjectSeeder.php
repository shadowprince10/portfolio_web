<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // attributes: project_id, project_name, project_details, project_start_date, project_exec_time (in days), project_finish_date, project_image
    public function run(): void
    {
         DB::table('projects')->insert([
            ['project_name' => 'Relation between Air Quality and Vehicle Traffic in Jakarta',
            'project_details' => 'this project visualizes and predicts correlation between air quality and vehicle traffic in Jakarta',
            'project_start_date' => '2023-08-29',
            'project_exec_time' => 7,
            'project_finish_date' => '2023-08-31',
            'project_link' => 'ab.com',
            'project_image' => 'project_image/purple_bg.jpg'],
            ['project_name' => 'Rental Console Website Application Software',
            'project_details' => 'this project is the final project of Software Engineering which I do with my other 3 friends in a team in 6th semester in BINUS University.',
            'project_start_date' => '2023-02-28',
            'project_exec_date' => '478',
            'project_finish_date' => '2023-06-20',
            'project_link' => 'https://drive.google.com/drive/folders/1Ho8_SQxhoThxJFNXw8i1ue0P1ecWbFaT?usp=sharing',
            'project_image' => 'project_image/rental_console_proj_img.png'],
            ['project_name' => 'Topic Modeling on Issues about Coldplay Concert in Indonesia',
            'project_details' => 'this project uses topic modeling approach to determine and visualize the most dominant/important cluster of words for a set of article news about issues on Coldplay concert in Indonesia.',
            'project_start_date' => '2023-05-31',
            'project_exec_time' => '16',
            'project_finish_date' => '2023-06-15',
            'project_link' => 'https://drive.google.com/drive/folders/1_dYiItrFGP47XHoGFGU958eGljicL8Ru',
            'project_image' => 'project_image/topic_modeling_on_issues_about_coldplay_concert_in_id.png']
        ]);
    }
}

/* note: purple_bg.jpg in project_image folder is used if no image of a project/certification/work experience is/needs to be uploaded, may be temporary */
