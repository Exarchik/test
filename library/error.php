<?php

namespace test\library;

/**
 * Description
 *
 * @author dmitriy.fedosenko
 */
class Error {

    public static function show($message) {
        print $message;
    }

    public static function fileNotExist($filePath) {
        print "$filePath -- this file does not exist!";
    }

    public static function classNotExist($className) {
        print "$className -- this class does not exist!";
    }

}
