<?php

namespace App\Http\Controllers;

use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Request;

class WelcomeController extends Controller
{

    public function welcome()
    {
        $title = "Web Development Services For Your Revenue Growth";
        $description = "Your vision, our design expertise. Build a website that not only looks great but works to convert visitors into loyal customers.";
        $image = Voyager::image('/Images/hero_2.png');
        $url = Request::url();

        return view('welcome')->with([
            'title' => $title,
            'description' => $description,
            'image' => $image,
            'url' => $url,
        ]);
    }

    public function manufacturing()
    {

        $title = "Website Design Services For Manufacturing Company";
        $description = "Your vision, our design expertise. Build a website that not only looks great but works to convert visitors into loyal customers.";
        $image = Voyager::image('/Images/hero_2.png');
        $url = Request::url();

        return view('keywordlp')->with([
            'title' => $title,
            'description' => $description,
            'image' => $image,
            'url' => $url,
        ]);
    }

    public function redesign()
    {

        $title = "Website ReDesign Service For Your Revenue Growth";
        $description = "Your vision, our design expertise. Build a website that not only looks great but works to convert visitors into loyal customers.";
        $image = Voyager::image('/Images/hero_2.png');
        $url = Request::url();

        return view('keywordlp')->with([
            'title' => $title,
            'description' => $description,
            'image' => $image,
            'url' => $url,
        ]);
    }

}
