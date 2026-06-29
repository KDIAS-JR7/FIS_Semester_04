#!/bin/bash

n1=1
n2=2
n3=3

if [ $n1 -gt $n2 ] && [ $n1 -gt $n3 ]; then
    echo "$n1 is the largest"
elif [ $n2 -gt $n1 ] && [ $n2 -gt $n3 ]; then
    echo "$n2 is the largest"
else
    echo "$n3 is the largest"
fi
