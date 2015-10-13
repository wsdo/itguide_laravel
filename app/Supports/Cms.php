<?php
/**
 * @Author: wangshudong
 * @Date:   2015-09-27 09:44:14
 * @Last Modified by:   wangshudong
 * @Last Modified time: 2015-09-27 09:45:12
 */

namespace App\Supports;

use \Log;

class Cms
{
    
    public function send($cms)
    {
        sleep(3);
        Log::info("CMS: $cms");
        
    }
}
