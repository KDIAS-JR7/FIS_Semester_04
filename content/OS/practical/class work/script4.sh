#!/bin/bash
read -p "Enter your name: " name
echo "Your name is: "$name
read -s -p "Enter your password:" Password
read -p "Your age:" age
if [ "$age" -ge 18 ]; then
echo "You are an Adult"
else
echo "You are a child"
