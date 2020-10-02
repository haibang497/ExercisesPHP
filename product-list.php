<?php
    $connect=new mysqli('localhost', 'root', '', 'item') or die(mysqli_error($connect));

    $update=false;
    $id=0;
    $name='';
    $quantity='';
    $description='';

    if(isset($_POST['save']))
    {
        $name=$_POST['name'];
        $quantity=$_POST['quantity'];
        $description=$_POST['description'];


        $connect->query("insert into item (name, quantity, description) values ('$name', '$quantity', '$description')") or die ($connect->error);
    }

    if(isset($_GET['delete'])){
        $id=$_GET['delete'];
        $connect->query("delete from item where id=$id") or die(mysqli_error(($connect)));
    }

    if(isset($_GET['edit'])){
        $id=$_GET['edit'];
        $update=true;
        $result=$connect->query("select * from item where id=$id") or die (mysqli_error($connect));
        if(count($result)==1){
            $row=$result->fetch_array();
            $name=$row['Name'];
            $quantity=$row['Quantity'];
            $description=$row['Description'];
        }
    }

    if(isset($_POST('update'))){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $quantity=$_POST['quantity'];
        $description=$_POST['description'];

        $connect->query("update item set name='$name', quantity='$quantity', description='$description') or die ($connect->error);
    }
?>