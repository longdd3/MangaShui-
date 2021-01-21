<?php 
include("Include/data.php");
include("Include/function.php");
    $pageTitle = "Personal Manga Library";
    $section = null;

    include("Include/header.php"); 
    

?>

<div class = "brandlogo clearfix">
            <img class ="logo" src="images/logo2.png" alt="logo2" >

            <h1  class = "logo-express">
                The best Manga website
            </h1>
            <span class = "tag-line"> 
                Read and Find Best Manga and Anime in the World
            </span>

        </div>
        <div class = "container clearfix">
            <div class = "introduction">
                <h2>
                    Welcome
                </h2>
                <p> MangaShui s the top site for free reading or downloading comics. In addition, you can easily find a variety of Manga to read or download from this website. In addition, you do not need to register or register to access the MangaShui website. Simply visit this website and you can read your good Mangas online for free</p>
            </div>
            <div class = "section">
                <div class = "wrapper">
                    <ul>
                    <?php 
                    $random = array_rand($catalog,6);
                    
                            foreach ($random as $id) {
                            echo get_item_html($id,$catalog[$id]);
                        }
                        ?>
                        
                    </ul>
                </div>
            </div>
    
    </div>
        
           
 

<?php include("Include/footer.php"); ?>