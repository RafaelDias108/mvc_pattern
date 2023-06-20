<?php
    
    namespace App\Utils;

    /**
     * Classe responsável por gerenciar as views do projeto
     * e dados dinâmicos.
     */
    class View{

        /**
         * Método responsáve por retornar o conteúdo de uma view
         *
         * @param string $view
         * @return string
         */
        private static function getContentView($view){
            $file = __DIR__.'/../../resources/view/'.$view.'.html';
            return file_exists($file) ? file_get_contents($file) : '';
        }

        /**
         * Método responsável por retornar o conteúdo renderizado de uma view.
         *
         * @param string $view
         * @return string
         */
        public static function render($view) : string {

            // PEGA O CONTEÚDO DA VIEW
            $contentView = self::getContentView($view);
            return $contentView;
        }
    }