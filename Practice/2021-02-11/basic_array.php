<?php 
    //simple array
    $cars = array('BMW','TOYOTA','SWIFT');
    echo $cars[1].'<br>';
    print_r ($cars);

    // //print all elements of array
    $arrlen=count($cars);
    for ($i=0;$i<$arrlen;$i++){
        echo $cars[$i];
        echo '<br>';
    }

    //associative array
    $cars = array('BMW'=>20000,'TOYOTA'=>10000,'SWIFT'=>5000);
    echo $cars['BMW'].'<br>';

    $human=array('male'=>array('alex','bob','max'),
            'female'=>array('mily','mirza'));
    foreach ($human as $ele => $ele_values){
        echo $ele;
        foreach ($ele_value as $evalue){
            echo '<br>'.$evalue;
        }
    
   }

   //two dimentional array
   $cars = array(array('Volvo',100),
                array('BMW',60),
                array('Toyota',110));
    
   echo $cars[0][0].", ordered: ".$cars[0][1]."<br>";
   echo $cars[1][0].", ordered: ".$cars[1][1]."<br>";
   echo $cars[2][0].", ordered: ".$cars[2][1]."<br>";

   //array_change_key_case function
    $fruits=array("mango"=>"yellow","apple"=>"red","grapes"=>"green");
    print_r(array_change_key_case($fruits,CASE_UPPER));
    echo "<br><br>";


   //array_chunk() function
   $fruit = array('mango'=>35,'apple'=>25,'banana'=>40,'graps'=>25);
   print_r(array_chunk($fruit,3,true));
   echo '<br><br>';

   //array_combine function
    $fruits=array("mango","apple","grapes");
    $color=array("yellow","red","green");
    $x=array_combine($fruits,$color);
    print_r($x);
    echo "<br>";

    //array_count_values function
    $fruits=array("mango","grapes","mango","banana","grapes");
    print_r(array_count_values($fruits));
    echo "<br>";
    print_r(count($fruits));
    echo "<br>";

    //array_diff() funcation
    $x=array("a"=>"apple","b"=>"banana","c"=>"graps","d"=>"orange");
    $y=array("e"=>"apple","f"=>"banana","g"=>"painaple");

    print_r(array_diff($x, $y));
    echo '<br>';
    print_r(array_diff($y,$x));
    echo '<br>';
    print_r(array_diff_assoc($x,$y));

    //array_diff_uassoc() function
    function myfunction($a,$b)
    {
        if ($a===$b)
        {
        return 0;
        }
        return ($a>$b)?1:-1;
        }

        $a1=array("a"=>"red","b"=>"green","c"=>"blue");
        $a2=array("d"=>"red","b"=>"green","e"=>"blue");

        $result=array_diff_uassoc($a1,$a2,"myfunction");
        print_r($result);
        echo '<br>';

    //array_fill() function
    $a1=array_fill(3,4,"mango");
    $b1=array_fill(0,1,"orange");
    print_r($a1);
    echo "<br>";
    print_r($b1);

?>