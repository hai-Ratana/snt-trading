<?php
namespace App\Utilities;
use Illuminate\Support\Facades\Input;

class Files {



	/**
	* @param $filename
	*
	* @return void
	*/
	public static function delete($filename) {
		if (file_exists($filename)) {
		  unlink($filename);
		}
	}

	/**
	 * @param $fileImage
	 * @param $prefixName
	 * @param $basePath
	 * @return string
	 */
	public static function saveUploadImage($fileImage, $prefixName, $basePath) {
		$imagePath = '';
		if (Input::hasFile($fileImage) && Input::file($fileImage) !== NULL) {
			$imagePath = $basePath;
			$image = Input::file($fileImage);

			/* Remove space from image filename */
			$filename = $prefixName . '_' . str_replace(' ', '', $image->getClientOriginalName());
			$image->move($imagePath, $filename);
			$imagePath = $imagePath . '/' . $filename;
		}
		return $imagePath;
	}

	/**
	 * @param $data
	 * @param $objectImagePath
	 * @param $fieldImage
	 * @param $prefixName
	 * @param $basePath
	 * @param $storeDelete
	 * @return null|string
	 */
	public static function saveEditUploadImage( $objectImagePath, $fieldImage, $prefixName, $basePath) {
		$imagePath = $objectImagePath;

		if (Input::hasFile($fieldImage) && Input::file($fieldImage) !== NULL) {
			$imagePath = $basePath;
			$image = Input::file($fieldImage);

			/* Remove space from image filename */
			$filename = $prefixName . '_' . str_replace(' ', '', $image->getClientOriginalName());
			$image->move($imagePath, $filename);
			$imagePath = $imagePath . '/' . $filename;
			Files::delete($objectImagePath);
		}
		return $imagePath;
	}
}
