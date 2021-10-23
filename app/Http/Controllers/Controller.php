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
                'name' => 'Underpinning',
                'info' => 'We have extensive experience in underpinning above & below the water table.',
                'img' => '/images/ser/under.jpeg',
            ],
            [
                'name' => 'Shell and Core',
                'info' => 'We design & supply all formwork, from a single storey to a high rise concrete frame',
                'img' => '/images/ser/shell.jpeg',
            ],
            [
                'name' => 'Concrete Frames',
                'info' => 'We design & supply all formwork, from a single storey to a high rise concrete frame.',
                'img' => '/images/ser/con.jpeg',
            ] ,
            [
                'name' => 'Basements',
                'info' => 'We build every type of basement from retrofit basements to new build basement construction',
                'img' => '/images/ser/base.jpeg',
            ],
            [
                'name' => 'Construction',
                'info' => 'We build every type of basement from retrofit basements to new build basement construction',
                'img' => '/images/ser/con1.jpeg',
            ],
            [
                'name' => 'Civil Engineering ',
                'info' => 'We design and build our Civil Engineering Projects with cutting-edge technologies to deliver quality, speed and efficiency.',
                'img' => '/images/ser/ce.jpeg',
            ],
            [
            'name' => 'DEMOLITION & SITE CLEARANCE',
            'info' => '.',
            'img' => '/images/ser/con.jpeg',
        ],
    ];

        return $Services;
    }

    public function projectImgs(){
        $projects = [
            [
                'name' => 'construction project',
                'type' => 'construction',
                'img' => '/images/ser/1.jpeg',
            ],       [
                'name' => 'construction project',
                'type' => 'construction',
                'img' => '/images/ser/2.jpeg',
            ],       [
                'name' => 'construction project',
                'type' => 'construction',
                'img' => '/images/ser/3.jpeg',
            ],   [
                'name' => 'construction project',
                'type' => 'construction',
                'img' => '/images/ser/4.jpeg',
            ],[
                'name' => 'Road project',
                'type' => 'road',
                'img' => '/images/ser/road1.jpeg',
            ],[
                'name' => 'Road project',
                'type' => 'road',
                'img' => '/images/ser/road2.jpeg',
            ],[
                'name' => 'Road project',
                'type' => 'road',
                'img' => '/images/ser/road3.jpeg',
            ],[
                'name' => 'Road project',
                'type' => 'road',
                'img' => '/images/ser/road4.jpeg',
            ],
        ];

        return $projects;
    }
}
