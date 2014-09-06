<?php

namespace Vibius\FileSystem;
use League\Flysystem\Filesystem as Flysystem;
use League\Flysystem\Adapter\Local as Adapter;

class FileSystem extends FlySystem{

	function __construct($path){
		parent::__construct(new Adapter($path));
	}

	public function dump(){
		echo "<pre>";
		print_r($this);
	}
}