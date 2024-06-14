<?php

class JobListing
{
    private $db;

    public function __construct(Database $database)
    {
        $this->db = $database->getConnection();
    }

    public function createJobListing($sector_id, $title, $slug, $caption, $description, $company, $salary, $image, $job_type, $career_level, $education_level, $years_of_experience, $location, $deadline, $status)
    {
        $image_name = $image['name'];
        $image_size = $image['size'];
        $image_tmp_name = $image['tmp_name'];
        $image_extension = pathinfo($image_name, PATHINFO_EXTENSION);
        $filename = uniqid() . '.' . $image_extension;
        $valid_extensions = ['jpg', 'jpeg', 'png'];

        if ($image_name != NULL) {
            if (!in_array($image_extension, $valid_extensions)) {
                $_SESSION['errorMessage'] = "invalid file format! only <strong>['jpg', 'jpeg', 'png']</strong> is allowed.";
                header("location: ../create-job.php");
                exit(0);
            } else if ($image_size > 512000) {
                $_SESSION['errorMessage'] = "file too large! only a maximum <strong>filesize of 500kb</strong> is allowed.";
                header("location: ../create-job.php");
                exit(0);
            } else {
                $destination = "../images/job-listings/$filename";
                move_uploaded_file($image_tmp_name, $destination);

                $sql = "INSERT INTO jobs (sector_id, title, slug, caption, description, company, salary, image, job_type, career_level, education_level, years_of_experience, location, deadline, status) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                $statement = $this->db->prepare($sql);
                $statement->execute([$sector_id, $title, $slug, $caption, $description, $company, $salary, $filename, $job_type, $career_level, $education_level, $years_of_experience, $location, $deadline, $status]);

                if ($statement) {
                    $_SESSION['successMessage'] = "Job Listing Created Successfully!";
                    header("location: ../view-jobs.php");
                    exit(0);
                } else {
                    $_SESSION['errorMessage'] = "Something Went Wrong!";
                    header("location: ../view-jobs.php");
                    exit(0);
                }
            }
        } else {
            $sql = "INSERT INTO jobs (sector_id, title, slug, caption, description, company, salary, job_type, career_level, education_level, years_of_experience, location, deadline, status) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $statement = $this->db->prepare($sql);
            $statement->execute([$sector_id, $title, $slug, $caption, $description, $company, $salary, $job_type, $career_level, $education_level, $years_of_experience, $location, $deadline, $status]);

            if ($statement) {
                $_SESSION['successMessage'] = "Job Listing Created Successfully!";
                header("location: ../view-jobs.php");
                exit(0);
            } else {
                $_SESSION['errorMessage'] = "Something Went Wrong!";
                header("location: ../create-job.php");
                exit(0);
            }
        }
    }

    // public function editCategory($name, $description, $status, $category_id)
    // {
    //     $sql = "UPDATE categories SET name=?, description=?, status=? WHERE id=?";
    //     $statement = $this->db->prepare($sql);
    //     $statement->execute([$name, $description, $status, $category_id]);

    //     if ($statement) {
    //         $_SESSION['successMessage'] = "Category Updated Successfully!";
    //         header("location: ../view-categories.php");
    //         exit (0);
    //     } else {
    //         $_SESSION['errorMessage'] = "Something Went Wrong!";
    //         header("location: ../view-categories.php");
    //         exit (0);
    //     }
    // }

    public function getJobsListings()
    {
        $sql = "SELECT
        j.*,
        s.name AS sector_name
        FROM jobs j INNER JOIN
        sectors s ON j.sector_id = s.id";
        $statement = $this->db->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    
        if ($result != null) {
            return $result;
        } else {
            return $result = null;
        }
    }
}
