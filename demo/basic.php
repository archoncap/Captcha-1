<?php

include('../CaptchaBuilder.php');
include('../PhraseBuilder.php');

use Gregwar\Captcha\CaptchaBuilder;

CaptchaBuilder::create()
    ->build()
    ->save('out.jpg')
    ;
