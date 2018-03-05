<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//定义前台总控制器
class Home_Controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
}
//定义命令执行总控制器
class Cron_Controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if (!defined('APP_CRONTAB')) {
            echo "当前操作不是脚本执行!!!";
            exit;
        }
    }
}