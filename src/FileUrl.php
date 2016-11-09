<?php

namespace Flaveris\FileUrlPHP;

class FileUrl
{
    public static function toFileUrl($pathName)
    {
        $pathName = preg_replace('/\\\/', '/', $pathName);

        // Windows drive letter must be prefixed with a slash
        if (substr($pathName, 0, 1) !== '/') {
            $pathName = '/' . $pathName;
        }

        return 'file://' . $pathName;
    }
}