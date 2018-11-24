<?php
require __DIR__ . "/connect.php";

class Queries
{

    private static function DBopen()
    {
        $instance = ConnectDb::getInstance();
        $conn = $instance->getConnection();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            // TODO: Remove the print statement. Use Logger.
        }
        return $conn;
    }
    private static function DBclose($conn)
    {
        $conn->close();
    }

    public static function insert_userinfo(
        $batch, $uname, $fat_name, $mot_name,
        $gender, $mat_state, $occupation,
        $designation, $spouse_attendee,
        $child_attendee, $total_amount,
        $paid_amount, $date
    ) {
        $conn = self::DBopen();
        $sql = "INSERT INTO userinfo (`batch`, `name`, `fat_name`, `mot_name`, `gender`, `mat_state`, `occupation`, `designation`, `spouse_attendee`, `child_attendee`, `total_amount`, `paid_amount`, `date`)
        VALUES ($batch, '$uname', '$fat_name', '$mot_name', '$gender', $mat_state, '$occupation', '$designation', $spouse_attendee, $child_attendee, $total_amount, $paid_amount, '" . $date . "' )";

        if ($conn->query($sql) === true) {
            return $conn->insert_id;
        } else {
            // TODO: Use logger instead of echo.
            echo $conn->error;
        }

        // self::DBclose($conn); // No need to close the connection, queries do not overlap
    }

    public static function get_batches() {
        $conn = self::DBopen();
        $sql = "SELECT `batch` FROM batchrepresentative";

        if ($conn->query($sql) === true) {
            return $conn->insert_id;
        } else {
            // TODO: Use logger instead of echo.
            echo $conn->error;
        }

        // self::DBclose($conn); // No need to close the connection, queries do not overlap
    }
}
