<?php
//class ArgumentException extends Exception{};  

include "OddNumException.php";

//user-defined function with an exception  
class CustomException
{

    static function testEven($num = false)
    {

        try {


            if ($num % 2 == 1) {
                //throw an exception  
                throw new OddNumberException("OddNumber entered");
            } elseif (!$num) {
                throw new ArgumentException("Please enter input ");
            } else {
                echo " the passed value is an EVEN Number \n";
            }
        }

        //catch exception  
        catch (OddNumberException $e) {
            echo " Exception Message: Odd number Entered \n";
        } catch (ArgumentException $e) {
            echo " Exceptoin Message :  Please enter input ";
        }
        //catch exception  
        catch (Exception $e) {
            echo "Exception Message:  Even";
        }
        //  try {
        //     if (testEven()){
        //         throw new ArgumentException("one argument should be passed ");
        //     }
        //  }catch(Exception $er){
        //   echo "Exception Message : $e->getMessage() ";



    }
}

CustomException::testEven();
