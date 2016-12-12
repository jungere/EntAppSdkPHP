<?php

    // 假设企业号在公众平台上设置的参数如下

    define('SCHEME', 'http://');

    define('URL_YOUDU_API', 'api.youdu.im'); // 请填写有度服务器地址

    define('API_GET_TOKEN', SCHEME . URL_YOUDU_API . '/cgi/gettoken'); // 获取token api

    define('API_SEND_MSG', SCHEME . URL_YOUDU_API . '/cgi/msg/send'); // 发送信息API

    define('API_UPLOAD_FILE', SCHEME . URL_YOUDU_API . '/cgi/media/upload'); // 文件上传API

    define('API_DOWNLOAD_FILE', SCHEME . URL_YOUDU_API . '/cgi/media/get'); // 文件下载API

    define('API_SEARCH_FILE', SCHEME . URL_YOUDU_API . '/cgi/media/search'); // 文件搜索API

    define('BUIN', 72907129);  //请填写企业总机号

    define('AESKEY', 'UlcMQBQSqpYYnhePdsjfCSMl9l9WQ2/nMO9Z0AB2V1s='); // 请填写企业应用回调用的AESKey

    define('APPID', 'yd8BC8C1357397418B8E0D15590002179D'); // 请填写企业应用AppId

    define('ACCESSTOKEN', ''); // 请填写企业应用回调Token

    define('SAVEPATH', './download/'); // 请填写文件保存路径
    
?>