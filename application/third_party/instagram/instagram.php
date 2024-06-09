<?php
require_once(__DIR__.'/instagramHelper.php');
use Instagram;

class InstagramController
{

    public function check($request = array())
    {
        $request = (object)$request;
        // $request->validate([
        //     'name' => 'required|string',
        //     'data' => 'required'
        // ]);

        if($request->data) {
            $instagram = new Instagram($request->name, $request->data);
        } else {
            $instagram = new Instagram($request->name);
        }
        
        if(!$instagram->data) {
            return 'Username not found';
        }
        $public = $instagram->check_public_profile();
        if (!$public) {
            return 'Your account is private, kindly change the account to public and try again!';
        }
        $profile_pic = $instagram->get_profile_pic();
        $data = $instagram->show_all_data();
        $posts = $instagram->get_posts();
        $has_more_posts = $instagram->has_more_posts();
        $gis = $instagram->generate_gis();
        $old_gis = $instagram->old_gis();
        $id = $instagram->id();
        $after = $instagram->after();

        // return $this->json($data);
        return json_encode([
            'posts' => $posts,
            'has_more_posts' => $has_more_posts,
            'profile_pic' => $profile_pic,
            'username' => $request->name,
            'gis' => $gis,
            'id' => $id,
            'after' => $after,
            'old_gis' => $old_gis,
            'public' => $public
        ]);
    }

    // public function next_posts($request = array())
    // {
    //     $request = (object)$request;
    //     // $request->validate([
    //     //     'gis' => 'required|string',
    //     //     'id' => 'required',
    //     //     'after' => 'required',
    //     //     'old_gis' => 'required'
    //     // ]);

    //     $data = Instagram::next_posts($request->gis, $request->id, $request->after, $request->old_gis);

    //     if (!$data) {
    //         return $this->jsonError();
    //     }

    //     return $this->json_data($data);

    // }
}
// $instagram = new InstagramController();
// $inst_check = $instagram->check(['name' => "anshuwap", 'data' => null]);