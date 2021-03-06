<?php

function Parse($query){
    $http = new GuzzleHttp\Client();
    $response = $http->post('https://graphql.anilist.co', [
        'json' => [
            'query' => $query,
            'variables' => null
        ]
    ]);

    $body = $response->getBody();

    $stringBody = (string) $body;

    return json_decode($stringBody, true);

}

function Shikimori($options, $other = ''){


    $url = 'https://shikimori.one/api/animes' . $other;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url . '?' . http_build_query($options));

    $response = curl_exec($ch);
    curl_close($ch);


    return json_decode($response, true);
}

function Shikimori_Character($options, $other){
    $url = 'https://shikimori.one/api/characters' . $other;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url . '?' . http_build_query($options));

    $response = curl_exec($ch);
    curl_close($ch);


    return json_decode($response, true);
}

function GetAnime($options){
    $url = 'https://kodikapi.com/search';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url . '?' . http_build_query($options));

    $response = curl_exec($ch);
    curl_close($ch);


    return json_decode($response, true);
}

function GetArray($array, $key, $p){
    $result = '';
    $i = 0;
    if($array == null) return null;
    foreach ($array as $arr){
        $i++;
        $result .= '<m class="genres">';

        $result .= $arr[$key];
        $result .= '</m>';
        if($i != sizeof($array))
            $result .= $p;

    }

    return $result;
}

function GetImg($str){
    $result = 'https://shikimori.one';

    foreach (str_split($str) as $item){
        if($item == "?"){
            break;
        }
        $result .= $item;
    }
    return $result;
}

function GetSeason($str){
    switch ($str){
        case "winter":
            return "зимнего";
            break;
        case "spring":
            return "весеннего";
            break;
        case "summer":
            return "летнего";
            break;
        case "fall":
            return "осеннего";
            break;
    }
    return null;
}

function GetStudious($array){
    $result = '';
    $i = 0;
    foreach ($array as $arr){
        $i++;
        if($arr == $array[sizeof($array) - 1]){
            $result .= $arr['name'];
            break;
        };
        $result .= $arr['name'] . ', ';
    }
    return $result;
}

function GetFundubbers($array, $p){
    $result = '';
    $i = 0;
    $j = 0;
    if($array == null) return null;
    foreach ($array as $arr){
        $i++;
        $j++;
        foreach (str_split($arr) as $_){
            $i++;
        }
        if($i > 118) {
            $result .= '<span class="show-spoiler">';
        }
        $result .= '<m>';

        $result .= $arr;
        if($j != sizeof($array))
            $result .= $p;
        else if($i == sizeof($array))
            $result .= '</span>';

        $result .= '</m>';
    }

    return $result;
}

function DefaultNull($par){
    if($par == null)
        return '?';
    else
        return $par;
}

function Staff($arr){
    $result = '';

    foreach ($arr as $key => $value){
        $result .= '<li> ' . $key . ': ' . DefaultNull($value) . '</li>';
    }
    return $result;
}

function GetCurrentSeason(){
    $currentMonth=DATE("m");

    if ($currentMonth>="03" && $currentMonth<="05")
        $season = "spring";
    else if ($currentMonth>="06" && $currentMonth<="08")
        $season = "summer";
    else if ($currentMonth>="09" && $currentMonth<="11")
        $season = "fall";
    else
        $season = "winter";

    return $season;
}

function PruningString($str, $count, $end_str = '...'){
    $result_str = '';

    for ($i = 0; $i < strlen($str); $i++){
        if($i < $count){
            $result_str .= $str[$i];
        }else{
            $result_str .= $end_str;
            break;
        }
    }

    return str_replace('�',  '', $result_str);
}