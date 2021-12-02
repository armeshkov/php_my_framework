<?php

namespace php_my_framework;

use php_my_framework\TSingleton;

class Cache
{
    use TSingleton;

    public function set($key, $data, $seconds = 3600)
    {
        if ($seconds > 0) {
            $file = CACHE . '/' . md5($key) . '.txt';
            $content['data'] = $data;
            $content['end_time'] = time() + $seconds;
            if (file_put_contents($file, serialize($content))) {
                return true;
            }
        }
        return false;
    }

    public function get($key)
    {
        $file = CACHE . '/' . md5($key) . '.txt';
        if (file_exists($file)) {
            $content = unserialize(file_get_contents($file));
            if ($content['end_time'] > time()) {
                return $content['data'];
            }
            unlink($file);
        }
        return false;
    }

    public function delete($key)
    {
        $file = CACHE . '/' . md5($key) . '.txt';
        if (file_exists($file)) {
            unlink($file);
        }
    }


}