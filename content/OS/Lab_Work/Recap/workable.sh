#!/bin/bash
read -p "Enter your age: " age
if [ $age -ge 18 -a $age -le 60 ]; then
echo "Eligible to work"
elif [ $age -lt 18 ]; then
echo "You are a child"
elif [ $age -gt 60 ]; then
echo "You are a senior citizen."
fi
