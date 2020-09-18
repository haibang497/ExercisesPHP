<?php
    $students=array(
        '001'=>"Nguyễn Văn A",
        '002'=>"Nguyễn Văn B",
        '003'=>"Nguyễn Văn C",
        '004'=>"Nguyễn Văn C"
    );

    function addStudent($students)
    {
        $students['005']="Nguyễn Văn D";
    }
    addStudent($students);
    print_r($students);
?>