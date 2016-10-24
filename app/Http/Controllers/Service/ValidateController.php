<?php

namespace App\Http\Controllers\Service;
use App\Tool\Validate\ValidateCode;
use App\Http\Controllers\Controller;
use App\Tool\SMS\SendTemplateSMS;

class ValidateController extends Controller
{
    public function create($value = '')
    {
        $validateCode = new ValidateCode;
        return $validateCode->doimg();
    }

    public function sendSMS($value = '')
    {
        $sendTemplateSMS = new SendTemplateSMS;
        $code = '';
        $charset = '1234567890';
        $_len = strlen($charset) - 1;
        for ($i = 0;$i < 6;++$i) {
            $code .= $charset[mt_rand(0, $_len)];
        }
        $sendTemplateSMS->sendTemplateSMS("18576437523", array(1234, 5), 1);

        return 'xx';
    }
}
