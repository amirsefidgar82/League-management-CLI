<?php

class Date
{
    private $d;
    private $m;
    private $y;

    public function __construct() {
        $args = func_get_args();
        $numArgs = func_num_args();
        if ($numArgs == 3) {
            // حالتی که کاربر از پرانتز شی ورودی داده است
            $this->d = $args[0];
            $this->m = $args[1];
            $this->y = $args[2];
            // انجام عملیات مورد نیاز با ورودی
        } else if ($numArgs == 0) {
            // حالتی که کاربر ورودی نداده و خالی گذاشته است
            // انجام عملیات مورد نیاز بدون ورودی
        }
    }
    public function read()
    {
        echo "day: ";
        day_input:
        $day = readline();
        if ($day > 30 || $day < 0) {
            echo "error in input values\n";
            goto day_input;
        }
        month_input:
        echo "month: ";
        $month = readline();
        if ($month > 12 || $month < 0) {
            echo "error in input values\n";
            goto month_input;
        }
        echo "year: ";
        $year = readline();

        $this->d = $day;
        $this->m = $month;
        $this->y = $year;
    }
    public function show()
    {
        echo "$this->d/$this->m/$this->y";
    }
    public function get_d()
    {
        return $this->d;
    }
    public function get_m()
    {
        return $this->m;
    }
    public function get_y()
    {
        return $this->y;
    }

    public function set_d($d)
    {
        if ($d > 30 || $d < 0) die("error in input values");
        $this->d = $d;
    }
    public function set_m($m)
    {
        if ($m > 12 || $m < 0) die("error in input values");
        $this->d = $m;
    }
    public function set_y($d)
    {
        $this->d = $d;
    }

    public function Date_difference(Date $date) : Date {
        $result = clone $date;
        $result->d -= $this->d;
        $result->m -= $this->m;
        $result->y -= $this->y;

        if($result->d < 0) {
            $result->d += 30;
            $result->m -= 1;
        }

        if ($result->m < 0) {
            $result->m += 12;
            $result->y -= 1;
        }

        return $result;
    }
}