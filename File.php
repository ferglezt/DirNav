<?php

class File {

	protected $path;

	function __construct($path) {
		$this->path = $path;
	}

	public function getRealPath() {
		return realpath($this->path);
	}

	public function getParentFolder() {
		return dirname($this->getRealPath());
	}

	public function getCurrentFolderName() {
		return basename($this->getRealPath());
	}

}