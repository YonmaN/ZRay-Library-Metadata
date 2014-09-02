<?php
namespace ZRay\Extension\Metadata;

class Module {
	public function getAutoloaderConfig()
	{
		return array(
				'Zend\Loader\StandardAutoloader' => array(
						\Zend\Loader\StandardAutoloader::LOAD_NS => array(
								__NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
						),
				),
		);
	}
}

