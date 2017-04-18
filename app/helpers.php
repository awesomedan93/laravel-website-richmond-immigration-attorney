<?php

if(!function_exists('changeSubDomain'))
{
    function changeSubDomain($lang)
    {
        $url = url()->current();

        $parsedUrl = parse_url($url);

        $host = explode('.', $parsedUrl['host']);

        $host[0] = $lang;
        $parsedUrl['host'] = implode('.',$host);

        $newUrl = $parsedUrl['host'];
        if(array_key_exists('path',$parsedUrl)){
            $newUrl .= $parsedUrl['path'];
        }
        return $newUrl;
    }
}

if(!function_exists('activeMenuCases'))
{
    function activeMenuCases($urlSegment)
    {

        if($urlSegment == 'pages.cases.criminal_defense' || $urlSegment == 'pages.cases.immigration_law'
            || $urlSegment == 'pages.cases.traffic_law' || $urlSegment == 'pages.cases.dui_law')
        {

            return 'active';
        }
        return '';
    }
}
if(!function_exists('activeMenuAttorneys'))
{
    function activeMenuAttorneys($urlSegment)
    {
        if($urlSegment == 'pages.raul_novo' || $urlSegment == 'pages.soulmaz_taghavi')
        {
            return 'active';
        }
        return '';
    }
}

if(!function_exists('excerpt')){
    function excerpt($string)
    {
        return substr($string, 0, 250) . '...';
    }
}

if(!function_exists('convertTime')){
    function convertTime($old)
    {
        $oldPublishedDate = strtotime($old);
        return date('M d, Y', $oldPublishedDate);
    }
}