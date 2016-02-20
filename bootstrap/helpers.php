<?php

if (! function_exists('env'))
{
    /**
     * Gets the value of an environment variable. Supports boolean, empty and null.
     *
     * @param $key     string
     * @param $default mixed
     * @return mixed
     */
    function env($key, $default = null)
    {
        $value = getenv($key);

        if ($value === false)
        {
            return value($default);
        }

        switch (strtolower($value))
        {
            case 'true':
            case '(true)':
                return true;
                break;

            case 'false':
            case '(false)':
                return false;
                break;

            case 'empty':
            case '(empty)':
                return '';
                break;

            case 'null':
            case '(null)':
                return;
                break;
                
            default:
                break;
        }

        if ((strlen($value) > 1) && Str::startsWith($value, '"') && Str::endsWith($value, '"'))
        {
            return substr($value, 1, -1);
        }

        return $value;
    }
}
