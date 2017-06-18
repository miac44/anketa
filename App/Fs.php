<?php

namespace App;

class Fs extends Model
{

public static function DirList($dir = '/')
{
	$result = [];
	foreach (Fs::DirListFullPath($dir) as $v){
		$result[] = basename($v);
	}
	return $result;
}

public static function DirListFullPath($dir = '/', $pattern = "*")
{
	return glob($dir . $pattern, GLOB_ONLYDIR);
}

public static function FileListFullPath($dir = '/', $pattern = '*')
{
	return array_diff(glob($dir . $pattern), glob($dir . $pattern, GLOB_ONLYDIR));
}

public static function FileList($dir = '/', $pattern = '*')
{
	$result = [];
	foreach (Fs::FileListFullPath($dir) as $v){
		$result[] = basename($v);
	}
	return $result;
}

public static function DirTreeFullPath($dir = '/', $pattern= '*')
{
	$result = [];
	$result = Fs::FileListFullPath($dir, $pattern);
	foreach (Fs::DirListFullPath($dir) as $directory){
		$result[$directory] = Fs::DirTreeFullPath($directory . '/', $pattern);
	};
	return $result;
}

public static function DirTree($dir = '/', $pattern= '*')
{
	
	$dirlist = Fs::DirTreeFullPath($dir, $pattern);
	$result = [];
	foreach ($dirlist as $k=>$v){
		if (is_array($v)){
			$result[basename($k)] = Fs::DirTree($k . '/', $pattern);
		} else {
			$result[]= basename($v);
		};
	};
	return $result;
}

}
