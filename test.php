<?php

require_once 'Folder.php';

$folder = new Folder('./');

$parent = $folder->getParentFolder();
$allParentFolders = [];

while(isset($parent) && $parent->getCurrentFolderName() != 'C' && $parent->getCurrentFolderName() != '/') {
	array_push($allParentFolders, $parent->getCurrentFolderName());
	$parent = $parent->getParentFolder();
}

//Reverse the array
$allParentFolders = array_reverse($allParentFolders);

//print breadcrumbs path
foreach ($allParentFolders as $f) {
	echo $f.' > ';
}

//print current folder in breadcrumbs
echo $folder->getCurrentFolderName().'<br><br>';


$entries = $folder->getEntries();

//print all files in this folder
foreach ($entries as $e) {
	echo $e.'<br>';
}