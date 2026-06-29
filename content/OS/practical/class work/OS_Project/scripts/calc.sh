#! /bin/bash

echo "1) Addition"
echo "2) Substaction"
echo "3) Multiplication"
echo "4) Division"

read -p "Enter your operation.(Ex: 1) : " op
case 1 in 
$(("$op" == 1)))
read -p "Enter the first number: " num1
read -p "Enter the second number: " num2
ans=$((num1+num2))
;;
$(("$op" == 2)))
read -p "Enter the first number: " num1
read -p "Enter the second number: " num2
ans=$((num1-num2))
;;
$(("$op" == 3)))
read -p "Enter the first number: " num1
read -p "Enter the second number: " num2
ans=$((num1*num2))
;;
$(("$op" == 4)))
read -p "Enter the first number: " num1
read -p "Enter the second number: " num2
ans=$((num1/num2))
;;
*)
ans="operation not available"
;;
esac

echo "Result: $ans"

