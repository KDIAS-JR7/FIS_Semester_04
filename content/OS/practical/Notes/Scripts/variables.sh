#!/bin/bash
# Define bash global variable
# This variable is global and can be used anywhere in this bash script
VAR="global variable"

function bash {
# Define bash local variable
# This variable is local to bash function only
local VAR="local variable"
echo "We are now inside a function. Therefore: "$VAR
}

echo "This is the global vriable: "$VAR
bash
# Note the bash global variable did not change
# "local" is bash reserved word
echo "We're back outside the function:" $VAR
