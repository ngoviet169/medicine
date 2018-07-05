<?php

use Illuminate\Support\Facades\File;
/**
 * Upload image to folder use faker
 *
 * @param int $countImages
 * @param string $path
 *
 * @return array
 */
if (!function_exists('uploadImages')) {
    function uploadImages($countImages = 5, $path = 'uploads/fakers')
    {
        $faker = Faker\Factory::create();
        $path = public_path($path);
        $images = [];
        if (checkAndMakeDirectory($path)) {
            for ($i = 0; $i < $countImages; $i++) {
                $images[$i] = $faker->image($path, 200, 200);
            }
        }

        return $images;
    }
}

/**
 * Get all image from folder
 *
 * @param string $path
 *
 * @return array
 */
$getImagesFromFolder = function ($path = 'uploads/fakers') use(&$getImagesFromFolder)
{
    $images = [];
    $path = public_path($path);
    if(checkAndMakeDirectory($path)){
        $allowedMimeTypes = ['image/jpeg', 'image/gif', 'image/png', 'image/bmp', 'image/svg+xml'];
        $files = File::allFiles($path);
        foreach ($files as $file) {
            $contentType = mime_content_type((string)$file);
            if (in_array($contentType, $allowedMimeTypes)) {
                $images[] = stristr((string)$file, DIRECTORY_SEPARATOR . "uploads");
            }
        }

        if(empty($images) or count($images) < 5){
            uploadImages();

            return $getImagesFromFolder();
        }
    }

    return $images;
};

/**
 * Check directory, if not exist then create it
 *
 * @param $path
 *
 * @return bool
 */
if (!function_exists('checkAndMakeDirectory')) {
    function checkAndMakeDirectory($path)
    {
        if (!File::exists($path)) {

            return File::makeDirectory($path, 0775, true);
        }

        return true;
    }
}

$factory->define(App\Models\Partner::class, function (Faker\Generator $faker)use ($getImagesFromFolder)  {
    $images = $getImagesFromFolder();
    return [
        'brand_name' => $faker->name,
        'brand_image' => $faker->randomElement($images),
        'address1' => $faker->address,
        'ward' => $faker->streetSuffix,
        'district' => $faker->citySuffix,
        'city' => $faker->city,
        'home_phone' => $faker->phoneNumber,
        'mobile_phone' => $faker->phoneNumber,
        'facebook' => 'https://facebook.com/'.($faker->userName),
        'email' => $faker->companyEmail,
        'business_registration_number' => $faker->uuid,
        'business_registration_image' => $faker->randomElement($images),
        'website' => $faker->url,
        'establish_date'=> $faker->dateTime,
        'registration_image' => $faker->randomElement($images),
        'tax_number'=> $faker->uuid,
        'vice_gerent'=> $faker->name,
        'contact_name'=> $faker->name,
        'contact_home_phone'=> $faker->phoneNumber,
        'contact_mobile_phone'=> $faker->phoneNumber,
        'contact_email'=> $faker->email,
        'password'=> $faker->password,
        'status'=> $faker->numberBetween(0,3)
    ];
});
