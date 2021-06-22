<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mobile_detect_bundle.device.collector' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\DataCollector\\DataCollectorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\DataCollector\\DataCollector.php';
include_once $this->targetDirs[3].'\\vendor\\suncat\\mobile-detect-bundle\\SunCat\\MobileDetectBundle\\DataCollector\\DeviceDataCollector.php';

$this->services['mobile_detect_bundle.device.collector'] = $instance = new \SunCat\MobileDetectBundle\DataCollector\DeviceDataCollector(${($_ = isset($this->services['mobile_detect.device_view']) ? $this->services['mobile_detect.device_view'] : $this->getMobileDetect_DeviceViewService()) && false ?: '_'});

$instance->setRedirectConfig($this->parameters['mobile_detect.redirect']);

return $instance;