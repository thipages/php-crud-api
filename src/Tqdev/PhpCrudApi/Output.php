<?php
namespace Tqdev\PhpCrudApi;
class Output {
    private $config;
    public function __construct($username, $password, $database,$cacheType='NoCache', $options=null) {
        if ($options===null) $options=[];
        $options['username']=$username;
        $options['password']=$password;
        $options['database']=$database;
        $options['cacheType']=$cacheType;
        $this->config = new Config($options);
    }
    public function echo() {
        $request = new Request();
        $api = new Api($this->config);
        $response = $api->handle($request);
        $response->output();
    }
}