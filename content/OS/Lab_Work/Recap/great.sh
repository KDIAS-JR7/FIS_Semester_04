#!/bin/bash
read -p "Enter an integer: " int
if [ $int -gt 20 ]; then
echo "Number is greater than 20"
elif [ $int -gt 10 ]; then
echo "Number is less than 20, but greater than 10"
else
echo " Number is less than 10"
fi
