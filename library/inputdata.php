<?php
/**
 * Description 
 *
 * @author dmitriy.fedosenko
 */
class InputData {

    public static function get($parameter = '') {
        if (empty($parameter)) {
            return $_GET;
        } else {
            return $_GET[$parameter];
        }
    }

    public static function post($parameter = '') {
        if (empty($parameter)) {
            return $_POST;
        } else {
            return $_POST[$parameter];
        }
    }

    public static function server($parameter = '') {
        if (empty($parameter)) {
            return $_SERVER;
        } else {
            return $_SERVER[$parameter];
        }
    }
    
    public static function request($parameter = '') {
        if (empty($parameter)) {
            return $_REQUEST;
        } else {
            return $_REQUEST[$parameter];
        }
    }

    public static function controller() {
        $defaultController = 'application';
        $currentController = self::get('controller');
        if (empty($currentController))
            $currentController = $defaultController;
        return $currentController;
    }

    public static function action() {
        $defaultAction = 'default';
        $currentAction = self::get('action');
        if (empty($currentAction))
            $currentAction = $defaultAction;
        return $currentAction;
    }

}
