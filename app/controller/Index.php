<?php
/*
 * @Author: ChenDoXiu
 * @Description:
 * @Date: 2021-03-11 19:08:27
 * @LastEditors: ChenDoXiu
 * @LastEditTime: 2021-03-21 22:54:27
 * @FilePath: \MfunsBacked\app\controller\Index.php
 */

namespace app\controller;

use app\BaseController;
use app\system\VideoInterface\VideoID;
use app\VideoParse\Weibo;
use app\VideoParse\YouKu;

class Index extends BaseController
{
    public function youku($vid = "XNDc0ODIzMTE5Ng")
    {
        $yk = new YouKu();
        //return redirect($yk->getPlaylist($vid)->getVideoBySize(5)->link);
        redirect($yk->getPlayListUseCache(VideoID::getInstance("Youku",$vid,0))->getVideoBySize(10)->link);
    }

    public function weibo($vid = "")
    {
        $wb = new Weibo();
        //return redirect($wb->getPlaylist(VideoID::getInstance("weibo",$vid,0))->getVideoBySize(10)->link);
        redirect($wb->getPlayListUseCache(VideoID::getInstance("weibo",$vid,0))->getVideoBySize(10)->link);
    }

}
