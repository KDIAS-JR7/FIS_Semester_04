#! /bin/bash
read -p "Enter your marks: " mark
case 1 in 
$((mark > 100)))
echo $mark "is greater than 100. MISSION IMPOSSIBLE"
;;
$((mark >= 75)))
echo  "Grade A"
;;
$((mark >= 65)))
echo  "Grade B"
;;
$((mark >= 50)))
echo  "Grade C"
;;
$((mark >= 35)))
echo  "Grade S"
;;
*)
echo  "MISSION FAILED"
;;
esac

