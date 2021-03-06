<?php
require_once"Article.php";
class RepoArticles{
    public static function getAll(string $dir="articles/"):array{
        $result = scandir($dir);
        $articles = [];
        foreach($result as $art){
            if($art!='.' && $art!=".."){
                $a= new Article("",$art);
                $a->getContentFromFile($dir.'/'.$art);
                $a->setDate(date("d-m-Y H:i:s",filemtime($dir.'/'.$art)));
                $article[] = $a;
            }
        }

        return $article;
    }
    public static function saveArticle(Article & $a):void
    {
        $dir = "articles";
        if(file_exists($dir.'/'.$a->getTitle())) return;
        $plik = fopen($dir.'/'.$a->getTitle(),'w');
        fwrite($plik,$a->getContent());
        fwrite($plik,$a->getTag());
        fclose($plik);
    }
}