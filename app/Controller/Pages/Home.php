<?php
    
namespace App\Controller\Pages;

use App\Utils\View;

    /**
     * Classe responsável por gerenciar as requisições que
     * vão chegar na home do site.
     */
    class Home extends Page{

        /**
         * Método resposnável por retornar o conteúdo (view) da home
         * @return string
         */
        public static function getHome(){
            $content =  View::render('pages/home', [
                'name' => "Home Pages",
                'description' => "Uma descrição da página Home"
            ]);

            return parent::getPage('MVC COM PHP', $content);
        }
    }
