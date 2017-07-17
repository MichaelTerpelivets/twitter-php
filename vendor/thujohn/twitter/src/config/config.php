<?php

// You can find the keys here : https://apps.twitter.com/

return [
	'debug'               => function_exists('env') ? env('APP_DEBUG', false) : false,

	'API_URL'             => 'api.twitter.com',
	'UPLOAD_URL'          => 'upload.twitter.com',
	'API_VERSION'         => '1.1',
	'AUTHENTICATE_URL'    => 'https://api.twitter.com/oauth/authenticate',
	'AUTHORIZE_URL'       => 'https://api.twitter.com/oauth/authorize',
	'ACCESS_TOKEN_URL'    => 'https://api.twitter.com/oauth/access_token',
	'REQUEST_TOKEN_URL'   => 'https://api.twitter.com/oauth/request_token',
	'USE_SSL'             => true,

	'CONSUMER_KEY'        => 'mz0w6swjsxTGSbQM0HkYg4XuI',
	'CONSUMER_SECRET'     =>'F4MvUqHbMNS1RhZlJLReDWGNOnW2HMao1fYVA5qJmmXg0enbvg',
	'ACCESS_TOKEN'        =>'821996387554430976-NTYw8SIwfJuFEOFP9A1oyQ3alhz8uX7',
	'ACCESS_TOKEN_SECRET' =>'RqbiJqMm4PcQZP3DxHtXF90NBZZgayp0hemaVCNmMrlbR',
];
