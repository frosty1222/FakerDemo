<?php  require_once __DIR__ . '/vendor/autoload.php';?>
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>faker</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <h1 class="text-center">Welcome to faker testing page</h1>
        <h3 class="text-center"></h3>
        <?php 
        // chạy thử faker 
        function fakeTest(){
            $faker = Faker\Factory::create();
            
            echo $faker->name."<br>";
            echo $faker->email."<br>";
            echo $faker->phoneNumber()."<br>";
            echo $faker->randomDigit()."<br>";
            echo $faker->country()." ".$faker->address()."<br>";
            echo $faker->text()."<br>";
            print_r($faker->dateTime($max = 'now', $timezone = null));
        } 
        echo "<pre>";
        dump(fakeTest());
        function LoopName(){
            $faker = Faker\Factory::create();
            for ($i = 0; $i < 10; $i++) {
            echo $faker->name, "\n";
            }
        }
        echo "<pre>";
        echo LoopName();
        // faker seeding
        function seedingFaker(){
            $faker = Faker\Factory::create();
            $faker->seed();
            echo $faker->name;
        }
        echo "<pre>";
        seedingFaker();
        ?>
        
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
