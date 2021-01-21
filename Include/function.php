<?php 
function get_item_html($id,$item) {
    $output =  "<li><a href= 'detail.php?id=".$id."'><img src = '"
                             . $item["img"] . "' title = '"
                             . $item["title"]."'/>" 
                             . "
                             <p>View Details</p>
                             </a></li>"; 
    return $output;

}
function array_category ($catalog,$category) {
    
    $output = array();


    foreach ($catalog as $id => $item) {
        if  ($category == null OR strtolower($category)  == strtolower($item["catagory"])) {
            $sort = $item["title"];
            $sort = ltrim($sort, "The ");
            $sort = ltrim($sort, "A ");
            $sort = ltrim($sort, "An ");
            $output[$id] = $sort;


        }
    } 
    asort($output);
    return array_keys($output);
}



?>