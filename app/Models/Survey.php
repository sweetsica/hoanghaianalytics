<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;
    protected $guarded = [''];

//Question_1
    public function setQuestion1Attribute($value)
    {
        switch ($value){
            case "Tuyệt vời":
                $this->attributes['question_1'] = 1;
                break;
            case "Bình thường":
                $this->attributes['question_1'] = 2;
                break;
            case "Tạm ổn":
                $this->attributes['question_1'] = 3;
                break;
            case "Không tốt":
                $this->attributes['question_1'] = 4;
                break;
            case "Rất tệ":
                $this->attributes['question_1'] = 5;
                break;
            default:
                return $value;
        }
    }
    public function getQuestion1Attribute($value)
    {
        switch ($value){
            case 1:
                return "Tuyệt vời";
            case 2:
                return "Bình thường";
            case 3:
                return "Tạm ổn";
            case 4:
                return "Không tốt";
            case 5:
                return "Rất tệ";
            default:
                return $value;
        }
    }
//Question_2
    public function setQuestion2Attribute($value)
    {
        switch ($value){
            case "Dịch vụ nhắn tin tư vấn":
                $this->attributes['question_2'] = 1;
                break;
            case "Dịch vụ đóng gói hàng hoá":
                $this->attributes['question_2'] = 2;
                break;
            case "Dịch vụ quà tặng , chăm sóc":
                $this->attributes['question_2'] = 3;
                break;
            case "Thái độ nhân viên tại cửa hàng":
                $this->attributes['question_2'] = 4;
                break;
            default:
                return $value;
        }
    }
    public function getQuestion2Attribute($value)
    {
        switch ($value){
            case 1:
                return "Dịch vụ nhắn tin tư vấn";
            case 2:
                return "Dịch vụ đóng gói hàng hoá";
            case 3:
                return "Dịch vụ quà tặng , chăm sóc";
            case 4:
                return "Thái độ nhân viên tại cửa hàng";
            default:
                return $value;
        }
    }
//Question_3
    public function setQuestion3Attribute($value)
    {
        $this->attributes['question_3'] = implode(" , ",$value);
    }
//    public function setQuestion3Attribute($value)
//    {
//        switch ($value){
//            case "Facebook":
//                $this->attributes['question_3'] = "1, ";
//                break;
//            case "Tiktok":
//                $this->attributes['question_3'] = "2, ";
//                break;
//            case "Website - Google":
//                $this->attributes['question_3'] = "3, ";
//                break;
//            case "Bạn bè giới thiệu":
//                $this->attributes['question_3'] = "4, ";
//                break;
//            default:
//                return $value;
//        }
//    }
//    public function getQuestion3Attribute($value)
//    {
//        switch ($value){
//            case "1, ":
//                return "Facebook ";
//            case "2, ":
//                return "Tiktok ";
//            case "3, ":
//                return "Website - Google ";
//            case "4, ":
//                return "Bạn bè giới thiệu ";
//            default:
//                return $value;
//        }
//    }

//Question_4
    public function setQuestion4Attribute($value)
    {
        switch ($value){
            case "Rất nhiệt tình":
                $this->attributes['question_4'] = 1;
                break;
            case "Tạm được":
                $this->attributes['question_4'] = 2;
                break;
            case "Tư vấn sai nhiều":
                $this->attributes['question_4'] = 3;
                break;
            case "Không nhiệt tình":
                $this->attributes['question_4'] = 4;
                break;
            default:
                return $value;
        }
    }
    public function getQuestion4Attribute($value)
    {
        switch ($value){
            case 1:
                return "Rất nhiệt tình";
            case 2:
                return "Tạm được";
            case 3:
                return "Tư vấn sai nhiều";
            case 4:
                return "Không nhiệt tình";
            default:
                return $value;
        }
    }

}
