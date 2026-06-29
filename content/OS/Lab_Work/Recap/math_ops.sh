#!/bin/bash
read -p "Enter an integer: " num1
read -p "Enter another integer: " num2
read -s -p "Enter a system pin: " pin
echo ""
echo "Choose an operation:"
echo "1) Addition"
echo "2) Substaction"
echo "3) Multiplication"
read -s -n 1 op
if [ "$op" -eq "1" ]; then
ans=$((num1+num2))
echo "Answer is : $ans"
elif [ "$op" -eq "2" ]; then
ans=$((num1-num2))
echo "Answer is : $ans"  
elif [ "$op" -eq "3" ]; then
ans=$((num1*num2))
echo "Answer is : $ans"  
else
echo "Invalid selection"
fi



