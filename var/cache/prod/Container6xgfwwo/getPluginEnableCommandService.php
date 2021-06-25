<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Command\PluginEnableCommand' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Command\\PluginCommandTrait.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Command\\PluginEnableCommand.php';

$this->services['Eccube\\Command\\PluginEnableCommand'] = $instance = new \Eccube\Command\PluginEnableCommand();

$instance->setPluginService(${($_ = isset($this->services['Eccube\\Service\\PluginService']) ? $this->services['Eccube\\Service\\PluginService'] : $this->load('getPluginServiceService.php')) && false ?: '_'});
$instance->setPluginRepository(${($_ = isset($this->services['Eccube\\Repository\\PluginRepository']) ? $this->services['Eccube\\Repository\\PluginRepository'] : $this->load('getPluginRepositoryService.php')) && false ?: '_'});
$instance->setName('eccube:plugin:enable');

return $instance;
