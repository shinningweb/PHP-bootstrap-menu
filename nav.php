function make_menu_bar($arr){
    $str ='';
    if(!empty($arr)){
        foreach($arr as $key => $val){
            if(is_array($val)){
                $str .= '<li class="dropdown"><a href="#"  class="dropdown-toggle" data-toggle="dropdown">'.strtoupper($key).'<b class="caret"></b></a><ul class="dropdown-menu">';
                $str .= create_menu_items($val);
                $str .= '</ul></li>';
            } else {
                $str .= create_menu_items($val);
            }
        }
    }
    return $str;
}
function create_menu_items($arr){
    $str = '';
    if(is_array($arr) && !empty($arr)){
        foreach ($arr as $val){
            $active  = ($_GET['page'] === $val)? 'class="current"':'';    
                 $label   = strtoupper($val);    
                 $str    .= "<li $active><a href=\"index.php?page=$val\">$label</a></li>".PHP_EOL;
        }
        
    } else {
         $active  = ($_GET['page'] === $arr)? 'class="current"':'';   
         $str    .= "<li $active><a href=\"index.php?page=$arr\">".strtoupper($arr)."</a></li>".PHP_EOL;
    }
    
    return $str;
    
}
$links = ['home','about','services'=>['cleaning','dancing'],'careers','contact','support'=>['staff','articles']];
$nav = make_menu_bar($links);
?>
