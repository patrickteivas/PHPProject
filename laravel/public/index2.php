<?php

class Test implements IDump{
    public $foo;
    private $bar;
    protected $zed;

    /**
     * Test constructor.
     * @param $foo
     * @param $bar
     * @param $zed
     */
    public function __construct($foo, $bar, $zed)
    {
        $this->foo = $foo;
        $this->bar = $bar;
        $this->zed = $zed;
    }
    public function dump(){

    }
    public function addFile(FileHandler $fileHandler){
        $fileHandler->create();
    }
}

trait Dumpable {
    public function dumpMe() {
        var_dump($this);
    }
}

interface IDump {
    public function dump();
}

class BetterTest extends Test {
    use Dumpable;
    public function betterDump() {
        var_dump($this->foo, $this->zed);
    }
}

interface FileHandler {
    public function delete(string $path);
    public function create(string $path, $filename, $content);
    public function edit(string $path, $filename, $content);
    public function read(string $path, $filename):string;
    public function move(string $fromPath, string $toPath);
    public function rename(string $path, $newFilename);
}

class GoogleDrive implements FileHandler {
    public function delete(string $path){}
    public function create(string $path, $filename, $content){}
    public function edit(string $path, $filename, $content){}
    public function read(string $path, $filename):string{}
    public function move(string $fromPath, string $toPath){}
    public function rename(string $path, $newFilename){}
}

class OneDrive implements FileHandler {
    public function delete(string $path){}
    public function create(string $path, $filename, $content){}
    public function edit(string $path, $filename, $content){}
    public function read(string $path, $filename):string{}
    public function move(string $fromPath, string $toPath){}
    public function rename(string $path, $newFilename){}
}

class Dropbox implements FileHandler {
    public function delete(string $path){}
    public function create(string $path, $filename, $content){}
    public function edit(string $path, $filename, $content){}
    public function read(string $path, $filename):string{}
    public function move(string $fromPath, string $toPath){}
    public function rename(string $path, $newFilename){}
}



$object = new Test("hello", "world", "me");
var_dump($object->addFile(new OneDrive()));
$object->dumpMe();