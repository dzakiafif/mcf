<?php
/**
 * Created by PhpStorm.
 * User: dzaki
 * Date: 05/10/16
 * Time: 16:32
 */

$app->register(new \Silex\Provider\DoctrineServiceProvider(),$config['db']);

$app->register(new \Dflydev\Silex\Provider\DoctrineOrm\DoctrineOrmServiceProvider(),$config['orm']);

$app->register(new \Silex\Provider\TwigServiceProvider(),$config['twig']);

$app->register(new \Silex\Provider\MonologServiceProvider());

$app->register(new \Silex\Provider\FormServiceProvider());

$app->register(new \Silex\Provider\TranslationServiceProvider());

$app->register(new \Silex\Provider\SessionServiceProvider());

$app->register(new \Silex\Provider\UrlGeneratorServiceProvider());

$app->register(new \Silex\Provider\ServiceControllerServiceProvider());

$app->register(new \Silex\Provider\HttpFragmentServiceProvider());

$app->register(new \Silex\Provider\ValidatorServiceProvider());

$app->register(new \Gigablah\Silex\OAuth\OAuthServiceProvider(),$config['oauth']);

