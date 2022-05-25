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


    public function awards(): array
    {
        return [
            [
                'name' => 'Safety Engineer Award',
                'info' => '
Highly inclined safety precaution during flight training, Aeronautical Training and Aircraft Maintenance',
            ], [
                'name' => 'Flight Safety Award',
                'info' => '
Highly inclined safety precaution during flight training, Aeronautical Training and Aircraft Maintenance',
            ],[
                'name' => 'Airframe Kit Award',
                'info' => '
Airflight training, Aeronautical Training and Aircraft Maintenance',
            ],
            [
                'name' => 'Aircraft Innovative Award',
                'info' => '
High aircraft maintenance for the year',
            ],[
                'name' => 'Flight Engineer Award',
                'info' => '
high performing flight engineer for the year',
            ],[
                'name' => 'Flight Consult Award',
                'info' => '
Fast consultant with high effectiveness',
            ],
        ];

            }


    public function cServices()
    {
        $services = [
            [
                'name' => 'Repairs and Maintenance',
                'info' => 'Aeroparts Consult is a multi-disciplinary group with broad interests, including research
                and development of new technology, manufacture, operations (both military and civil) and regulation',
            ],    [
                'name' => 'Oil Maintenance',
                'info' => 'As an aeronautical engineer we endure you use the appropriate Oil for your Aircraft. Our maintenance meets professional standards based on my professional expertise.',
            ],   [
                'name' => 'Contact / Support',
                'info' => "
Contact me for the best of service to ensure your Aircraft is well managed and maintained. support@aeropartsconsult.com
I'm here to ensure you meet your need.",
            ],
            [
                'name' => 'Private maintenance',
                'info' => "We maintain private aircraft and ensure engine always show optimum performance.",
            ],[
                'name' => 'Flight Safety',
                'info' => "Safety is a major concern in flight and thus a flight training on safety is a prerequisite to flying",
            ],[
                'name' => 'Overhauling and Painting',
                'info' => "We partner with several companies in installing and fixing air plane parts for planes of all kind. we also fix and ensure
flight safety and many others. Routine cleaning and general exterior maintenance will make the world of difference",
            ],[
                'name' => 'Flight Certification',
                'info' => "We partner with several companies in installing and fixing air plane parts for planes of all kind. we also fix and ensure flight safety and many others.
Routine cleaning and general exterior maintenance will make the world of difference and give certificate.",
            ],[
                'name' => 'Consultation',
                'info' => "
We help you make the right decisions in managing your aircraft and choosing the best private pilots to ensure you have safety in all your travel experience.",
            ],
        ];
        return $services;
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
                'img' => '/images/11.jpg',
            ]

        ];

        return $projects;
    }
}
