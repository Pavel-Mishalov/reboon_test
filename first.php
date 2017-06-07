<?php

////////////////////////////////////////////////////////////////////////////////////////
// У нас есть страница index.php, на ней располагается изображение, к примеру баннер. //
// На странице он отображается просто <img src="/banner.png"/>.                       //
// Нам нужно знать, сколько раз мы его показали.                                      //
////////////////////////////////////////////////////////////////////////////////////////


/**
 * Функция возвращает количество вхождений подстроки в строке
 * @param  string $pattern Строка для поиска
 * @param  string $body    Строка в которой производится поиск
 * @return integer         Количество раз вхождения подстроки в строке
 */

function count_in_page( string $pattern, string $body ){
  if( !empty( $pattern ) && !empty( $body ) ):
    $count = preg_match_all("~(" . $pattern .")~", $body, $inPage);
    return $count;
  endif;
  
  return false;
}








/////////////////////
// Тестовые данные //
/////////////////////

$body = '<img src="/banner.png"/>';

$pattern = <<<'BODY'

<!DOCTYPE html>
<html lang="uk,en"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Включить показ предупреждений и ошибок PHP < PHP | karashchuk.com</title>
<link rel="canonical" href="https://karashchuk.com/PHP/error_reporting-display_errors-display_startup_errors/" />
<meta name="keywords" content="PHP Включить показ предупреждений и ошибок PHP" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--[if lt IE 9]>
<script src='/js/html5.js'></script>
<script src='/js/css3-mediaqueries.js'>
</script>
<![endif]-->
<script type="text/javascript" src="/s.js" defer></script><link href="/common.css" rel="stylesheet" type="text/css" media="screen,projection" />
</head><body itemscope="" itemtype="http://schema.org/WebPage"><div class="W1">

<div class='header'>
<img src="/banner.png"/>  
<nav class='main od320'>
<a href='/'>
<div style="float:left;border:0;width:30px;height:30px;margin:5px;fill:#fff;">
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50" xml:space="preserve">
<use xlink:href="/imgs/s1.svg#logo"></use></svg>
</div>
</a>
<form action="/" method="get"><select id='topMenu' class='nav' onchange='topMenuSubmit()'>
<option value=0>Головна сторінка</option>
<option value=1 selected>Бібліотека знань</option>
<option value=4>Нотатки</option>
<option value=2>Contacts</option>
<option value=3>@-скринька</option>
</select></form>
</nav>

<nav class='mainW nd320'><ul>
<li><a href='/'>Головна</a></li>
<li><a href='/knowledge.php'>Бібліотека знань</a></li>
<li><a href='/notes.php'>Нотатки</a></li>
<li><a href='/contacts/'>Контакти</a></li>
<li><a href='/mail/'>@-скринька</a></li>
</ul></nav>

<div class='logo nd320' onclick='document.location.href="//karashchuk.com";'>
    <div style="float:left;border:0;width:50px;height:50px;margin:0 23px;fill:#007;">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50" xml:space="preserve">
<use xlink:href="/imgs/s1.svg#logo"></use></svg>
    </div>
<img src="/banner.png"/>
</div>
<div class='clearfix'></div>
</div>

<script>
function topMenuSubmit(){
  var stm=document.getElementById('topMenu').selectedIndex;
  var newURL="";
  switch(stm){
    case 1: newURL="/knowledge.php"; break;
    case 2: newURL="/contact.php"; break;
    case 3: newURL="https://microhosting.pro/mail/"; break;
        case 4: newURL="/knowledge.php"; break;
    default: newURL="/";
  }
//  console.log(stm+" "+newURL);
  location.href=newURL;
  return false;
}
</script>
<content>
<script type="text/javascript" src="/main.js"></script><div itemprop='breadcrumb' class=bc><a class=bc href='//karashchuk.com'>karashchuk.com</a> &raquo; <a class=bc href='//karashchuk.com/knowledge.php'>Бібліотека Знань</a> &raquo; <a class=bc href='//karashchuk.com/PHP/'>PHP</a> &raquo; Включить показ предупреждений и ошибок PHP</div><article itemscope='' itemtype='http://schema.org/Article'><header><h1 itemprop='name' class='k' title='PHP : Включить показ предупреждений и ошибок PHP'>PHP : Включить показ предупреждений и ошибок PHP</h1><span style='display: none;' itemprop='author'>Andriy Karashchuk</span></header>
<div itemprop='articleBody' class='content'><h2>Включение вывода всех ошибок и предупреждений в файле php.ini</h2>
<pre>error_reporting = E_ALL<br />display_errors = On<br />display_startup_errors = On
</pre>


<img src="/banner.png"/>


