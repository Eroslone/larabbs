<?php

namespace App\Observers;

use App\Models\Reply;
use App\Notifications\TopicReplied;
// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class ReplyObserver
{
    public function creating(Reply $reply)
    {
        $reply->content = clean($reply->content, 'user_topic_body');
    }
    public function created(Reply $reply)
    {
        $reply->topic->updateReplyCount();
        // 通知话题作者有新的评论
        $reply->topic->user->notify(new TopicReplied($reply));
    }
    //回复被删除后，评论数减少
    public function deleted(Reply $reply)
    {
        $reply->topic->updateReplyCount();
    }
}