<?php

//handle file upload
function handleUpload($inputName, $model = null)
{
    try {
        if (request()->hasFile($inputName)) {
            //check if previous image exists and delete it
            if ($model && \File::exists(public_path($model->{$inputName}))) {
                \File::delete(public_path($model->{$inputName}));
            }

            $file = request()->file($inputName);
            $fileName = rand() . $file->getClientOriginalName();
            $file->move(public_path('/uploads'), $fileName);

            $filePath = "/uploads/" . $fileName;

            return $filePath;
        }
    } catch (\Exception $e) {
        throw $e;
    }
}
