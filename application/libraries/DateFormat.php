<?php

class DateFormat {

    public function numericDate()
    {
        return date('Y-m-d');
    }

    public function letterDate()
    {
       return date('d M Y');
    }
}