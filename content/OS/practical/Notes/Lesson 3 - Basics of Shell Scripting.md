## Comments in bash scripting
- Comments start with a `#` in bash scripting. This means that any line that begins with a `#` is a comment and will be ignored by the interpreter.

- Comments are very helpful in documenting the code, and it is a good practice to add them to help others understand the code.

- These are examples of comments:

```zsh
# This is an example comment
# Both of these lines will be ignored by the interpreter
```

## Variables and data types in Bash

- Variables let you store data. You can use variables to read, access, and manipulate data throughout your script.

- ==There are no data types in Bash==. In Bash, a variable is capable of storing numeric values, individual characters, or strings of characters.

- In Bash, you can use and set the variable values in the following ways:

1. Assign the value directly:

```bash
food=pizza
```

>[!warning]
>Bash is extremely sensitive to white spaces. In bash, assigning a variable is done using the syntax variable=value. Writing it as variable = value creates an error
>~~~zsh
>┌─[kaveesh@fedora] - [~/Documents/University/University notes/2nd Year/4th semester/Obsidian/FIS smester 4/OS/practical/Notes/Scripts] - [Sat Jun 27, 12:51]
└─[$] <> food = pizza
zsh: food: command not found... 
> ~~~
> 


2. Assign the value based on the output obtained from a program or command, using command substitution. Note that `$` is required to access an existing variable's value.

```bash
favourite_food=$food
```

To access the variable value, append `$` to the variable name.

~~~zsh
┌─[kaveesh@fedora] - [~/Documents/University/University notes/2nd Year/4th semester/Obsidian/FIS smester 4/OS/practical/Notes/Scripts] - [Sat Jun 27, 13:21]
└─[$] <> favourite_food=$food
┌─[kaveesh@fedora] - [~/Documents/University/University notes/2nd Year/4th semester/Obsidian/FIS smester 4/OS/practical/Notes/Scripts] - [Sat Jun 27, 13:21]
└─[$] <> echo $favourite_food
pizza
~~~
## Variable naming conventions

- In Bash scripting, the following are the variable naming conventions:

1. Variable names should start with a letter or an underscore (`_`).
2. Variable names can contain letters, numbers, and underscores (`_`).
3. Variable names are case-sensitive.
4. Variable names should not contain spaces or special characters.
5. Use descriptive names that reflect the purpose of the variable.
6. Avoid using reserved keywords, such as `if`, `then`, `else`, `fi`, and so on as variable names.

- Here are some examples of valid variable names in Bash:

```bash
name
count
_var
myVar
MY_VAR
```

- And here are some examples of invalid variable names:

```bash
2ndvar (variable name starts with a number)
my var (variable name contains a space)
my-var (variable name contains a hyphen)
```

Following these naming conventions helps make Bash scripts more readable and easier to maintain.

## Global vs. Local variables
- In Bash scripting, a ==global variable== is a variable that ==can== be used anywhere inside the script. A ==local variable== will ==only be used within the function that it is declared in==. Check out the example below where we declare both a global variable and local variable.

```bash
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

```

## Executing shell commands with bash

- The best way to execute a separate shell command inside of a Bash script is by creating a new subshell through the `$( )` syntax. Check the example below where we echo the result of running the `whoami` command.

```bash
#!/bin/bash
# use a subshell $() to execute shell command
echo $(whoami)
# executing bash command without subshell
echo whoami
```

- Notice that in the final line of our script, we do not execute the `whoami` command within a subshell, therefore the text is taken literally and output as such.
```bash
┌─[kaveesh@fedora] - [~/Documents/University/University notes/2nd Year/4th semester/Obsidian/FIS smester 4/OS/practical/Notes/Scripts] - [Sat Jun 27, 13:38]
└─[$] <> ./subshell.sh
kaveesh
whoami
```

## Arrays – Bash script tutorial

