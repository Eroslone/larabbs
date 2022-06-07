<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Topic;

class TopicPolicy extends Policy
{
    public function update(User $user, Topic $topic)
    {
        return $user->isAuthorOf($topic);//只允许作者对话题有编辑权限
    }

    public function destroy(User $user, Topic $topic)
    {
        return $user->isAuthorOf($topic);//只允许作者对话题有删除权限
    }
}
