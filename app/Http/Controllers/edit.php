<?php

namespace App\Http\Controllers;

use App\Models\carousel_imgs;
use Illuminate\Http\Request;
use App\Models\texts;
use App\Models\photos;
use App\Models\titles;
use App\Models\configs;

class edit extends Controller
{
    public function edit($id, $count){
        $slides = array(
            "slide1" => carousel_imgs::where('id', 1)->get(),
            "slide2" => carousel_imgs::where('id', 2)->get(),
        );
        $texts = texts::all();
        $photos = photos::all();
        $title = titles::all();
        $array = array(
            'Carousel',
            'Overview',
            'What we do',
            'Team',
            'prices'
        );

        $what_we_do = array(
            "1"=> photos::pluck('what_we_do_1_photos'),
            "11"=> texts::pluck('what_we_do_1'),
            "111"=> titles::pluck('what_we_do_1_title'),
            "2"=>photos::pluck('what_we_do_2_photos'),
            "22"=>texts::pluck('what_we_do_2'),
            "222"=>titles::pluck('what_we_do_2_title'),
            "3"=>photos::pluck('what_we_do_3_photos'),
            "33"=>texts::pluck('what_we_do_3'),
            "333"=>titles::pluck('what_we_do_3_title'),
            "4"=>photos::pluck('what_we_do_4_photos'),
            "44"=>texts::pluck('what_we_do_4'),
            "444"=>titles::pluck('what_we_do_4_title'),
            "5"=>photos::pluck('what_we_do_5_photos'),
            "55"=>texts::pluck('what_we_do_5'),
            "555"=>titles::pluck('what_we_do_5_title'),
            "6"=>photos::pluck('what_we_do_6_photos'),
            "66"=>texts::pluck('what_we_do_6'),
            "666"=>titles::pluck('what_we_do_6_title'),
        );

        $team = array(
            "1"=> photos::pluck('team_1_photos'),
            "11"=> texts::pluck('team_1'),
            "111"=> titles::pluck('team_1_position'),
            "2"=>photos::pluck('team_2_photos'),
            "22"=>texts::pluck('team_2'),
            "222"=>titles::pluck('team_2_position'),
            "3"=>photos::pluck('team_3_photos'),
            "33"=>texts::pluck('team_3'),
            "333"=>titles::pluck('team_3_position'),
            "4"=>photos::pluck('team_4_photos'),
            "44"=>texts::pluck('team_4'),
            "444"=>titles::pluck('team_4_position'),
            "5"=>photos::pluck('team_5_photos'),
            "55"=>texts::pluck('team_5'),
            "555"=>titles::pluck('team_5_position'),
            "6"=>photos::pluck('team_6_photos'),
            "66"=>texts::pluck('what_we_do_6'),
            "666"=>titles::pluck('team_6_position'),
            "7"=>photos::pluck('team_7_photos'),
            "77"=>texts::pluck('team_7'),
            "777"=>titles::pluck('team_7_position'),
            "8"=>photos::pluck('team_8_photos'),
            "88"=>texts::pluck('team_8'),
            "888"=>titles::pluck('team_8_position'),
        );

        $contact = array(
            "1"=> texts::pluck('contact_email_1'),
            "11"=> texts::pluck('contact_email_2'),
            "2"=>texts::pluck('contact_phone_1'),
            "22"=>texts::pluck('contact_phone_2'),
            "3"=>texts::pluck('contact_location'),
            "33"=>texts::pluck('contact_location'),
            );

        return view('/edit',compact('id', 'count', 'slides', 'texts', 'photos', 'title', 'array', 'what_we_do', 'team', 'contact'));
    }
    public function update($id, $id2, Request $request){
        switch ($id){
            case 1:
                if($request->hasFile('slide1') && $request->hasFile('slide2')) {
                    $data = $request->all();
                    $data = $request->validate([
                        'slide1' => 'mimes:png,jpeg,gif,bmp',
                        'slide2' => 'mimes:png,jpeg,gif,bmp',
                    ]);
                    $final_name1 = 'slide1' . '.' . 'jpg';
                    $final_name2 = 'slide2' . '.' . 'jpg';
                    $request->file('slide1')->move(public_path('assets/img/home1/'), $final_name1);
                    $request->file('slide2')->move(public_path('assets/img/home1/'), $final_name2);

                    $slide1 = carousel_imgs::where('id', 1)->first();
                    $slide1->img = $final_name1;
                    $slide1->update();
                    $slide2 = carousel_imgs::where('id', 2)->first();
                    $slide2->img = $final_name2;
                    $slide2->update();
                    return redirect()->back()->with('status', 'your data has been saved');
                }elseif ($request->hasFile('slide1') && $request->file('slide2') == null) {
                    $data = $request->all();
                    $data = $request->validate([
                        'slide1' => 'mimes:png,jpeg,gif,bmp',
                    ]);
                    $final_name1 = 'slide1' . '.' . 'jpg';
                    $request->file('slide1')->move(public_path('assets/img/home1/'), $final_name1);

                    $slide1 = carousel_imgs::where('id', 1)->first();
                    $slide1->img = $final_name1;
                    $slide1->update();
                    return redirect()->back()->with('status', 'your data has been saved');
                }elseif ($request->hasFile('slide2') && $request->file('slide1') == null){
                    $data = $request->all();
                    $data = $request->validate([
                        'slide2' => 'mimes:png,jpeg,gif,bmp',
                    ]);
                    $final_name2 = 'slide2' . '.' . 'jpg';
                    $request->file('slide2')->move(public_path('assets/img/home1/'), $final_name2);

                    $slide2 = carousel_imgs::where('id', 2)->first();
                    $slide2->img = $final_name2;
                    $slide2->update();
                    return redirect()->back()->with('status', 'your data has been saved');
                }elseif ($request->file('slide2') == null && file('slide1') == null){
                    return redirect()->back()->with('status', 'your data has been saved');
                }
            case 2:
                if($request->hasFile('overview_img')){
                    $data = $request->all();
                    $data = $request->validate([
                        'overview_img' => 'mimes:png,jpeg,gif,bmp',
                    ]);
                    $final_name1 = 'about-air' . '.' . 'jpg';
                    $request->file('overview_img')->move(public_path('assets/img/'), $final_name1);

                    $overview_img = photos::get('overview_photos', 'about-air.jpg')->first();
                    $overview_img->overview_photos = $final_name1;
                    $overview_img->update();
                    return redirect()->back()->with('status', 'your data has been saved');
                }elseif ($request->file('overview_img') == null){

                    $overview_text = texts::find(1);
                    $overview_text->overview = $request->input('overview_text');
                    $overview_text->update();

                    return redirect()->back()->with('status', 'your data has been saved');
                }
            case 3:
                $str_text = 'what_we_do_'.$id2;
                $str_title = 'what_we_do_'.$id2.'_title';
                $str_photos = 'what_we_do_'.$id2.'_photos';

                $what_we_do_text = texts::find(1);
                $what_we_do_text->$str_text = $request->input('what_we_do_text');
                $what_we_do_text->update();

                $what_we_do_title = titles::find(1);
                $what_we_do_title->$str_title = $request->input('what_we_do_title');
                $what_we_do_title->update();
                if($request->has('what_photo')){
                    $what_we_do_photo = photos::find(1);
                    $final_name = $what_we_do_photo->$str_photos;
                    $final_name_of_what_we_do = $final_name;
                    $request->file('what_photo')->move(public_path('assets/img/services/'), $final_name_of_what_we_do);

                    $what_we_do_img_img = photos::get($str_photos, $final_name_of_what_we_do)->first();
                    $what_we_do_img_img->$str_photos = $final_name_of_what_we_do;
                    $what_we_do_img_img->update();
                }
                return redirect()->back()->with('status', 'your data has been saved');
            case 4:
                $str_text = 'team_'.$id2;
                $str_title = 'team_'.$id2.'_position';
                $str_photos = 'team_'.$id2.'_photos';

                $team_text = texts::find(1);
                $team_text->$str_text = $request->input('text');
                $team_text->update();

                $team_title = titles::find(1);
                $team_title->$str_title = $request->input('title');
                $team_title->update();

                if($request->file('workers')){
                    $team_photo = photos::find(1);
                    $final_name = $team_photo->$str_photos;
                    $final_name_of_photo = $final_name;
                    $request->file('workers')->move(public_path('assets/img/team/'), $final_name_of_photo);

                    $team_img = photos::get($str_photos, $final_name_of_photo)->first();
                    $team_img->$str_photos = $final_name_of_photo;
                    $team_img->update();
                }

                return redirect()->back()->with('status', 'your data has been saved');
            case 5:
                    if($id2 == 1){
                        $contact_text = texts::find(1);
                        $contact_text->contact_email_1 = $request->input('Text1_of_contact');

                        $contact_text->contact_email_2 = $request->input('minor_text');
                        $contact_text->update();
                    }elseif($id2 == 2){
                        $contact_text = texts::find(1);
                        $contact_text->contact_phone_1 = $request->input('Text1_of_contact');

                        $contact_text->contact_phone_2 = $request->input('minor_text');
                        $contact_text->update();
                    }elseif($id2 == 3){
                        $contact_text = texts::find(1);
                        $contact_text->contact_location = $request->input('Text1_of_contact');
                        $contact_text->update();
                    }
                return redirect()->back()->with('status', 'your data has been saved');
            case 6:
                $config = configs::find(1);
                $config->value = $request->input('value1');
                $config->update();

                $config = configs::find(2);
                $config->value = $request->input('value2');
                $config->update();

                $config = configs::find(3);
                $config->value = $request->input('value3');
                $config->update();

                $config = configs::find(4);
                $config->value = $request->input('value4');
                $config->update();

                return redirect()->back()->with('status', 'your data has been saved');
        }
    }
}
