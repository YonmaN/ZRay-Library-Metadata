<?php

namespace ZRay\Extension;

class Metadata {
	/**
	 * @var string
	 */
	private $extension;
	/**
	 * @var array
	 */
	private $datatypesNotToGenerate = array();
	/**
	 * @var array
	 */
	private $modules = array();
	
	/**
	 * @return string
	 */
	public function getExtension() {
		return $this->extension;
	}

	/**
	 * @return array
	 */
	public function listDoNotGenerateDatatypes() {
		return $this->datatypesNotToGenerate;
	}

	/**
	 * @return array
	 */
	public function getModules() {
		return $this->modules;
	}

	/**
	 * @param string $extension
	 */
	public function setExtension($extension) {
		$this->extension = $extension;
		return $this;
	}

	/**
	 * @param string $datatype
	 */
	public function doNotGenerateDatatype($datatype) {
		$this->datatypesNotToGenerate[] = $datatype;
		return $this;
	}
	
	/**
	 * @param Module $moduleDefinition
	 */
	public function addModuleDefinition($moduleDefinition) {
		$this->modules[] = $moduleDefinition;
		return $this;
	}
}

class Module {
	private $storage = array();
	private $panel = array();
	private $button = array();
	
	private $displays = array();
}

class Display {
	private $name;
	private $type;
	private $dataname;
	private $columns;
	
	private $options = array();
}