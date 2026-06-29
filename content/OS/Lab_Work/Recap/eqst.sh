#!/bin/bash
read -p "Enter a string: " str1
read -p "Enter another string: " str2
if [ $str1 == $str2 ]; then
echo "Strings are equal"
else
echo "Strings are different"
fi
