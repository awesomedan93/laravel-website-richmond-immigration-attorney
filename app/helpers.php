<?php

if(!function_exists('changeSubDomain')){
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
