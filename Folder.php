<?php

require_once 'File.php';

class Folder extends File {
	public function getEntries() {
		$files = array_diff(scandir($this->path), array('.', '..'));
		return $files;
	}

	public function getParentFolder() {
		return new Folder(dirname($this->getRealPath()));
	}
}