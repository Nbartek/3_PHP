  <?php
require_once "Article.php";
class ArtToHtml{
    public static function artToDiv(Article & $a):string
    {
        $html = "<div class='article' style='{$a->getStyle()}'>\n";
        $html .= "<h3>{$a->getTitle()}</h3>\n";
        $html .= "<p>{$a->getContent()}</p>\n";
        if($a->getDate()!=""){
            $html .= "<div class='article-footer'>Utworzono: {$a->getDate()}</div>";
        }
        if(trim($a->getTag())!=''){
            $html.="<div class='article-tag'>{$a->getTag()}</div>\n";
        }
       return $html."</div>\n<div><a class'article-btn' href='edit.php?tittle={$a->getTitle()}'>Edytuj</a>
       <a class'article-btn' href='edit.php?tittle={$a->getTitle()}'>Edytuj</a></div></dvi>\n";
    }
}//zrobic tagi/kilka i zrozumiec ten burdel