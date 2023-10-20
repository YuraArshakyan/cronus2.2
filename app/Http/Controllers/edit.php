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
        $slides = carousel_imgs::all();
        $photos = photos::all();
        $texts = texts::all();
        $title = titles::all();
        $config = configs::all();
        $topbar = array(
            1 => configs::where('id', 5)->get(),
            2 => configs::where('id', 6)->get(),
            3 => configs::where('id', 7)->get(),
        );
        $array = array(
            'Carousel',
            'Overview',
            'What we do',
            'Team',
            'prices'
        );

        return view('/edit',compact('id', 'count', 'config', 'slides', 'texts', 'photos', 'title', 'array', 'topbar'));
    }
    public function update($id, $id2, Request $request){
        switch ($id){
            case 1:
                $final_name1 = 'slide1.jpg';
                $final_name2 = 'slide2.jpg';
                $final_name3 = 'slide3.jpg';
                $final_name4 = 'slide4.jpg';
                if ($request->hasFile('slide1')){
                    $request->file('slide1')->move(public_path('assets/img/home1/'), $final_name1);

                    $carousel_img = carousel_imgs::get('id', 1)->first();
                    $carousel_img->img = $final_name1;
                    $carousel_img->update();
                }
                if ($request->hasFile('slide2')){
                    $request->file('slide2')->move(public_path('assets/img/home1/'), $final_name2);

                    $carousel_img = carousel_imgs::get('id', 2)->first();
                    $carousel_img->img = $final_name2;
                    $carousel_img->update();
                }
                if ($request->hasFile('slide3')){
                    $request->file('slide3')->move(public_path('assets/img/home1/'), $final_name3);

                    $carousel_img = carousel_imgs::where('id', 3);
                    $carousel_img->img = $final_name3;
                }
                if ($request->hasFile('slide4')){
                    $request->file('slide4')->move(public_path('assets/img/home1/'), $final_name4);

                    $carousel_img = carousel_imgs::get('id', 4)->first();
                    $carousel_img->img = $final_name4;
                    $carousel_img->update();
                }
                return redirect()->back()->with('status', 'your data has been saved');
            case 2:
                if($request->hasFile('overview_img')){
                    $data = $request->all();
                    $data = $request->validate([
                        'overview_img' => 'mimes:png,jpeg,gif,bmp',
                    ]);
                    $final_name1 = 'about-air' . '.' . 'jpg';
                    $request->file('overview_img')->move(public_path('assets/img/'), $final_name1);

                    $overview_img = photos::get('id', 1)->first();
                    $overview_img->photos = $final_name1;
                    $overview_img->update();
                    return redirect()->back()->with('status', 'your data has been saved');
                }elseif ($request->file('overview_img') == null){

                    $overview_text = texts::find(1);
                    $overview_text->text = $request->input('overview_text');
                    $overview_text->update();

                    return redirect()->back()->with('status', 'your data has been saved');
                }
                break;
            case 3:
                $what_we_do_text = texts::find($id2);
                $what_we_do_text->text = $request->input('what_we_do_text');
                $what_we_do_text->update();

                $what_we_do_title = titles::find($id2);
                $what_we_do_title->titles = $request->input('what_we_do_title');
                $what_we_do_title->update();
                if($request->has('what_photo')){
                    $what_we_do_photo = photos::find($id2);
                    $final_name = $what_we_do_photo->photos;
                    $final_name_of_what_we_do = $final_name;
                    $request->file('what_photo')->move(public_path('assets/img/services/'), $final_name_of_what_we_do);

                    $img = photos::where('id', $id2);
                    $img->photos = $final_name_of_what_we_do;
                }
                return redirect()->back()->with('status', 'your data has been saved');
            case 4:
                $what_we_do_text = texts::find($id2);
                $what_we_do_text->text = $request->input('text');
                $what_we_do_text->update();

                $what_we_do_title = titles::find($id2);
                $what_we_do_title->titles = $request->input('title');
                $what_we_do_title->update();
                if($request->has('workers')){
                    $what_we_do_photo = photos::find($id2);
                    $final_name = $what_we_do_photo->photos;
                    $final_name_of_what_we_do = $final_name;
                    $request->file('workers')->move(public_path('assets/img/team/'), $final_name_of_what_we_do);

                    $img = photos::where('id', $id2);
                    $img->photos = $final_name_of_what_we_do;
                }

                return redirect()->back()->with('status', 'your data has been saved');
            case 5:
                    if($id2 == 16){
                        $contact_text = texts::find(16);
                        $contact_text->text = $request->input('Text1_of_contact');

                        $contact_text->update();
                    }elseif($id2 == 17){
                        $contact_text = texts::find(17);
                        $contact_text->text = $request->input('Text1_of_contact');

                        $contact_text->update();
                    }elseif($id2 == 18){
                        $contact_text = texts::find(18);
                        $contact_text->text = $request->input('Text1_of_contact');

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

                $config = configs::find(5);
                $config->value = $request->input('value5');
                $config->update();

                $config = configs::find(6);
                $config->value = $request->input('value6');
                $config->update();

                $config = configs::find(7);
                $config->value = $request->input('value7');
                $config->update();

                return redirect()->back()->with('status', 'your data has been saved');
        }
    }
}
