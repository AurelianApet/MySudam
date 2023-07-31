<?php

/*
 * @author: khs
 */

App::uses('AppModel', 'Model'); 

class LookAround extends AppModel
{
    var $name = 'LookAround';
    
    public function getRecommendedFriends($uid, $count){
        $this->useTable = "users";
        $query = "SELECT * FROM (SELECT * FROM users WHERE id NOT IN(SELECT friend_id FROM friends WHERE user_id = '" . $uid . "')) As result WHERE result.avatar <> '' AND result.id <> '" . $uid . "' ORDER BY rand() Limit " . $count;
        $ret = $this->query($query);
        return $ret;
    }

    public function getHotPics($count = 0){
        $this->useTable = "strokes";
        $query = "SELECT DISTINCT blog_id FROM strokes";
        //$query = "SELECT DISTINCT blog_id FROM strokes WHERE date_format(created, '%Y-%m-%d') = CURDATE()";
        $ret = $this->query($query);

        $result = array();
        foreach($ret as $blog){
            $blog_id =$blog["strokes"]["blog_id"];

            $query = "SELECT COUNT(*) as sd_count FROM strokes WHERE blog_id = ".$blog_id;
            $ret1 = $this->query($query);
            $sd_count = $ret1[0][0]["sd_count"];

            $temp = array("blog_id"=>$blog_id, "sd_count"=>$sd_count);
            array_push($result, $temp);
        }

        $result = $this->array_sort($result, 'sd_count', "SORT_DESC");

        $index = 0;
        $hot_result = array();
        foreach($result as $blog){
            $query = "SELECT * FROM blogs WHERE id=".$blog["blog_id"];
            $ret1 = $this->query($query);

            $temp = array("Blog" => $ret1[0]["blogs"], "sd_count"=>$blog["sd_count"]);
            array_push($hot_result, $temp);
            if($count > 0){
                $index++;
                if($index == $count){
                    break;
                }
            }
        }

        return $hot_result;
    }

    public function getHotDogs($count = 0){
        $this->useTable = "blogs";
        $query = "SELECT * FROM blogs INNER JOIN (SELECT users.id  FROM users INNER JOIN companions ON users.ani_id = companions.id WHERE companions.ani_type=1) AS a ON blogs.user_id = a.id ORDER BY rand()";
        $ret = $this->query($query);

        $result = array();
        foreach($ret as $blog){
            $temp = array("Blog" => $blog["blogs"]);
            array_push($result, $temp);
            if($count > 0){
                $index++;
                if($index == $count){
                    break;
                }
            }
        }

        return $result;
    }

    public function getColdCats($count = 0){
        $this->useTable = "blogs";
        $query = "SELECT * FROM blogs INNER JOIN (SELECT users.id  FROM users INNER JOIN companions ON users.ani_id = companions.id WHERE companions.ani_type=2) AS a ON blogs.user_id = a.id ORDER BY rand()";
        $ret = $this->query($query);

        $result = array();
        foreach($ret as $blog){
            $temp = array("Blog" => $blog["blogs"]);
            array_push($result, $temp);
            if($count > 0){
                $index++;
                if($index == $count){
                    break;
                }
            }
        }

        return $result;
    }

    public function getOtherPets($count = 0){
        $this->useTable = "blogs";
        $query = "SELECT * FROM blogs INNER JOIN (SELECT users.id  FROM users INNER JOIN companions ON users.ani_id = companions.id WHERE companions.ani_type=0) AS a ON blogs.user_id = a.id ORDER BY rand()";
        $ret = $this->query($query);

        $result = array();
        foreach($ret as $blog){
            $temp = array("Blog" => $blog["blogs"]);
            array_push($result, $temp);
            if($count > 0){
                $index++;
                if($index == $count){
                    break;
                }
            }
        }

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