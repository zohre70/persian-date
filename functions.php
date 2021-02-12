<?php


/**
* این تابع مدت زمانی که تا تاریخ مشخص شده مانده،
* یا از تاریخ مشخص شده گذشته است را برمیگرداند
* @param $dest تاریخ به فرمت استاندارد
* @param $timestamp اگر تاریخ به فرمت UNIX نوشته شود، این پارامتر باید true باشد
*/
function time_diff($dest, $timestamp = false) {
    $now = time();

    if(!$timestamp) {
        $dest = strtotime($dest);
    }
    if($dest > $now) {
        $diff = $dest - $now;
        $prefix = 'مانده';
    } else {
        $diff = $now - $dest;
        $prefix = 'پیش';
    }
    $years = floor($diff / (60*60*24*30*12));
    if($years >0 ){
        return $years.' سال '.$prefix;
    } else {
        $months = floor(($diff - ($years * 60*60*24*30*12 ))/(60*60*24*30));
        if($months >0 ){
            return $months.' ماه '.$prefix;
        } else {
            $days = round(($diff-($months * (60*60*24*30)))/(60*60*24));
            if($days >0 ){
                return $days.' روز '.$prefix;
            } else {
                $hours = floor(($diff-$days*60*60*24)/(60*60));
                if($hours > 0) {
                    return $hours.' ساعت '.$prefix;
                } else {
                    $minutes = floor(($diff-($days*60*60*24) - ($hours*60*60))/60);
                    if($minutes > 0) {
                        return $minutes.' دقیقه '.$prefix;
                    } else {
                        $seconds = floor($diff-($days*60*60*24) - ($hours*60*60) - $minutes*60);
                        if($seconds == 0) return 'همین الان';
                        else
                            return $seconds.' ثانیه '.$prefix;

                    }
                }
            }
        }
    }
}


/**
* این تابع یک تاریخ را به عنوان ورودی می گیرد و سن را محاسبه می کند
* @param $dest تاریخ به فرمت استاندارد
* @param $timestamp اگر تاریخ به فرمت UNIX نوشته شود، این پارامتر باید true باشد
*/
function age($date, $timestamp = false) {
    $now = time();

    if(!$timestamp) {
        $date = strtotime($date);
    }

    $diff = $now - $date;

    $result = '';
    $years = floor($diff / (60*60*24*30*12));
    if($years > 0 ){
        $result .= $years.' سال ';
    }
    //} else {
        $months = floor(($diff - ($years * 60*60*24*30*12 ))/(60*60*24*30));
        if($months > 0 ){
            if($years > 0 ){
                $result .= ' و ';
            }
            $result .= $months.' ماه ';
        } else {
            $days = round(($diff-($months * (60*60*24*30)))/(60*60*24));
            if($days > 0 ){
                return $days.' روز ';
            } else {
                $hours = floor(($diff-$days*60*60*24)/(60*60));
                if($hours > 0) {
                    return $hours.' ساعت ';
                } else {
                    $minutes = floor(($diff-($days*60*60*24) - ($hours*60*60))/60);
                    if($minutes > 0) {
                        return $minutes.' دقیقه ';
                    } else {
                        $seconds = floor($diff-($days*60*60*24) - ($hours*60*60) - $minutes*60);
                        if($seconds == 0) return 'همین الان';
                        else
                            return $seconds.' ثانیه ';

                    }
                }
            }
        }
    //}
    return $result;
}




