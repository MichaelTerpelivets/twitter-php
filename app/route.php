<?php

namespace app;


use app\controllers\MainController;

class Route
{
    static function control()
    {
        self::provide();
        //запуск контроллера
    }

    public static function provide()
    {

        if (isset($_REQUEST['route'])) {
            $twits = new  MainController();
            $data =$twits->getJSON();
            return $data;
        } else {
            $twits = new MainController();
            $data = json_decode($twits->getTwits());
            self::view($data);
        }
    }


    public static function view($data)
    {
        include_once 'app/Views/home.php'; //Представление
    }
}
