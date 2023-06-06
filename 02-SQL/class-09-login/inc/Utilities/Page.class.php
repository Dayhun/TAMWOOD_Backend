<?php

class Page {

    public static function getPageHeader( string $title="" ){
        $pageHeader = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <title>'.$title.'</title>
        </head>
        <body>
        ';
        return $pageHeader;
    }

    public static function getPageFooter() {
        $pageFooter = '
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        </body>
        </html>
        ';

        return $pageFooter;
    }

    public static function formNewUser(){
        $htmlForm = '
        <form class="row g-3 col-6" method="POST" action="'.$_SERVER["PHP_SELF"].'">
        <div class="col-6">
            <label for="fName" class="form-label">First Name</label>
            <input type="text" name="fName" class="form-control" id="fName" placeholder="First Name">
        </div>
        <div class="col-6">
            <label for="lName" class="form-label">Last Name</label>
            <input type="text" name="lName" class="form-control" id="lName" placeholder="Last Name">
        </div>
        <div class="col-md-6">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="*******">
        </div>
        
        <div class="col-md-6">
            <label for="age" class="form-label">Age</label>
            <input type="text" class="form-control" id="age" name="age" placeholder="Age">
        </div>
        <div class="col-md-4">
            <label for="gender" class="form-label">Gender</label>
            <select name="gender" id="gender" class="form-select">
            <option selected>Choose...</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="prefer-not-to-say">Perfer Not to Say</option>
            </select>
        </div>
        <div class="col-12">
            <input type="submit" value="Include User" class="btn btn-primary">
        </div>
        </form>
        ';

        return $htmlForm;
    }

    public static function loginForm() {
        $loginForm = '
        <form class="row g-3 col-6" method="POST" action="'.$_SERVER["PHP_SELF"].'">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="passLogin" class="form-label">Password</label>
                <input type="password" class="form-control" id="passLogin" name="passLogin">
            </div>
            <input type="submit" class="btn btn-primary" value="Login">
            </form>
        ';

        return $loginForm;
    }

    public static function successMessage() {
        $message = '
        <div class="alert alert-success" role="alert">
            New User included successfully!
        </div>
        ';
        return $message;
    }

    public static function userTable( $userList) {
        $userTable = '
            <table class="w-50 table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Age</th>
                        <th scope="col">Gender</th>
                    </tr>
                </thead>
                <tbody>';
                    foreach($userList as $user) {
                        $userTable .= self::buildUserRow($user);
                    }
        $userTable .= '</tbody>
            </table>
        ';

        return $userTable;
    }

    private static function buildUserRow($newUser){
        $row = '
            <tr>
                <td>'.$newUser->getId().'</td>
                <td>'.$newUser->getFName().'</td>
                <td>'.$newUser->getLName().'</td>
                <td>'.$newUser->getUsername().'</td>
                <td>'.$newUser->getEmail().'</td>
                <td>'.$newUser->getAge().'</td>
                <td>'.$newUser->getGender().'</td>
            </tr>
        ';

        return $row;
    }
}