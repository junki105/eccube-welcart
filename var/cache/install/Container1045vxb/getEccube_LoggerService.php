<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'eccube.logger' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\psr\\log\\Psr\\Log\\AbstractLogger.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Log\\Logger.php';

if ($lazyLoad) {
    return $this->services['eccube.logger'] = $this->createProxy('Logger_fadf7f2', function () {
        return \Logger_fadf7f2::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getEccube_LoggerService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

return new \Eccube\Log\Logger(${($_ = isset($this->services['Eccube\\Request\\Context']) ? $this->services['Eccube\\Request\\Context'] : $this->getContextService()) && false ?: '_'}, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.front']) ? $this->services['monolog.logger.front'] : $this->load('getMonolog_Logger_FrontService.php')) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.admin']) ? $this->services['monolog.logger.admin'] : $this->load('getMonolog_Logger_AdminService.php')) && false ?: '_'});
