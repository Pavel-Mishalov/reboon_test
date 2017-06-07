<?php

//////////////////////////////////////////////////////////////////////////////////
// Есть сайт, на нем располагаются модели телефонов. Необходимо получить        //
// название гаджета, дату выпуска, размеры и изображения. Количество страниц: 3 //
// Сайт для парсинга:                                                           //
// http://kimovil.com                                                           //
//////////////////////////////////////////////////////////////////////////////////


/**
 * Формирует отчет по переданной карточке телефона с сайта http://kimovil.com
 * @param  string $url Ссылка на карточку телефона
 * @return array       Возвращает массив с полями
 *                                name
 *                                  Название гаджета
 *                                date
 *                                  Дата выпуска
 *                                dimensions
 *                                  Массив со значениями размеров
 *                                image
 *                                  Ссылка на картинку гаджета
 */
function get_info_telephone( string $url ){
  $body = @file_get_contents( $url );

  if( !empty( $body ) ){

    preg_match_all( "~(<meta itemprop=\"name\" content=\")([^\"]*)(\"/>)~", $body, $item_name, PREG_OFFSET_CAPTURE );
    $name = $item_name[2][0][0];
    preg_match_all( "~(<meta itemprop=\"releaseDate\" content=\")([^\"]*)(\"/>)~", $body, $item_date, PREG_OFFSET_CAPTURE );
    $date = $item_date[2][0][0];
    preg_match_all( "~(<div class=\"fc30\">)([^<]*)(<)~", $body, $item_dimensions, PREG_OFFSET_CAPTURE );
    $dimensions = array( trim( $item_dimensions[2][0][0] ), trim( $item_dimensions[2][1][0] ), trim( $item_dimensions[2][2][0] ) );
    preg_match_all( "~(<img itemprop=\"image\" src=\")([^\"]*)~", $body, $item_image, PREG_OFFSET_CAPTURE );
    $image = 'http:' . $item_image[2][0][0];

    $answer = array(
                'name'       => $name,
                'date'       => $date,
                'dimensions' => $dimensions,
                'image'      => $image,
              );
    return $answer;
  }

  return false;
}





/////////////////////////////////////////////////////////////////////
// Тестовые данные                                                 //
// url 'https://www.kimovil.com/ru/where-to-buy-oneplus-36gb-64gb' //
/////////////////////////////////////////////////////////////////////

$info = get_info_telephone( 'https://www.kimovil.com/ru/where-to-buy-oneplus-36gb-64gb' );

echo '<pre>';
print_r( $info );
echo '</pre><br><br><br>';

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// В ответе возвращает                                                                                         //
// Array                                                                                                       //
// (                                                                                                           //
//     [name] => OnePlus 3                                                                                     //
//     [date] => 2016-05-10                                                                                    //
//     [dimensions] => Array                                                                                   //
//         (                                                                                                   //
//             [0] => 74.7                                                                                     //
//             [1] => 152.7                                                                                    //
//             [2] => 7.4                                                                                      //
//         )                                                                                                   //
//     [image] => http://d2giyh01gjb6fi.cloudfront.net/phone_front/0001/28/thumb_27545_phone_front_medium.jpeg //
// )                                                                                                           //
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////



////////////////////////////////////////////////////////////////////////////////////////////
// Тестовые данные                                                                        //
// url 'https://www.kimovil.com/ru/where-to-buy-asus-zenfone-3-ultra-zu680kl-cn-4gb-64gb' //
////////////////////////////////////////////////////////////////////////////////////////////

$info = get_info_telephone( 'https://www.kimovil.com/ru/where-to-buy-asus-zenfone-3-ultra-zu680kl-cn-4gb-64gb' );

echo '<pre>';
print_r( $info );
echo '</pre><br><br><br>';

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// В ответе возвращает                                                                                         //
// Array                                                                                                       //
// (                                                                                                           //
//     [name] => Asus ZenFone 3 Ultra                                                                          //
//     [date] => 2016-05-30                                                                                    //
//     [dimensions] => Array                                                                                   //
//         (                                                                                                   //
//             [0] => 93.9                                                                                     //
//             [1] => 186.4                                                                                    //
//             [2] => 6.8                                                                                      //
//         )                                                                                                   //
//     [image] => http://d2giyh01gjb6fi.cloudfront.net/phone_front/0001/26/thumb_25854_phone_front_medium.jpeg //
// )                                                                                                           //
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//////////////////////////////////////////////////////////////////////////////////
// Тестовые данные                                                              //
// url 'https://www.kimovil.com/ru/where-to-buy-asus-zenfone-3-ze520kl3gb-64gb' //
//////////////////////////////////////////////////////////////////////////////////


$info = get_info_telephone( 'https://www.kimovil.com/ru/where-to-buy-asus-zenfone-3-ze520kl3gb-64gb' );

echo '<pre>';
print_r( $info );
echo '</pre><br><br><br>';

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// В ответ возвращает                                                                                          //
// Array                                                                                                       //
// (                                                                                                           //
//     [name] => Asus ZenFone 3 ZE520KL                                                                        //
//     [date] => 2016-07-12                                                                                    //
//     [dimensions] => Array                                                                                   //
//         (                                                                                                   //
//             [0] => 74.0                                                                                     //
//             [1] => 146.9                                                                                    //
//             [2] => 7.7                                                                                      //
//         )                                                                                                   //
//     [image] => http://d2giyh01gjb6fi.cloudfront.net/phone_front/0001/34/thumb_33907_phone_front_medium.jpeg //
// )                                                                                                           //
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

