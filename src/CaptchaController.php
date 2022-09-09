<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2015 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: yunwuxin <448901948@qq.com>
// +----------------------------------------------------------------------

namespace think\captcha;

use think\Config;

class CaptchaController
{
    public function index($id = "")
    {
		ob_clean();     //wl自己修改，突然发现项目验证码出不来了，修改这里可以，所以单独做了一个包
        $captcha = new Captcha((array)Config::get('captcha'));
        return $captcha->entry($id);
    }
}