<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cw21.css">
    <title>Document</title>
</head>
<body>
    <div class="article-list">
        <?php
        require_once "Article.php";
        require_once "RepoArticles.php";
        require_once "ArtToHtml.php";
       //$a1 = new Article("","Artykół pierwszy");
       //$a2 = new Article("","Artykół drugi");
       //$dir = "articles/";
       //$a1->getContentFromFile($dir."art1.txt");
       //$a2->getContentFromFile($dir."art2.txt");
       //$a2->setStyle("border:solid 1px red; background-color:lightgreen; padding:10px;border-radius:8px");
       //echo ArtToHtml::artToDiv($a1);
       //echo ArtToHtml::artToDiv($a2);
       //echo $a2;
       //var_dump(RepoArticles::getAll())
       $articles = RepoArticles::getAll();
       foreach($articles as $a){
           echo ArtToHtml::artToDiv($a);
       }
        ?>
    </div>
<div>
    <a href="addNewForm.php">Dodaj nowy artkuł</a>
</div>

</body>
</html>