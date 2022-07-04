<?php
include "VoteEligibilityException.php";

class VoteEligibility{

      static function voting($age){
        try {
            if ($age >= 18){
                echo "Allowed To Vote\n";
            }
            else{
                throw new VoteEligibilityException("Age should be over 18 \n");
            }

        } catch(Exception $e){
            echo "Exception catch : " . $e->getMessage() . "\n";

        } finally{
            echo "Note : Vote right can be applied  only if you are 18 and above ";
        }

    }
    
}
VoteEligibility :: voting(45);
