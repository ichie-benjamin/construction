<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Intervention\Image\Image;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function resizeImage($file, $path)
    {
        $resize = Image::make($file)->resize(400, 300, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });

        $resize->save($path);

    }


    public function services(){
        $Services = [
            [
                'name' => 'Operate',
                'info' => 'Flight Operations solutions to help our customers deliver safe, on-time services and increase operational efficiency.',
                'img' => '/images/ser/under.jpeg',
            ],
            [
                'name' => 'Train',
                'info' => 'Flight Operations solutions to help our customers deliver safe, on-time services and increase operational efficiency.',
                'img' => '/images/ser/1.jpg',
            ],
            [
                'name' => 'Maintain',
                'info' => 'Solutions to ensure safe efficient maintenance across the entire aircraft lifecycle.',
                'img' => '/images/ser/2.jpg',
            ] ,
            [
                'name' => 'Enhance',
                'info' => 'Tailored on-board solutions improving passenger comfort and safety, integrating digital solutions across the aviation ecosystem.',
                'img' => '/images/ser/3.jpg',
            ],
            [
                'name' => 'Expand',
                'info' => 'We build every type of basement from retrofit basements to new build basement construction',
                'img' => '/images/ser/4.jpeg',
            ]
    ];

        return $Services;
    }

    public function projectImgs(){
        $projects = [
            [
                'name' => 'Field Inspection',
                'type' => 'road',
                'img' => '/images/ser/14.jpg',
            ],[
                'name' => 'ENGINE OVERHAULING',
                'type' => 'road',
                'img' => '/images/ser/13.jpg',
            ],[
                'name' => 'PRIVATE JET TESTING / MAINTENANCE',
                'type' => 'road',
                'img' => '/images/ser/11.png',
            ],[
                'name' => 'FLIGHT INSPECTION AND TESTING',
                'type' => 'road',
                'img' => '/images/ser/12.jpg',
            ],
            [
                'name' => 'construction project',
                'type' => 'construction',
                'img' => '/images/main-slider/3.png',
            ],       [
                'name' => 'construction project',
                'type' => 'construction',
                'img' => '/images/main-slider/2.jpg',
            ],       [
                'name' => 'construction project',
                'type' => 'construction',
                'img' => '/images/main-slider/3.png',
            ],   [
                'name' => 'construction project',
                'type' => 'construction',
                'img' => '/images/main-slider/4.jpg',
            ],[
                'name' => 'Road project',
                'type' => 'road',
                'img' => '/images/main-slider/5.jpg',
            ],[
                'name' => 'Road project',
                'type' => 'road',
                'img' => '/images/main-slider/1.webp',
            ],[
                'name' => 'Road project',
                'type' => 'road',
                'img' => '/images/main-slider/7.jpg',
            ],[
                'name' => 'Road project',
                'type' => 'road',
                'img' => '/images/main-slider/4.jpg',
            ],[
                'name' => 'projects',
                'type' => 'road',
                'img' => '/images/ser/1.jpg',
            ],[
                'name' => 'projects',
                'type' => 'road',
                'img' => '/images/ser/3.jpg',
            ],[
                'name' => 'projects',
                'type' => 'road',
                'img' => '/images/ser/4.jpeg',
            ],
        ];

        return $projects;
    }
}
