<?php

namespace  Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reply;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RepliesTableSeeder extends Seeder
{
    //新建评论时都会通知话题作者。填充数据时，我们并不需要这个操作，同样的我们使用 WithoutModelEvents 来跳过：
    use WithoutModelEvents;

    public function run()
    {
        Reply::factory()->times(1000)->create();
    }
}