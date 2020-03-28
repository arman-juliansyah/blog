<?php

namespace App\Observers;
use App\Activity;
use App\Post;

class PostObserver
{
    //listen to creating post
    public function created(Post $post)
    {
        $this->setLog("created",$post->title,$post->id, $post->user_id);
    }

    public function updated(Post $post)
    {
        $this->setLog("updated",$post->title,$post->id, $post->user_id);
    }

    public function deleted(Post $post)
    {
        $this->setLog("deleted",$post->title,$post->id, $post->user_id);
    }

    public function restored(Post $post)
    {
        $this->setLog("restored",$post->title,$post->id, $post->user_id);
    }

    private function setLog($type,$title,$ref_id,$user_id)
    {
        $log = [
            "type"=>$type,
            "user"=> $user_id, 
            "title"=>$title,
            "type_data"=>"post",
            "ref_id"=>$ref_id
        ];
        Activity::create($log);
    }
}
