<?php

/*
 * @author: khs
 */

App::uses('AppModel', 'Model'); 

class Donation extends AppModel
{
    var $name = 'Donation';
    
    public function getDonationAmountsByMonth($type){
        $this->useTable = "donations";
        $query = "SELECT SUM(amount) AS amount FROM donations WHERE type=".$type." AND DATE_FORMAT(created, '%Y-%m')=DATE_FORMAT(now(),'%Y-%m')";
        $ret = $this->query($query);

        if(empty($ret[0][0]["amount"])){
            return 0;
        }
        return $ret[0][0]["amount"];
    }

    public function getDonationInfo($uid, $type=1){
        $this->useTable = "users";
        $query = "SELECT a.*, animals.content FROM (SELECT users.point, companions.* FROM users INNER JOIN companions ON users.ani_id = companions.id WHERE users.id = ".$uid.") AS a INNER JOIN animals ON a.type = animals.id";
        $ret = $this->query($query);

        $avatar = $ret[0]["a"]["imagePath"];
        $name = $ret[0]["a"]["name"];
        $content = $ret[0]["animals"]["content"];
        
        list($year, $month, $day) = split('[/.-]', $ret[0]["a"]["c_birthday"]);
        $c_Ydate = (int)date("Y");
        $c_mdate = (int)date("m");
        $c_ddate = (int)date("d");
        $old = ($c_Ydate - $year) * 12 + ((int)$c_mdate - (int)$month);
        $y_old = (int)floor((int)$old / 12.0);
        $m_old = (int)((int)$old - (int)$y_old * 12);
        $birthday = $y_old . "살 " . $m_old . "개월";

        $point = $ret[0]["a"]["point"];
        
        $this->useTable = "donations";
        $query = "SELECT SUM(amount) AS amount FROM donations WHERE user_id=".$uid." AND DATE_FORMAT(created, '%Y-%m')=DATE_FORMAT(now(),'%Y-%m') AND type=".$type;
        $ret = $this->query($query);

        $month_amount = 0;
        if(!empty($ret[0][0]["amount"])){
            $month_amount = $ret[0][0]["amount"];
        }

        $query = "SELECT SUM(amount) AS amount FROM donations WHERE user_id=".$uid." AND type=".$type;
        $ret = $this->query($query);

        $total_amount = 0;
        if(!empty($ret[0][0]["amount"])){
            $total_amount = $ret[0][0]["amount"];
        }

        $this->useTable = "strokes";
        $query = "SELECT COUNT(*) AS sd_count FROM strokes WHERE target_id=".$uid;
        $ret = $this->query($query);
        $sd_count = $ret[0][0]["sd_count"];

        $result = array(
            "avatar" => $avatar,
            "name" => $name,
            "content" =>  $content,
            "birthday" =>  $birthday,
            "sd_count" => $sd_count,
            "available_amount" => $point,
            "month_amount" => $month_amount,
            "total_amount" => $total_amount
        );

        return $result;
    }


    public function search($uid, $keyword){
        $this->useTable = "users";
        $query = "SELECT result.*, companions.name AS c_name, companions.c_birthday FROM (SELECT * FROM users WHERE id NOT IN(SELECT friend_id FROM friends WHERE user_id = '" . $uid . "')) As result INNER JOIN companions ON result.ani_id = companions.id WHERE result.id <> '" . $uid . "' AND result.name like '%" . $keyword . "%' ORDER BY rand()";
        $ret = $this->query($query);
        return $ret;
    }

    public function array_sort($array, $on, $order="SORT_ASC")
    {
        $new_array = array();
        $sortable_array = array();
    
        if (count($array) > 0) {
            foreach ($array as $k => $v) {
                if (is_array($v)) {
                    foreach ($v as $k2 => $v2) {
                        if ($k2 == $on) {
                            $sortable_array[$k] = $v2;
                        }
                    }
                } else {
                    $sortable_array[$k] = $v;
                }
            }
    
            switch ($order) {
                case "SORT_ASC":
                    asort($sortable_array);
                break;
                case "SORT_DESC":
                    arsort($sortable_array);
                break;
            }
    
            foreach ($sortable_array as $k => $v) {
                $new_array[$k] = $array[$k];
            }
        }
        return $new_array;
    }

}
