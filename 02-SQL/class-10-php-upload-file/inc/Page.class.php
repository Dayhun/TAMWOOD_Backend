<?php

    class Page {

        public static function pageHeader() {
            $htmlHeader = '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Upload File</title>
                <link href="./css/style.css" rel="stylesheet">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
            </head>
            <body>
            ';

            return $htmlHeader;
        }

        public static function pageFooter() {
            $htmlFooter = '
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
            </body>
            </html>
            ';

            return $htmlFooter;
        }

        public static function uploadForm() {
            //It is missing something here. What?
            $form = '
            <form action="'.$_SERVER['PHP_SELF'].'" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="uploadPic" class="form-label">Upload your profile Picture Here</label>
                    <input class="form-control" name="uploadPic" type="file" id="uploadPic">
                </div>
                <input type="submit" value="Upload Picture" class="btn btn-secondary">
            </form>
            ';
            return $form;
        }

        public static function buildGallery( array $pics = []) {
            if (!empty($pics)) {
                $gallery = '<section class="gallery">';
                foreach($pics as $picture) {
                    $gallery .= '
                    <figure>
                        <img src="./img/'.$picture.'">
                    </figure>
                    ';
                }
                $gallery .= '</section>';
                return $gallery;
            }

            return "";
        }

        public static function successMessage() {
            $html = '
            <div class="alert alert-success" role="alert">
                File Uploaded Successfully!
            </div>
            ';

            return $html;
        }

        public static function warningMessage(string $message) {
            $html = '
            <div class="alert alert-warning" role="alert">'.
              $message  
            .'</div>
            ';
            return $html;
        }
    }