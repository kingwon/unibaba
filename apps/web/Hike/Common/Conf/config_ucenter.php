<?php
$_top_domain_name = isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : $_SERVER['HTTP_HOST'];
$_top_domain_name = ltrim(strtolower(substr($_top_domain_name, -3)), '.');


define('UC_CONNECT', 'mysql');              // 连接 UCenter 的方式: mysql/NULL, 默认为空时为 fscoketopen()
                            // mysql 是直接连接的数据库, 为了效率, 建议采用 mysql

if($_top_domain_name != 'me'){
    define('UC_DBHOST', '10.66.114.140');           // UCenter 数据库主机
    define('UC_DBUSER', 'hike');             // UCenter 数据库用户名
    define('UC_DBPW', 'facehike2014');                  // UCenter 数据库密码
    define('UC_DBNAME', 'fh_ucenter');             // UCenter 数据库名称
    define('UC_DBCHARSET', 'utf8');             // UCenter 数据库字符集
    define('UC_DBTABLEPRE', '`fh_ucenter`.hike_ucenter_');         // UCenter 数据库表前缀
}else{
    //数据库相关 (mysql 连接时, 并且没有设置 UC_DBLINK 时, 需要配置以下变量)
    define('UC_DBHOST', 'localhost');           // UCenter 数据库主机
    define('UC_DBUSER', 'hike');             // UCenter 数据库用户名
    define('UC_DBPW', 'facehike2014');                  // UCenter 数据库密码
    define('UC_DBNAME', 'fh_ucenter');             // UCenter 数据库名称
    define('UC_DBCHARSET', 'utf8');             // UCenter 数据库字符集
    define('UC_DBTABLEPRE', '`fh_ucenter`.hike_ucenter_');         // UCenter 数据库表前缀
}

//通信相关
define('UC_KEY', 'meD7feh48dM4q9Lf58odKff6A9Y0nfNeacY1l8e6G2Ta16m4regd28t1MfF5tfOb');
// define('UC_KEY', 'seu7NeB4Hdp4h9mfT8MdEfl6Z9w0Jfte2c51m896F2GaM6A4de0d2811hfR5Af4b'); // 与 UCenter 的通信密钥, 要与 UCenter 保持一致
// define('UC_API', 'http://yourwebsite/uc_server');   // UCenter 的 URL 地址, 在调用头像时依赖此常量
define('UC_API', 'http://bbs.facehike.me/uc_server');
define('UC_CHARSET', 'utf8');               // UCenter 的字符集
define('UC_IP', '');                    // UCenter 的 IP, 当 UC_CONNECT 为非 mysql 方式时, 并且当前应用服务器解析域名有问题时, 请设置此值
define('UC_APPID', 2);                  // 当前应用的 ID
define('UC_PPP', '20');

//同步登录 Cookie 设置
$cookiedomain = '';             // cookie 作用域
$cookiepath = '/';          // cookie 作用路径

// define('UC_CONNECT', 'mysql');
// define('UC_DBHOST', 'localhost');
// define('UC_DBUSER', 'a0314225158');
// define('UC_DBPW', '59667799');
// define('UC_DBNAME', 'a0314225158');
// define('UC_DBCHARSET', 'utf8');
// define('UC_DBTABLEPRE', '`a0314225158`.hike_ucenter_');
// define('UC_DBCONNECT', '0');
// define('UC_KEY', 'meD7feh48dM4q9Lf58odKff6A9Y0nfNeacY1l8e6G2Ta16m4regd28t1MfF5tfOb');
// define('UC_API', 'http://bbs.facehike.me/uc_server');
// define('UC_CHARSET', 'utf-8');
// define('UC_IP', '');
// define('UC_APPID', '2');
// define('UC_PPP', '20');
