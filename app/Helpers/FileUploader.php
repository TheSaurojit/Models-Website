<?php


namespace App\Helpers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class FileUploader
{
    /**
     * Upload a file to the public path.
     *
     * @param  \Illuminate\Http\UploadedFile  $file
     * @return string
     */
    public static function uploadFile(UploadedFile $file)
    {
        $folder = "images" ;

        // Generate a unique name for the file
        $fileName = self::generateFileName($file);

        // Define the full path using public_path()
        $filePath = public_path($folder);

        // Ensure the directory exists
        if (!file_exists($filePath)) {
            mkdir($filePath, 0777, true);
        }

        // Move the file to the public directory
        $file->move($filePath, $fileName);

        // Return the relative path for accessing the file via URL
        return "/" . $folder . '/' . $fileName;
    }

    /**
     * Generate a unique file name.
     *
     * @param  \Illuminate\Http\UploadedFile  $file
     * @return string
     */
    protected static function generateFileName(UploadedFile $file)
    {

        return Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
    }

    /**
     * Delete a file from the public path.
     *
     * @param  string  $filePath
     * @return bool
     */
    public static function deleteFile($filePath)
    {
        $fullPath = public_path($filePath);
        return file_exists($fullPath) ? unlink($fullPath) : false;
    }
}
