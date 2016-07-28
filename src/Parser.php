<?php
namespace Apk;

class Parser{
	private $file;
	private $zip;
	public function __construct($file){
		$this->file =$file;
		$this->zip =new \ZipArchive();
		$this->zip->open($file);
	}
	public function __destruct(){
		$this->zip->close();
	}

	public function manifest( $file='AndroidManifest.xml'){
		return new Manifest($this->zip->getFromName($file));
	}
	public function file($name){
		return $this->zip->getFromName($name);
	}
}