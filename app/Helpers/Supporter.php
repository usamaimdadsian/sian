<?php
namespace App\Helpers;

class Supporter
{
    public static function getTitle($route)
    {
        switch($route)
        {
            case 'main.landing':
                return 'Home';
            case 'main.about':
                return 'About Us';
            case 'main.services':
                return 'Services';
            case 'main.portfolio':
                return 'Portfolio';
            case 'main.contact':
                return 'Contact';
            case 'main.portfolio.show':
                return 'Project Detail';
        }
        return "";
    }

    public static function getSidebarEntries($user)
    {
        $path = 'storage/navigation.json';
        $objects = json_decode(file_get_contents($path));
        $parent_nav = array();
        $child_nav = array();
        // return $parent_nav;
        // return gettype($objects);
        switch ($user->type) {
            case 'admin':
                foreach ($objects as $key => $object) {
                    if($object->type == 'admin')
                    {
                        if($object->child_of == null)
                        {
                            $parent_nav[] = $object;
                        }
                        else
                        {
                            $child_nav[] = $object;
                        }
                    }
                }
                $html = self::navigationHtml($parent_nav,$child_nav);
                return $html;
                break;
            
            default:
                
                break;
        }
    }

    public static function getRating($val)
    {
        $html = "<i class=\"fa fa-star\"></i>";
        $html_t = "<i class=\"fa fa-star\" style=\"color: gray;\"></i>";
        $html1 = "";
        $html2 = "";

        for($i = 0; $i < $val; $i++)
        {
            $html1 .= $html;
        }
        for($i = 0; $i < 5-$val; $i++)
        {
            $html2 .= $html_t;
        }

        $html = $html1.$html2;
        return $html;
    }


    // ========================================================
    //                  LOCAL FUNCTIONS
    // =======================================================
    public static function navigationHtml($parent_nav,$child_nav)
    {
        $html = '';
        foreach ($parent_nav as $key => $pnav) {
            $link = ($pnav->route == null)? "#":route($pnav->route);
            $has_child = ($pnav->parent)? "has-child":"";
            $html .= "<li class=\"menu-item ".$has_child."\" style=\"\"><a href=\"".$link."\" class=\"menu-link\"><span class=\"menu-icon ".$pnav->icon."\"></span> <span class=\"menu-text\">".$pnav->title."</span></a>";
            $flag = false;
            foreach ($child_nav as $key_c => $cnav) {
                if($cnav->child_of == $pnav->id)
                {
                    $linkc = ($cnav->route == null)? "#":route($cnav->route);
                    $html .= ($flag)? "": "<ul class=\"menu\">";
                    $html .= ($flag)? "": "<li class=\"menu-subhead\">".$pnav->title."</li>";
                    $html .= "<li class=\"menu-item\"><a href=\"".$linkc."\" class=\"menu-link\">".$cnav->title."</a>";
                    $flag = true;
                }
            }
            $html .= ($flag)? "</ul>": "";
            $html .= "</li>";       
        }
        return $html;
    }
}