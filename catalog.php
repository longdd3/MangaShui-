<?php
include("Include/data.php");
include("Include/function.php");

$pageTitle = "Full Catalog";
$section = null;



if (isset($_GET["cat"])) {
if ($_GET["cat"] == "mangas") 
{
    $pageTitle = "Mangas";
    $section = "mangas";
}
else if ($_GET["cat"] == "musics")
{
    $pageTitle = "Musics";
    $section = "musics";
}
else if ($_GET["cat"] == "charactes")
{
    $pageTitle = "Mangas Character";
    $section = "characters";
}
}
include("Include/header.php"); 
 

?>

<div class= "section container">
    <div class = "wrapper">
        <h1><?php 
           if ($section != null) {
                echo "<a class = 'hish' href = 'catalog.php'> Full Catalog </a> &gt; ";

           }
        echo $pageTitle; ?></h1>

                    <ul>
                        <?php 
                      
                            $categories = array_category($catalog,$section);

                            foreach ($categories as $id) {
                            echo get_item_html($id,$catalog[$id]);
                        }
                        
                        ?>
                      
                        <!-- <li> 
                        <a href = "">
                            <img src = "Images/Manga/DragonballGT.png" alt = "nagato">
                            <p>View Details</p>
                        </a>
                        </li> -->
                        
                    </ul>
                </div>
</div>

<?php include("Include/footer.php"); ?>