<br />
<h2>Включение вывода всех ошибок и предупреждений в коде PHP-скриптов</h2>
Включить вывод уведомлений и предупреждений можно, добавив в начало нужного .php файла следующие строки:<br /><br />
<pre>ini_set('error_reporting', E_ALL);<br />ini_set('display_errors', 1);<br />ini_set('display_startup_errors', 1);</pre>
<br /><br />
<h2>Включение вывода всех ошибок и предупреждений в файле .htaccess</h2>
<pre>php_value display_errors 1<br />php_value display_startup_errors 1<br />php_value error_reporting E_ALL<br /><br /></pre></div><div class='clearfix'></div></article><section itemscope itemtype='http://schema.org/CreativeWork' class='comments'><div class='commentInfo' itemscope itemtype='http://schema.org/Comment'><span itemprop='dateCreated'>2017-01-26 12:52</span>, author <span class='b0ld' itemprop='creator'>Илья</span><div class='commentText' itemprop='comment'>Слава украине!</div></div><div class='commentInfo' itemscope itemtype='http://schema.org/Comment'><span itemprop='dateCreated'>2016-11-17 16:12</span>, author <span class='b0ld' itemprop='creator'>Валерий</span><div class='commentText' itemprop='comment'>спасибо)</div></div><div class='commentInfo' itemscope itemtype='http://schema.org/Comment'><span itemprop='dateCreated'>2016-11-17 16:12</span>, author <span class='b0ld' itemprop='creator'>Валерий</span><div class='commentText' itemprop='comment'>спасибо)</div></div><div class='commentInfo' itemscope itemtype='http://schema.org/Comment'><span itemprop='dateCreated'>2016-07-02 18:07</span>, author <span class='b0ld' itemprop='creator'>Сергей</span><div class='commentText' itemprop='comment'>Спасибо Помогло</div></div><div class='commentInfo' itemscope itemtype='http://schema.org/Comment'><span itemprop='dateCreated'>2016-03-10 12:56</span>, author <span class='b0ld' itemprop='creator'>Женя</span><div class='commentText' itemprop='comment'>четко все по порядку, то что я искал, спасибо</div></div><div class='commentInfo' itemscope itemtype='http://schema.org/Comment'><span itemprop='dateCreated'>2015-12-09 09:58</span><div class='commentText' itemprop='comment'>+
<br>спасибо</div></div><div class='commentInfo' itemscope itemtype='http://schema.org/Comment'><span itemprop='dateCreated'>2015-11-12 18:58</span>, author <span class='b0ld' itemprop='creator'>Спасибо большое</span><div class='commentText' itemprop='comment'>Спасибо</div></div><div class='commentInfo' itemscope itemtype='http://schema.org/Comment'><span itemprop='dateCreated'>2015-07-02 19:51</span><div class='commentText' itemprop='comment'>Помог</div></div><div class='commentInfo' itemscope itemtype='http://schema.org/Comment'><span itemprop='dateCreated'>2015-07-02 19:51</span>, author <span class='b0ld' itemprop='creator'>Помог</span><div class='commentText' itemprop='comment'>+</div></div><div class='commentInfo' itemscope itemtype='http://schema.org/Comment'><span itemprop='dateCreated'>2014-06-11 12:50</span><div class='commentText' itemprop='comment'>Пригодилось. Спасибо.</div></div><div class='commentInfo' itemscope itemtype='http://schema.org/Comment'><span itemprop='dateCreated'>2014-05-28 16:51</span><div class='commentText' itemprop='comment'>+</div></div><div class='commentInfo' itemscope itemtype='http://schema.org/Comment'><span itemprop='dateCreated'>2014-05-26 22:22</span><div class='commentText' itemprop='comment'>спс реал помогает ))</div></div><div class='commentInfo' itemscope itemtype='http://schema.org/Comment'><span itemprop='dateCreated'>2013-08-12 08:07</span>, author <span class='b0ld' itemprop='creator'>ilianna.ru</span><div class='commentText' itemprop='comment'>Спасибо большое!</div></div><div class="denyCreateComment">Вы только посетили наш сайт, КОММЕНТИРОВАНИЕ будет доступно через несколько минут.<br><span style="font-size:85%;color:white;">возможно у Вас отключен javascript, если включен - просто обновите страницу</span></div></section><div class='abtm'><div itemprop='breadcrumb' class='bcb'>наступна стаття: &nbsp; <span typeof="v:Breadcrumb"><a href='/Apache/'>Apache</a></span><span class='nd320i'> &raquo; </span><span typeof="v:Breadcrumb"><a href='/Apache/htaccess_regexp/'>регулярные выражения в .htaccess</a></span></div><div itemprop='breadcrumb' class='bcb'>попередня стаття: &nbsp; <span typeof="v:Breadcrumb"><a href='/OpenBSD/'>OpenBSD</a></span><span class='nd320i'> &raquo; </span><span typeof="v:Breadcrumb"><a href='/OpenBSD/pkg_add/'>установка пекеджей - pkg_add </a></span></div><div class='clearfix' style='height:15px;'></div><a href='/PHP/'><div class='articleCategory'>PHP</div></a></div></div><div class='clearfix'></div></content>
<div class="clearfix"></div>
</div></body></html>
BODY;

var_dump( count_in_page( $pattern, $body ) );

////////////////////
// Выведет int(3) //
////////////////////