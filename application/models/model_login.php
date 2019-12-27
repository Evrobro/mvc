<?php


class Model_Login extends Model
{
    function Login($mail, $pass)
    {
        $a = "Неверный логин или пароль";
        $b = "Вы успешно вошли как";
        $c = "Введите mail и пароль";
        $sql = (new Connection())->createSql();
        $query = "SELECT `password_hash`,`username` FROM `user` WHERE `email`='$mail' and `password_hash`=md5('$pass')";
        $result = $sql->query($query);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if ($mail == null || $pass == null) {
            return $c;
        } else {
            $user_password = $row['password_hash'];
            if ($user_password == md5($pass)) {
                $user = $row['username'];
                $_SESSION["auth_ok"] = true;
                $_SESSION["auth_login"] = $user;
                return ($b . "  " . $user);
            } else {
                return $a;
            }
        }
    }
}
