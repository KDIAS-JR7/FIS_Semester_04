#!/bin/bash
STR1="hello"
STR2="world"

if [[ "$STR1" == "$STR2" ]]
	 then
	    echo "Strings are equal"
else
    echo "Strings are not equal"
fi
