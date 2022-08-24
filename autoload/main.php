<?php

// require_once를 직접해도 무관! 
// new Hi();
// new Bye();

use \greeting\en\Hi as HiEn;
use \greeting\ko\Hi as HiKo;

new HiEn();
new HiKo();


?>