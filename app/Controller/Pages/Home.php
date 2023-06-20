<?php
    
namespace App\Controller\Pages;

use App\Model\Entity\Organization;
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
            $organization = new Organization;
            
            $content =  View::render('pages/home', [
                'name' => $organization->name,
                'description' => $organization->description,
                'site' => $organization->site
            ]);

            return parent::getPage('MVC COM PHP', $content);
        }
    }
