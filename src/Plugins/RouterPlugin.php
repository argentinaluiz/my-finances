<?php

namespace SONFin\Plugins;

use Aura\Router\RouterContainer;
use SONFin\ServiceContainerInterface;

class RouterPlugin implements PluginInterface
{
  public function register (ServiceContainerInterface $container)
  {
    $routerContainer = new RouterContainer();
    /* Registra as rotas da aplicação */
    $map = $routerContainer->getMap();
    /* Tem a função de identificar a rota que ta sendo acessada */
    $matcher = $routerContainer->getMatcher();
    /* Tem a função de gerar links com base nas rotas registradas */
    $generator = $routerContainer->getGenerator();

    $container->add('routing', $map);
    $container->add('routing.matcher', $matcher);
    $container->add('routing.generator', $generator);
  }
}