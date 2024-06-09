<?php
class Instagram
{
    public $data;

    public function __construct($username,$data=null)
    {
        // $instagram = new \InstagramScraper\Instagram();
        // $nonPrivateAccountMedias = $instagram->getMedias('kevin');
        // dd($nonPrivateAccountMedias);
        // echo $nonPrivateAccountMedias[0]->getLink();
        $opts = [
            "http" => [
                "method" => "GET",
                "header" => "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36\r\n"
            ]
        ];
        
        
        if($data){
            $content = $data;
        } 
        else{
            $context = stream_context_create($opts);
            try {
                $content = file_get_contents('https://www.instagram.com/' . $username, false, $context);
            } catch (\ErrorException $e) {
                return false;
            }
        }
        
        // print_r($content);exit;
        $begin_keyword = 'window._sharedData = ';
        $end_keyword = ';</script>';

        $position_begin = strpos($content, $begin_keyword);
        $position_end = strpos($content, $end_keyword, $position_begin);
        $data = substr($content, $position_begin + strlen($begin_keyword), $position_end - $position_begin - strlen($begin_keyword));
        $data = json_decode($data);
        $this->data = $data;
    }

    public function check_public_profile()
    {
        if(isset($this->data->entry_data->ProfilePage[0])){
            return !$this->data->entry_data->ProfilePage[0]->graphql->user->is_private;
        } else{
            return false;
        }
    }

    public function get_profile_pic()
    {
        return $this->data->entry_data->ProfilePage[0]->graphql->user->profile_pic_url;
    }

    public function get_posts()
    {
        $edges = $this->data->entry_data->ProfilePage[0]->graphql->user->edge_owner_to_timeline_media->edges;
        $posts = [];
        foreach ($edges as $edge) {
            $posts[] = [
                'shortcode' => $edge->node->shortcode,
                'image' => $edge->node->thumbnail_resources[0]->src,
                'video' => $edge->node->is_video
            ];
        }
        return $posts;
    }

    public function has_more_posts()
    {
        return $this->data->entry_data->ProfilePage[0]->graphql->user->edge_owner_to_timeline_media->page_info->has_next_page;
    }

    public function show_all_data()
    {
        return $this->data;
    }

    public function old_gis()
    {
        return $this->data->rollout_hash;
    }

    public function generate_gis()
    {
        $gis = md5(
            join(
                ':',
                array(
                    $this->data->rollout_hash,
                    '{"id":"' . $this->data->entry_data->ProfilePage[0]->graphql->user->id . '","first":12,"after":"' . $this->data->entry_data->ProfilePage[0]->graphql->user->edge_owner_to_timeline_media->page_info->end_cursor . '"}'
                )
            )
        );

        // $gis = md5(
        //     join(
        //         ':',
        //         array(
        //             'f1fedc98db02b43b3ff5f05727db8fb2',
        //             '{"id":"251064349","first":12,"after":"QVFDQTA2ZmZZdG1aQWVoSmZoYUVpekJTY3dPMGh1RzFkRUFnbUJnS1doN0lYcU9fampuU2VCWDRfMW9GWlRhVzZocmhNdlA2YVl1eVNzMFdRNlZBbXV1eg=="}'
        //         )
        //     )
        // );
        return $gis;
    }

    public function id()
    {
        return $this->data->entry_data->ProfilePage[0]->graphql->user->id;
    }

    public function after()
    {
        return $this->data->entry_data->ProfilePage[0]->graphql->user->edge_owner_to_timeline_media->page_info->end_cursor;
    }

    public function next_posts($gis, $id, $after, $old_gis)
    {
        $opts = [
            "http" => [
                "method" => "GET",
                "header" => "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36\r\n" .
                    "x-instagram-gis:" . $gis . "\r\n"
            ]
        ];

        $context = stream_context_create($opts);

        try {
            $content = file_get_contents('https://www.instagram.com/graphql/query/?query_hash=e6a78c2942f1370ea50e04c9a45ebc44&variables={"id":"' . $id . '","first":12,"after":"' . $after . '"}', false, $context);
        } catch (\ErrorException $e) {
            return false;
        }


        $data = json_decode($content);
        $data = $data->data;
        $posts = [];
        foreach ($data->user->edge_owner_to_timeline_media->edges as $edge) {
            $posts[] = [
                'shortcode' => $edge->node->shortcode,
                'image' => $edge->node->thumbnail_resources[0]->src,
                'video' => $edge->node->is_video
            ];
        }

        $newgis = md5(
            join(
                ':',
                array(
                    $old_gis,
                    '{"id":"' . $id . '","first":12,"after":"' . $data->user->edge_owner_to_timeline_media->page_info->end_cursor . '"}'
                )
            )
        );

        $formatted_data = [
            'posts' => $posts,
            'has_more_posts' => $data->user->edge_owner_to_timeline_media->page_info->has_next_page,
            'gis' => $newgis,
            'id' => $id,
            'after' => $data->user->edge_owner_to_timeline_media->page_info->end_cursor,
            'old_gis' => $old_gis
        ];

        return $formatted_data;
    }

    public function generate_new_gis($old_gis, $id, $after)
    {
        $gis = md5(
            join(
                ':',
                array(
                    $old_gis,
                    '{"id":"' . $id . '","first":12,"after":"' . $after . '"}'
                )
            )
        );

        return $gis;
    }
}