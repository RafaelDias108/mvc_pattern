<?php

namespace App\Controller\Pages;

use App\Utils\View;
use DateTime;

/**
 * Classe responsável pelo template da view
 * @method View getHeader()
 * @method View getFooter()
 * @method View getPage()
 */
class Page
{   
    /**
     * Responsável por renderizar o header
     *
     * @return View (header)
     */
    private static function getHeader() {
        return View::render('pages/header');
    }
    /**
     * Responsável por renderizar o footer
     *
     * @return View (footer)
     */
    private static function getFooter() {
        return View::render('pages/footer', [
            'ano' => (new DateTime('now'))->format('Y')
        ]);
    }
    /**
     * Método responsável por retornar o conteúdo (view) do template
     *
     * @param string $title
     * @param string $content
     * @return View
     */
    public static function getPage($title, $content) {
        return View::render('pages/page', [
            'header' => self::getHeader(),
            'title' => $title,
            'content' => $content,
            'footer' => self::getFooter()
        ]);
    }
}