<?php
    
    namespace App\Controller\Pages;

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
            echo 'Olá mundo';
        }
    }
