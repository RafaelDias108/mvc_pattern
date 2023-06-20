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
         * @param array $vars (string/numeric)
         * @return string
         */
        public static function render($view, $vars = []) : string {

            // PEGA O CONTEÚDO DA VIEW
            $contentView = self::getContentView($view);

            // DESCOBRIR AS CHAVES DO $vars
            $keys = array_keys($vars);
            $keys = array_map(function($item) {
                return "{{".$item."}}";
            }, $keys);

            return str_replace($keys, array_values($vars), $contentView);
        }
    }