- Bash is capable of storing values in arrays. Check the sections below for two different examples.
### Declare simple bash array
This example declares an array with four elements.
```zsh
#!/bin/bash
#Declare array with 4 elements
ARRAY=( 'Debian Linux' 'Redhat Linux' Ubuntu Linux )
# get number of elements in the array
ELEMENTS=${#ARRAY[@]}

# echo each element in array 
# for loop
for (( i=0;i<$ELEMENTS;i++)); do
    echo ${ARRAY[${i}]}
done 
```
## Conditional statements (if/else)
Expressions that produce a boolean result, either true or false, are called conditions. There are several ways to evaluate conditions, including `if`, `if-else`, `if-elif-else`, and nested conditionals.

**Syntax**:

```bash
if [[ condition ]];
then
    statement
elif [[ condition ]]; then
    statement 
else
    do this by default
fi
```

We can use logical operators such as AND `-a` and OR `-o` to make comparisons that have more significance.

```bash
if [ $a -gt 60 -a $b -lt 100 ]
```

Ex:
```bash
#!/bin/bash

echo "Please enter a number: "
read num

if [ $num -gt 0 ]; then
  echo "$num is positive"
elif [ $num -lt 0 ]; then
  echo "$num is negative"
else
  echo "$num is zero"
fi
```

```bash
 ./ifelse.sh
Please enter a number:
10
10 is positive
```

### Nested if/else
- It is possible to place an `if` statement inside yet another `if` statement. This is called nesting. Using nested if statements, scripts can get a bit complex depending on how many `if` statements deep it is.
```zsh
#!/bin/bash
 
# Declare variable choice and assign value 4
choice=4
# Print to stdout
 echo "1. Bash"
 echo "2. Scripting"
 echo "3. Tutorial"
 echo -n "Please choose a word [1,2 or 3]? "
# Loop while the variable choice is equal 4
# bash while loop
while [ $choice -eq 4 ]; do
 
# read user input
read choice
# bash nested if/else
if [ $choice -eq 1 ] ; then
 
        echo "You have chosen word: Bash"

else                   

        if [ $choice -eq 2 ] ; then
                 echo "You have chosen word: Scripting"
        else
         
                if [ $choice -eq 3 ] ; then
                        echo "You have chosen word: Tutorial"
                else
                        echo "Please make a choice between 1-3 !"
                        echo "1. Bash"
                        echo "2. Scripting"
                        echo "3. Tutorial"
                        echo -n "Please choose a word [1,2 or 3]? "
                        choice=4
                fi   
        fi
fi
done
```
## Taking User Input
- Bash uses the read command to accept input from the user.
**Example: Reading Input and Handling Files**

```zsh
#!/bin/bash

echo "Enter filename"
read filename

if [ -e "$filename" ]
then
    echo "$filename exists in the directory"
    cat "$filename"
else
    touch "$filename"
    echo "File created"
fi

```

- **echo "Enter filename":** Displays a prompt
- **read filename:** Stores user input in variable filename
- ****-e:**** Checks if the file exists
- **cat "$filename":** Displays file content
- **touch "$filename":** create/write file
- ****>:**** Redirects standard output (stdout) to a file
## Bash Comparisons
- Bash can compare two or more values, either integers or strings, to determine if they are equal to each other, or one is greater than the other, etc.
### Numeric Comparison Operators

Numeric comparisons evaluate integer values.

- ****-eq:**** Equal to
- ****-ne:**** Not equal to
- ****-gt:**** Greater than
- ****-ge:**** Greater than or equal
- ****-lt:**** Less than
- ****-le:**** Less than or equal

```bash
#!/bin/bash  
  
num=15  
  
if [ "$num" -eq 10 ]; then  
    echo "Numbers are equal"  
else  
    echo "Numbers are not Equal"  
fi
```
### String Comparison Operators

- String comparisons are used to compare text values.

- `==`:True if both strings are equal
- `!=`: True if strings are not equal
- `n`: True if the string is not empty
- `-z`: True if the string is empty

**Example: String Comparison**
```bash
#!/bin/bash  
  
name="Geeks"  
  
if [ "$name" == "Geeks" ]; then  
    echo "Strings match"  
else  
    echo "Strings do not match"  
fi
```

