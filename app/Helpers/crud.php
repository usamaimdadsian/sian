<?php

function saveFile($file,$path_r)
{
    // get file name with the extension
    $file_name_ext = $file->getClientOriginalName();
    // get just file name
    $file_name = pathinfo($file_name_ext, PATHINFO_FILENAME);
    // get just extension
    $extension = $file->getClientOriginalExtension();
    // file name to store
    $file_addr = $file_name . '_' . time() . '.' . $extension;
    // Upload Image
    $path = $file->storeAs('public/'.$path_r, $file_addr);
    $file_addr = 'storage/'.$path_r. $file_addr;
    
    return $file_addr;
}