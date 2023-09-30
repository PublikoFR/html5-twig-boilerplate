<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

abstract class AbstractWebController extends AbstractController{
    
    private function getEnvVar( $param ){
        return isset( $_ENV[$param] )? $_ENV[$param]:null;
    }
    
    private function getDefParams(){
        
        $params['title'] = $this->getEnvVar('APP_NAME');
        $params['desc'] = $this->getEnvVar('APP_DESC');
        $params['author'] = $this->getEnvVar('APP_AUTHOR');
        $params['og_title'] = $this->getEnvVar('APP_OG_TITLE') ?? $this->getEnvVar('APP_NAME');
        $params['og_desc'] = $this->getEnvVar('APP_OG_DESC') ?? $this->getEnvVar('APP_DESC');
        $params['og_image'] = $this->getEnvVar('APP_OG_IMG');
        
        $tab['meta'] = $params;
        return $tab;
    }
    
    /**
     * @param $params
     * @return array
     * Merge default params with params passed by controller, the call AbstractController->render()
     */
    protected function render(string $view, array $parameters = [], Response $response = null): Response
    {
        //Merge params with DefaultParams
        $parameters = array_merge($this->getDefParams(), $parameters );
        return parent::render($view,$parameters );
    }
}