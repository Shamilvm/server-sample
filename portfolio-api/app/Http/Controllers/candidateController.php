<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class candidateController extends Controller
{
   public function getCandidate($name){
    $data = [];
    if ($name == "shamil"){
        $data = $this->getShamil($name);
    }else if($name == "rizvan"){
        $data = $this->getRizvan($name);
    }else{
        abort(404);
    }
    return response()->json($data);
   }


   private function getRizvan($name){
return [
        "data"=>[
            "name"=>$name,
            "about"=>"about",
            "image"=>"https://www.automatetheplanet.com/wp-content/uploads/2015/06/Test-URL-Redirects-WebDriver.jpg",
            "experiences"=>[
                [
                    "name"=>"google",
                    "logo"=>"https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg",
                    "time"=>"2020-2021"
                ],
                [
                    "name"=>"amazon",
                    "logo"=>"https://upload.wikimedia.org/wikipedia/commons/4/4a/Amazon_icon.svg",
                    "time"=>"2021-2023"
                ]
            ],
            "skills"=>[
                [
                    "name"=>"html",
                    "type"=>"type",
                    "percentage"=>"60",
                ],
                [
                    "name"=>"react",
                    "type"=>"type",
                    "percentage"=>"70",
                ]
            ],
            "projects"=>[
                [
                    "name"=>"website",
                    "details"=>"details",
                    "link"=>"link"
                ]
            ],
        ]
        ];
   }

   private function getShamil($name){
return [
        "data"=>[
            "name"=>$name,
            "about"=>"about",
            "image"=>"url",
            "experiences"=>[
                [
                    "name"=>"name",
                    "logo"=>"logo",
                    "time"=>"time"
                ],
                [
                    "name"=>"name",
                    "logo"=>"logo",
                    "time"=>"time"
                ]
            ],
            "skills"=>[
                [
                    "name"=>"name",
                    "type"=>"type",
                    "percentage"=>"percentage",
                ],
                [
                    "name"=>"name",
                    "type"=>"type",
                    "percentage"=>"percentage",
                ]
            ],
            "project"=>[
                [
                    "name"=>"name",
                    "details"=>"details",
                    "link"=>"link"
                ]
            ],
        ]
        ];
   }
}
