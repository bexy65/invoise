<?php

class UserController
{
    public static $employeeList = [
        [
            'id' => 2,
            'role' => 2,
            'first_name' => 'Jannie',
            'last_name' => 'Doe',
            'email' => 'jannie@email.com',
            'age' => 21,
            'address' => '1st Street, 1st City',
            'rate' => 11,
            'currency' => "EU"
        ],
        [
            'id' => 3,
            'role' => 3,
            'first_name' => 'Mark',
            'last_name' => 'Smith',
            'email' => 'mark.smith@email.com',
            'age' => 28,
            'address' => '22nd Avenue, New Town',
            'rate' => 18,
            'currency' => "USD"
        ],
        [
            'id' => 4,
            'role' => 3,
            'first_name' => 'Anna',
            'last_name' => 'Johnson',
            'email' => 'anna.johnson@email.com',
            'age' => 34,
            'address' => '5th Boulevard, Old City',
            'rate' => 15,
            'currency' => "CAD"
        ],
        [
            'id' => 5,
            'role' => 4,
            'first_name' => 'Leo',
            'last_name' => 'Brown',
            'email' => 'leo.brown@email.com',
            'age' => 26,
            'address' => '9th Street, Lake View',
            'rate' => 20,
            'currency' => "BGN"
        ]
    ];

    public function show($id = null)
    {
        header('Content-Type: application/json');
        $config = require __DIR__ . "/../../config/app.php";

        $employees = [];
        $employeeList = self::getEmployees();
        foreach ($employeeList as $emp) {
            $employees[$emp['id']] = $emp;
            $employees[$emp['id']]['role'] = $config['roles'][$emp['role']];
        }

        if ($id !== null) {
            if (isset($employees[$id])) {
                echo json_encode(['status' => 'success', 'user' => $employees[$id]]);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Employee not found']);
            }
        } else {
            echo json_encode(['status' => 'success', 'users' => array_values($employees)]);
        }

        exit();
    }

    private function getEmployees()
    {
        //TODO: get data from database
        return self::$employeeList;
    }

    public function getEmployeeWorkRecords($id)
    {
        $config = require __DIR__ . "/../../config/app.php";
        $employeeWorkRecord = $config['employee_work_records'][$id];
        
        $start = DateTime::createFromFormat('H:i', $employeeWorkRecord['start_hour']);
        $end   = DateTime::createFromFormat('H:i', $employeeWorkRecord['end_hour']);

        $interval = $start->diff($end);
        $hours = $interval->h;
        $minutes = $interval->i;

        $minutesFormatted = str_pad($minutes, 2, '0', STR_PAD_LEFT);
        $record = $hours . ':' . $minutesFormatted;

        if(isset($employeeWorkRecord)) {
            echo json_encode(['status' => 'success', 'record' => $record]);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'No record found for this User']);
        }
    }
}
