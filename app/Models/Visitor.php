<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;
    protected $guarded = [''];

    public function visitor()
    {
        return $this->hasMany(ShortLink::class,'link','visitor_clicked');
    }

//VisitorPlatform
    public function setVisitorPlatformAttribute($value)
    {
        switch ($value){
            case "iOS":
                $this->attributes['visitor_platform'] = 1;
                break;
            case "AndroidOS":
                $this->attributes['visitor_platform'] = 2;
                break;
            case "Linux":
                $this->attributes['visitor_platform'] = 3;
                break;
            case "Windows":
                $this->attributes['visitor_platform'] = 4;
                break;
            case "OS X":
                $this->attributes['visitor_platform'] = 5;
                break;
            default:
                return $value;
        }
    }

    public function getVisitorPlatformAttribute($value)
    {
        switch ($value){
            case 1:
                return "iOS";
            case 2:
                return "AndroidOS";
            case 3:
                return "Linux";
            case 4:
                return "Windows";
            case 5:
                return "OS X";
            default:
                return $value;
        }
    }

//VisitorLinkfrom
    public function setVisitorLinkfromAttribute($value)
    {
        switch ($value){
            case "http://muahang.hoanghaimobile.jp":
                $this->attributes['visitor_linkfrom'] = 1;
                break;
            case "https://www.tiktok.com":
                $this->attributes['visitor_linkfrom'] = 2;
                break;
            case "https://hoanghaimobile.jp/mua-hang-tai-day?utm-source=sieuthidienthoai&group=21&ads=8":
                $this->attributes['visitor_linkfrom'] = 3;
                break;
            default:
                $this->attributes['visitor_linkfrom'] = $value;
        }
    }




    public function getVisitorLinkfromAttribute($value)
    {
        switch ($value){
            case 1:
                return "http://muahang.hoanghaimobile.jp";
            case 2:
                return "https://www.tiktok.com";
            case 3:
                return "https://hoanghaimobile.jp/mua-hang-tai-day?utm-source=sieuthidienthoai&group=21&ads=8";
            default:
                return $value;
        }
    }
}
