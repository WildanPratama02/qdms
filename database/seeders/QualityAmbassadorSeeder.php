<?php

namespace Database\Seeders;

use App\Models\QualityAmbassador;
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
            ],
            [
                'name' => 'Anis Fauzi',
                'profile_image' => 'ambassadors/anis.jpg',
                'motto' => 'Continuous improvement is better than delayed perfection.',
                'adi_daser_score' => 88.2,
            ],
            [
                'name' => 'Anita Susanti',
                'profile_image' => 'ambassadors/anita.jpg',
                'motto' => 'Excellence is never an accident; it is always the result of high intention.',
                'adi_daser_score' => 91.8,
            ],
            [
                'name' => 'Arif Rahman',
                'profile_image' => 'ambassadors/arif.jpg',
                'motto' => 'The price of excellence is discipline; the cost of mediocrity is disappointment.',
                'adi_daser_score' => 85.7,
            ],
            [
                'name' => 'Iman Permata',
                'profile_image' => 'ambassadors/iman.jpg',
                'motto' => 'Quality means doing it right when no one is looking.',
                'adi_daser_score' => 93.4,
            ],
            [
                'name' => 'JD Shin',
                'profile_image' => 'ambassadors/jd-shin.jpg',
                'motto' => 'Success is the sum of small efforts repeated day in and day out.',
                'adi_daser_score' => 79.6,
            ],
            [
                'name' => 'KC Park',
                'profile_image' => 'ambassadors/kc-park.jpg',
                'motto' => 'Innovation and quality go hand in hand.',
                'adi_daser_score' => 92.1,
            ],
            [
                'name' => 'Septi Wulandari',
                'profile_image' => 'ambassadors/septi.jpg',
                'motto' => 'Precision and perfection in every process.',
                'adi_daser_score' => 87.9,
            ],
            [
                'name' => 'Steve Anderson',
                'profile_image' => 'ambassadors/steve.png',
                'motto' => 'Leadership in quality creates excellence in results.',
                'adi_daser_score' => 94.3,
            ],
        ];

        foreach ($ambassadors as $ambassador) {
            QualityAmbassador::create($ambassador);
        }
    }
}
