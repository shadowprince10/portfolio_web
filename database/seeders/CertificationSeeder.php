<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CertificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // attributes: certif_id, certif_name, certif_organization, certif_desc, certif_date, certif_image
    public function run(): void
    {
        DB::table('certifications')->insert([
            ['certif_name' => 'Introduction to R',
            'certif_organization' => 'DataCamp',
            'certif_category' => 'IT',
            'certif_date' => '2021-02',
            'certif_image' => 'certification_image/datacamp_statistics_intro_R_certificate.jpg'],
            ['certif_name' => 'Intermediate R',
            'certif_organization' => 'DataCamp',
            'certif_category' => 'IT',
            'certif_date' => '2021-03',
            'certif_image' => 'certification_image/datacamp_intermediate_R_certificate.jpg'],
            ['certif_name' => 'Data Manipulation with dplyr',
            'certif_organization' => 'DataCamp',
            'certif_category' => 'IT',
            'certif_date' => '2021-08',
            'certif_image' => 'certification_image/datacamp_data_manipulation_dplyr_certificate.jpg'],
            ['certif_name' => 'Introduction to Data Visualization with ggplot2',
            'certif_organization' => 'DataCamp',
            'certif_category' => 'IT',
            'certif_date' => '2021-03',
            'certif_image' => 'certification_image/datacamp_data_visualization_intro_ggplot2_certificate.jpg'],
            ['certif_name' => 'Introduction to Python',
            'certif_organization' => 'DataCamp',
            'certif_category' => 'IT',
            'certif_date' => '2021-02',
            'certif_image' => 'certification_image/datacamp_python_intro_certificate.jpg'],
            ['certif_name' => 'Algorithm and Programming Coaching - Grade B',
            'certif_organization' => 'Coursenet',
            'certif_category' => 'IT',
            'certif_date' => '2020-12',
            'certif_image' => 'certification_image/ITV_SKILL.jpg'],
            ['certif_name' => 'Certificate of Completion',
            'certif_organization' => 'Kumon Indonesia',
            'certif_category' => 'math',
            'certif_date' => '2019-01',
            'certif_image' => 'certification_image/Sertifikat_Kursus_Kumon.jpg'],
            ['certif_name' => 'Advanced 5: English Conversation',
            'certif_organization' => 'English Education Center',
            'certif_category' => 'english',
            'certif_date' => '2019-10',
            'certif_image' => 'certification_image/Sertifikat_Kursus_EEC_Advanced5.jpg'],
            ['certif_name' => 'Advanced 3: English Conversation',
            'certif_organization' => 'English Education Center',
            'certif_category' => 'english',
            'certif_date' => '2019-05',
            'certif_image' => 'certification_image/Sertifikat_Kursus_EEC_Advanced3.jpg'],
            ['certif_name' => 'Participant Certificate - The Largest Poco-Poco Dance',
            'certif_organization' => 'Guinness World Records',
            'certif_category' => 'dance',
            'certif_date' => '2018-08',
            'certif_image' => 'certification_image/poco2_participant_certificate.jpg']
        ]);
    }
}
