<?php
//修改config/sudosu.php，添加域名后缀`com`
return [
    // 允许使用的顶级域名
    'allowed_tlds' => ['dev', 'local', 'app', 'test','com','cn'],
    // 用户模型
    'user_model' => App\Models\User::class
];