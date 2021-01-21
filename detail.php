<?php
include("Include/data.php");
include("Include/function.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    if (isset($catalog[$id])) {
        $item = $catalog[$id];
    }
}
if (!isset($item)) {
    header("location:catalog.php");
    exit;
}

$pageTitle = $item["title"];
$section = null;



include("Include/header.php"); ?>
 
   <div class = "detail-page extra">
 

        <img src = "<?php echo $item["img"]; ?>" alt = "<?php echo $item["item"] ?>" />
        <div class = "detail-des">
            <h2><?php echo $item["title"]; ?> </h1>
            <table>
                <tr> 
                    <th>Category<th>
                    <td><?php echo $item["catagory"]; ?></td>
                </tr>
                 
             

            <?php 
            if (strtolower($item["catagory"]) == "mangas") {
                ?>
                <tr> 
                    <th>Japanese Name<th>
                    <td><?php echo $item["japname"]; ?></td>
            </tr>
                <tr> 
                    <th>Year<th>
                    <td><?php echo $item["year"]; ?></td>
            </tr>
                <tr> 
                    <th>Author<th>
                    <td><?php echo $item["author"]; ?></td>
            </tr>  
                <tr> 
                    <th>Genre<th>
                    <td><?php echo implode(", ",$item["genre"]); ?></td>
            </tr>   
                <tr> 
                    <th>Summary<th>
                    <td><?php echo $item["summary"]; ?></td>
            </tr>   
            <?php  } else if (strtolower($item["catagory"]) == "musics") { 
            ?>
            <tr> 
                    <th>Name<th>
                    <td><?php echo $item["title"]; ?></td>
            </tr>
            <tr> 
                    <th>Singer<th>
                    <td><?php echo $item["singer"]; ?></td>
            </tr>
            <tr> 
                    <th>Album<th>
                    <td><?php echo $item["album"]; ?></td>
            </tr>
            <tr> 
                    <th>Year<th>
                    <td><?php echo $item["year"]; ?></td>
            </tr>
            <tr> 
                    <th>Album<th>
                    <td><?php echo $item["album"]; ?></td>
            </tr>
            <tr> 
                    <th>Genre<th>
                    <td><?php echo implode(" ,",$item["genre"]); ?></td>
            </tr>
            <?php } else if (strtolower($item["catagory"]) == "characters")
            { ?>
             
             <tr> 
                    <th>Name<th>
                    <td><?php echo $item["japname"]; ?></td>
            </tr>
            <tr> 
                    <th>Gender<th>
                    <td><?php echo $item["gender"]; ?></td>
            </tr>
            <tr> 
                    <th>Life<th>
                    <td><?php echo $item["life"]; ?></td>
            </tr>
             
            <?php } ?>
            

            </table>
             
            <button href = "#" class = "back-btn" onclick = "goBack()">Back</i>
          <!-- <i class="fas fa-arrow-circle-left"> -->
            </button>
</div>  
 
 
</div>
 

 