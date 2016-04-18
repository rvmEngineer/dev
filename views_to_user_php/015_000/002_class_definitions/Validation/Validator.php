<?php  nameSpace Name_Space\Validation;

    use Respect\Validation\Validator as Valid;

    class Validator
    {
      public function IsValid($validation_data)
      {
           $errors = [];
          
        foreach($validation_data as $name => $value)
        {
            //If we   enter this value name. Means we gave blank and submitted
            //isset — Determine if a variable is set and is not NULL
            if($GLOBALS['test_echo_print']==true)
              echo "<br> ## Name and its Value :: ".$name."---".$value."<br>";

            if(isset($_REQUEST[$name]))
            {

                $rules     = explode("|",$value);
                
                foreach($rules as $rule)
                {
                    $exploded = explode(":",$rule);
               

                    switch($exploded[0])
                    {
                        case 'min':
                            $min = $exploded[1];
                            if(Valid::stringType()->length($min, null)->validate($_REQUEST[$name])==false)
                            {
                                //$errors[]=$name." should be atleast ".$value." Characters long <br>";
                               // $errors[]="<br>".$exploded[2]." should be atleast ".$min." Characters long <br>";
                                $errors[]= $exploded[2]." should be atleast ".$min." Characters long !!";
                            }
                        break;

                        case 'email':
                            if(Valid::email()->validate($_REQUEST[$name])==false)
                            {
                               // $errors[]=$name." email id not in correct form ".$value." email value passed  <br>";
                               // $errors[]="<br>".$exploded[1]." entry should contain valid email address<br>";
                                $errors[]= $exploded[1]." entry should contain valid email address!!";
                            }

                        break;

                        case 'equalTo':

                            if(Valid:: equals($_REQUEST[$name])->validate($_REQUEST[$exploded[1]])==false)
                            {
                             //   $errors[]="<br> Entry of ". $exploded[2]." and ".$exploded[3]." are different. Verification failed <br>";
                                 $errors[]=" Entry of ". $exploded[2]." and ".$exploded[3]." are different. Verification failed  !!";

                            }
                        break;
                            
                        default :
                            //

                    }//switch ends
                    
                }//entry
            }
            else
            {
             
                  $errors[]= "<br>$$$$$$$$$$$$$$ No value found $$$$$$$$$$$$$$<br>";
            }
        }
 
        //Testing
        if($GLOBALS['test_echo_print']==true)  
          echo "<br> Inside Valid<br>";
          
        return $errors;
         
      }
    }
    

?>