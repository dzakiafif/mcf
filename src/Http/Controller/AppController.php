<?php
/**
 * Created by PhpStorm.
 * User: dzaki
 * Date: 05/10/16
 * Time: 16:50
 */

namespace Malang\Mcf\Http\Controller;

use Silex\Application;
use Silex\ControllerCollection;
use Silex\ControllerProviderInterface;

class AppController implements ControllerProviderInterface{

    private $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * Returns routes to connect to the given application.
     *
     * @param Application $app An Application instance
     *
     * @return ControllerCollection A ControllerCollection instance
     */
    public function connect(Application $app)
    {
        $controller = $app['controllers_factory'];

        $controller->get('/home',[$this,'homeAction'])
            ->bind('home');

        $controller->get('/tentang-mcf',[$this,'tentangMcfAction'])
            ->bind('tentang-mcf');

        $controller->get('/subsector',[$this,'subsectorAction'])
            ->bind('subsector');

        $controller->get('/detail-game',[$this,'detailGameAction'])
            ->bind('detail-game');

        return $controller;

    }

    public function homeAction()
    {
        return $this->app['twig']->render('Home.twig');
    }

    public function tentangMcfAction()
    {
        return $this->app['twig']->render('TentangMcf.twig');
    }

    public function subsectorAction()
    {
        return $this->app['twig']->render('Subsector.twig');
    }

    public function detailGameAction()
    {
        return $this->app['twig']->render('SubsectorGame.twig');
    }
}

