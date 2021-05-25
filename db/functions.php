<?php
function loadImg($maxFileSize, $validFileTypes, $uploadPath, $nameElem): array
{
    $error = "";
    $newName = "";


    //Если загружена картинка, то
    if (isset($_FILES[$nameElem])) {
        //Так как мы имеем доступ к массиву FILES, чтобы каждый раз не писать длинный путь, мы записали знаение массива в переменную
        $file = $_FILES[$nameElem];
        if (!empty($file["error"])) {
            //Если значение ошибки есть, то выдать ошибку
            $error = "Произошла ошибка загрузки данных...";
        } else if ($file["size"] > $maxFileSize) {
            //Выдать ошибку, если размер файла больше чем надо
            $error = "Превышен максимальный размер файла";
        } else {
            //Проверяем расширение
            $file_info = finfo_open(FILEINFO_MIME_TYPE);
            $type = finfo_file($file_info, $file["tmp_name"]);
//            Формируемновое имя файла
            $name = pathinfo($file['name'], PATHINFO_FILENAME) . '_' . time();
            $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
            $newName = "$name.$ext";
            finfo_close($file_info);

            if (in_array($type, $validFileTypes)) {
                //Если расширение файла соответствует допустимому, то
                if (!move_uploaded_file($file["tmp_name"], $uploadPath . $newName)) {
                    //Выдать ошибку, если не удалось переместить изображение
                    $error = "Не удалось переместить изображение...";
                }
            } else {
                //Если расширение файла не соответствует допустимому
                $error = "Расширение файла должно быть таким: jpg, jpeg или png...";
            }
        };

        if (!empty($error)) {
            //Если ошибка есть, вывести название файла и ошибку
            $error = $file["name"] . " - " . $error;
        }
    }
    return [$error, $newName];
}

//function deleteAllPost($array): string
//{
//    $error = "";
//
//    if (count($array) > 0) {
//        foreach ($array as $file) {
//            if (!unlink("../img/" . $file)) {
//                $error = "Ошибка удаления файла";
//                break;
//            }
//        }
//    }
//    return $error;
//}

function deletePost($path)
{

    $error='';
    if (strlen($path) > 0){
        unlink($path);
    } else $error="Ошибка удаления файла";
    {
        return $error;
    }
}
function deleteIMG($files_Arr,$uploadPath): string
{
    $error = "";
    if(!empty($files_Arr)) {

        foreach ($files_Arr as $file) {
            if (!unlink($uploadPath.$file)) {
                $error .= " Ошибка удаления файла ";
            }
        }
    }
    return $error;
}


