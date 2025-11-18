<?php

namespace Database\Seeders;

use App\Models\QualityAmbassador;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QualityAmbassadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ambassadors = [
            [
                'name' => 'Andrea Wijaya',
                'profile_image' => 'ambassadors/andrea.jpg',
                'motto' => 'Quality is not an act, it is a habit.',
                'adi_daser_score' => 95.5,
                'biography' => 'Dr. Andrea Wijaya is a distinguished quality management expert with over 15 years of experience in manufacturing excellence. She holds a PhD in Quality Management and has led numerous successful quality improvement initiatives across multinational corporations.',
                'department' => 'Quality Assurance',
                'position' => 'Senior Quality Director',
                'is_active' => true,
            ],
            [
                'name' => 'Anis Fauzi',
                'profile_image' => 'ambassadors/anis.jpg',
                'motto' => 'Continuous improvement is better than delayed perfection.',
                'adi_daser_score' => 88.2,
                'biography' => 'Anis Fauzi is a passionate quality advocate with a strong background in automotive manufacturing. With over 12 years of experience in quality systems implementation, he specializes in ISO 9001 compliance and lean manufacturing principles.',
                'department' => 'Production',
                'position' => 'Quality Manager',
                'is_active' => true,
            ],
            [
                'name' => 'Anita Susanti',
                'profile_image' => 'ambassadors/anita.jpg',
                'motto' => 'Excellence is never an accident; it is always the result of high intention.',
                'adi_daser_score' => 91.8,
                'biography' => 'Anita Susanti brings a wealth of experience in process optimization and quality engineering. With a Master\'s degree in Industrial Engineering and certification in Quality Management, she has implemented innovative quality control systems.',
                'department' => 'Process Engineering',
                'position' => 'Quality Engineer',
                'is_active' => true,
            ],
            [
                'name' => 'Arif Rahman',
                'profile_image' => 'ambassadors/arif.jpg',
                'motto' => 'The price of excellence is discipline; the cost of mediocrity is disappointment.',
                'adi_daser_score' => 85.7,
                'biography' => 'Arif Rahman is a results-driven quality professional with extensive experience in warehouse and logistics operations. He has successfully implemented quality management systems across multiple distribution centers.',
                'department' => 'Warehouse Operations',
                'position' => 'Warehouse Quality Coordinator',
                'is_active' => true,
            ],
            [
                'name' => 'Iman Permata',
                'profile_image' => 'ambassadors/iman.jpg',
                'motto' => 'Quality means doing it right when no one is looking.',
                'adi_daser_score' => 93.4,
                'biography' => 'Iman Permata is a dedicated quality ambassador with a proven track record in laboratory quality management. With a background in chemical engineering and specialized training in Good Laboratory Practices (GLP).',
                'department' => 'Research & Development',
                'position' => 'Laboratory Quality Manager',
                'is_active' => true,
            ],
            [
                'name' => 'JD Shin',
                'profile_image' => 'ambassadors/jd-shin.jpg',
                'motto' => 'Success is the sum of small efforts repeated day in and day out.',
                'adi_daser_score' => 79.6,
                'biography' => 'JD Shin is a dynamic quality professional specializing in supplier quality management. With over 10 years of experience in supply chain quality assurance, he has developed comprehensive supplier qualification programs.',
                'department' => 'Procurement',
                'position' => 'Supplier Quality Engineer',
                'is_active' => true,
            ],
            [
                'name' => 'KC Park',
                'profile_image' => 'ambassadors/kc-park.jpg',
                'motto' => 'Innovation and quality go hand in hand.',
                'adi_daser_score' => 92.1,
                'biography' => 'KC Park is an innovative quality leader with expertise in digital transformation and quality management systems. He has pioneered the integration of IoT and AI technologies in quality control processes.',
                'department' => 'Digital Transformation',
                'position' => 'Digital Quality Manager',
                'is_active' => true,
            ],
            [
                'name' => 'Septi Wulandari',
                'profile_image' => 'ambassadors/septi.jpg',
                'motto' => 'Precision and perfection in every process.',
                'adi_daser_score' => 87.9,
                'biography' => 'Septi Wulandari is a meticulous quality professional with expertise in statistical process control and data analysis. She has developed innovative quality monitoring systems that have significantly improved process capability.',
                'department' => 'Quality Analytics',
                'position' => 'Quality Data Analyst',
                'is_active' => true,
            ],
            [
                'name' => 'Steve Anderson',
                'profile_image' => 'ambassadors/steve.png',
                'motto' => 'Leadership in quality creates excellence in results.',
                'adi_daser_score' => 94.3,
                'biography' => 'Steve Anderson is a visionary quality executive with extensive experience in leading organizational quality transformations. He has successfully guided multiple companies to achieve world-class quality standards and excellence awards.',
                'department' => 'Quality Strategy',
                'position' => 'Chief Quality Officer',
                'is_active' => true,
            ],
        ];

        foreach ($ambassadors as $ambassador) {
            QualityAmbassador::create($ambassador);
        }
    }
}
