<?php

class JobUser
{
    private $db;

    public function __construct(Database $database)
    {
        $this->db = $database->getConnection();
    }

    public function registerConsultant($fullname, $email, $area_of_expertise, $password, $role)
    {

        $token = generateToken(32);

        $checkSql = "SELECT * FROM job_users WHERE email=?";
        $statement = $this->db->prepare($checkSql);
        $statement->bindParam(1, $email, PDO::PARAM_STR);
        $statement->execute();

        $userResult = $statement->fetch(PDO::FETCH_ASSOC);

        if (isset($userResult['email'])) {
            echo "User Already Exists! Please Sign In";
        } else {
            $hashPassword = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT into job_users (token, fullname, email, area_of_expertise, password, role) values(?,?,?,?,?,?)";
            $statement = $this->db->prepare($sql);
            $statement->bindParam(1, $token, PDO::PARAM_STR);
            $statement->bindParam(2, $fullname, PDO::PARAM_STR);
            $statement->bindParam(3, $email, PDO::PARAM_STR);
            $statement->bindParam(4, $area_of_expertise, PDO::PARAM_STR);
            $statement->bindParam(5, $hashPassword, PDO::PARAM_STR);
            $statement->bindParam(6, $role, PDO::PARAM_STR);
            $statement->execute();

            // $userId = $this->db->lastInsertId();

            if ($statement) {
                // welcomeMail("support@coinhabor.com", $email, $fullname);
                echo "Registration Successful! Redirecting to login...";
            } else {
                echo "something went wrong!";
            }
        }
    }

    public function registerEmployer($company_name, $company_email, $company_industry, $company_password, $company_role)
    {

        $token = generateToken(32);

        $checkSql = "SELECT * FROM job_users WHERE email=?";
        $statement = $this->db->prepare($checkSql);
        $statement->bindParam(1, $company_email, PDO::PARAM_STR);
        $statement->execute();

        $userResult = $statement->fetch(PDO::FETCH_ASSOC);

        if (isset($userResult['email'])) {
            echo "User Already Exists! Please Sign In";
        } else {
            $hashPassword = password_hash($company_password, PASSWORD_DEFAULT);
            $sql = "INSERT into job_users (token, fullname, email, industry, password, role) values(?,?,?,?,?,?)";
            $statement = $this->db->prepare($sql);
            $statement->bindParam(1, $token, PDO::PARAM_STR);
            $statement->bindParam(2, $company_name, PDO::PARAM_STR);
            $statement->bindParam(3, $company_email, PDO::PARAM_STR);
            $statement->bindParam(4, $company_industry, PDO::PARAM_STR);
            $statement->bindParam(5, $hashPassword, PDO::PARAM_STR);
            $statement->bindParam(6, $company_role, PDO::PARAM_STR);
            $statement->execute();

            // $userId = $this->db->lastInsertId();

            if ($statement) {
                // welcomeMail("support@coinhabor.com", $email, $fullname);
                echo "Registration Successful! Redirecting to login...";
            } else {
                echo "something went wrong!";
            }
        }
    }

    public function registerJobSeeker($jobSeeker_name, $jobSeeker_email, $jobSeeker_password, $jobSeeker_role)
    {

        $token = generateToken(32);

        $checkSql = "SELECT * FROM job_users WHERE email=?";
        $statement = $this->db->prepare($checkSql);
        $statement->bindParam(1, $jobSeeker_email, PDO::PARAM_STR);
        $statement->execute();

        $userResult = $statement->fetch(PDO::FETCH_ASSOC);

        if (isset($userResult['email'])) {
            echo "User Already Exists! Please Sign In";
        } else {
            $hashPassword = password_hash($jobSeeker_password, PASSWORD_DEFAULT);
            $sql = "INSERT into job_users (token, fullname, email, password, role) values (?,?,?,?,?)";
            $statement = $this->db->prepare($sql);
            $statement->bindParam(1, $token, PDO::PARAM_STR);
            $statement->bindParam(2, $jobSeeker_name, PDO::PARAM_STR);
            $statement->bindParam(3, $jobSeeker_email, PDO::PARAM_STR);
            $statement->bindParam(4, $hashPassword, PDO::PARAM_STR);
            $statement->bindParam(5, $jobSeeker_role, PDO::PARAM_STR);
            $statement->execute();

            // $userId = $this->db->lastInsertId();

            if ($statement) {
                // welcomeMail("support@coinhabor.com", $email, $fullname);
                echo "Registration Successful! Redirecting to login...";
            } else {
                echo "something went wrong!";
            }
        }
    }

    public function loginJobUser($email, $password)
    {
        $checkSql = "SELECT * FROM job_users WHERE email=?";
        $statement = $this->db->prepare($checkSql);
        $statement->bindParam(1, $email, PDO::PARAM_STR);
        $statement->execute();

        $loginResult = $statement->fetch(PDO::FETCH_ASSOC);

        if ($loginResult == null) {
            $response = [
                "message" => "invalid"
            ];

            $json = json_encode($response);
            echo $json;
        } else {
            if (!password_verify($password, $loginResult['password'])) {

                $response = [
                    "message" => "incorrect"
                ];

                $json = json_encode($response);
                echo $json;
            } elseif ($loginResult['access'] == 1) {
                $response = [
                    "message" => "suspended"
                ];

                $json = json_encode($response);
                echo $json;
            } else {
                $_SESSION['user_data'] = [
                    'token' => $loginResult['token'],
                    'fullName' => $loginResult['fullname'],
                    'role' => $loginResult['role'],
                    'interaction' => "",
                ];

                $response = [
                    "message" => "successful",
                    "data" => [
                        'token' => $loginResult['token'],
                        'fullName' => $loginResult['fullname'],
                        'role' => $loginResult['role'],
                        'interaction' => "",
                    ],
                ];

                $json = json_encode($response);
                echo $json;
            }
        }
    }

    public function logoutUser()
    {
        session_start();
        session_unset();
        session_destroy();
        header("location: ../login.php");
    }
}
