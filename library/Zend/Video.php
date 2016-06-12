<?php

/**
* Zend Framework
*
* LICENSE
*
* This source file is subject to the new BSD license that is bundled
* with this package in the file LICENSE.txt.
* It is also available through the world-wide-webat this URL:
* http://framework.zend.com/license/new-bsd
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@zend.com so we can send you a copy immediately.
*
* @category Zend
* @package Zend_Video
* @copyright Copyright (c) 2005-2011 Zend Technologies USA Inc. (http://www.zend.com)
* @license http://framework.zend.com/license/new-bsd New BSD License
* @author Angelos Staboulis
*/
class Zend_Video {

  /**YouTube Video Player**/
  public function YouTubePlayer($left,$top,$width,$height,$url)
  {
      $urlvideo=null;
      $createurl=null;
      if(!empty($url)){
                            $first=strpos($url,'=');
                            $last=strpos($url,'&');
                            if($last!=false){
                                $createurl=substr($url,$first+1,$last-($first+1));
                            }
                            else
                            {
$createurl=substr($url,$first+1,strlen($url)-($first+1));
                            }
                          $src="http://www.youtube.com/v/".$createurl;
                          $style="'margin-left:$left"."px".";margin-top:$top"."px;"."margin-right:$width"."px;"."margin-bottom:$height"."px;"."'";
                          $urlvideo="<object>".
                          "<embed style=$style src=$src type=application/x-shockwave-flash></embed>".
                          "</object>";
         }
      return $urlvideo;
   }
   /**Metacafe Video Player**/
   public function MetaCafePlayer($left,$top,$width,$height,$url){
     $urlvideo=null;
     $createurl=null;
     if(!empty($url)){
                            $newurl=strstr($url,"watch");
                            $first=strpos($newurl,"/");
                            $last=strrpos($newurl,"/");
                            $createurl=substr($newurl,$first+1,$last-($first+1)).".swf";
                            $src="http://www.metacafe.com/fplayer/".$createurl;
                            $style="'margin-left:$left"."px".";margin-top:$top"."px;"."margin-right:$width"."px;"."margin-bottom:$height"."px;"."'";
                            $urlvideo="<object>".
                            "<embed style=$style src=$src type=application/x-shockwave-flash></embed>".
                            "</object>";
       }

       return $urlvideo;
    }
     /**DailyMotion Video Player**/
   public function DailyMotionPlayer($style,$url)
   {
     $urlvideo=null;
     $createurl=null;
     if(!empty($url)){
$first=strrpos($url,'/');
$last=strpos($url,'#');
                                if($last!=false){
                                    $createurl=substr($url,$first+1,$last-($first+1));
                                }
                                else
                                {
                                    $createurl=substr($url,$first+1,strlen($url)-($first+1));
                                }
                         $src="http://www.dailymotion.com/swf/".$createurl;

                         $urlvideo="<object>".
                         "<embed style='$style' src=$src type=application/x-shockwave-flash></embed>".
                         "</object>";
              }
return $urlvideo;
   }

    /**Vimeo Video Player**/

  public function VimeoPlayer($left,$top,$width,$height,$url){
       $urlvideo=null;
       $createurl=null;
       if(!empty($url)){
              $last=strrpos($url,"/");
              $createurl=substr($url,$last+1,strlen($url)-($last+1));
              $src="http://vimeo.com/moogaloop.swf?clip_id=".$createurl;
              $style="'margin-left:$left"."px".";margin-top:$top"."px;"."margin-right:$width"."px;"."margin-bottom:$height"."px;"."'";
              $urlvideo="<object>".
              "<embed style=$style src=$src type=application/x-shockwave-flash></embed>".
              "</object>";
          }
      return $urlvideo;
   }
 }
