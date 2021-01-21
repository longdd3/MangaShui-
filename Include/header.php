<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php 
        echo $pageTitle;
        
        ?> 
        </title>
        <link rel = "stylesheet" href ="CSS/normalize.css">
        <link rel= "stylesheet" href= "CSS/style.css">
        <link rel = "stylesheet" href = "CSS/mediaquery.css">
        
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
        
        <script src="https://kit.fontawesome.com/5a0844fd1b.js" crossorigin="anonymous"></script>
        <script src = "JS/jquery-3.5.1.min.js"></script>
        <script src = "JS/function.js"></script>
    </head>
    <body>
        <header class = "header-top ">
            <div class="container clearfix">
           
                <h1 class ="logo-name"><a href = "index.php" class = "name-logo" title = "Mangashui">
                  MangaShui</a></h1>
                <a href="javascript:void(0);" class="btns" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                  </a>
                <ul class = "main-nav" id = "top-nav"> 
                    <li class = "manga 
                    <?php 
                    if ($section == "mangas") {
                    echo "on"; 
                    } 
                    ?>
                    ">
                    <a href ="catalog.php?cat=mangas" >Manga</a></li>
                    <li class = "musics
                    <?php 
                    if ($section == "musics") {
                    echo "on"; 
                    } 
                    ?>
                    ">
                    <a href ="catalog.php?cat=musics" >Musics</a></li>
                    <li class = "characters
                    <?php 
                    if ($section == "characters") {
                    echo "on"; 
                    } 
                    ?>
                    ">
                    <a href ="catalog.php?cat=charactes" >Characters</a></li>
                    <li class = "suggest
                    <?php 
                    if ($section == "suggest") {
                    echo "on"; 
                    } 
                    ?>
                    ">
                   

                </ul>
            </div>
            <!-- <button class = "dmButton" onclick = "darkmode()">
                <svg xmlns:x="http://ns.adobe.com/Extensibility/1.0/" xmlns:i="http://ns.adobe.com/AdobeIllustrator/10.0/" xmlns:graph="http://ns.adobe.com/Graphs/1.0/" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="100px" height="100px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                    <metadata>
                        <sfw xmlns="http://ns.adobe.com/SaveForWeb/1.0/">
                            <slices/>
                            <sliceSourceBounds bottomLeftOrigin="true" height="100.25" width="100.125" x="0" y="-100.125"/>
                        </sfw>
                    </metadata>
                    <g class = "outer"> 
                    <path d="M0,50c0,27.614,22.386,50,50,50V0C22.386,0,0,22.386,0,50z"/>
                    <path fill="#FFFFFF" stroke="#000000" stroke-width="0.25" stroke-miterlimit="10" d="M50,0v100c27.614,0,50-22.386,50-50  C100,22.386,77.614,0,50,0z"/>
                    </g>> 
                </svg>

            </button> -->
        </header>
        <div id = "content">