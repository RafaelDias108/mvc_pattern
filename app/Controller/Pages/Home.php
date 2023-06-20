<?php
    
namespace App\Controller\Pages;

use App\Utils\View;

    /**
     * Classe responsável por gerenciar as requisições que
     * vão chegar na home do site.
     */
    class Home{

        /**
         * Método resposnável por retornar o conteúdo (view) da home
         * @return string
         */
        public static function getHome(){
            return View::render('pages/home');
        }
    }
