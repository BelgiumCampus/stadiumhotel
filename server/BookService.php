<?php
    abstract class BookService{
        protected $html;
        protected $recipients;
        protected $subject;
        
        abstract function Book();
        
        protected function calcDuration($startDate,$endDate, $format = '%d Day'){
             $datetime1 = date_create($startDate);
             $datetime2 = date_create($endDate);
    
             $interval = date_diff($datetime1, $datetime2);
             return $interval->format($differenceFormat);
        }
    }
?>
