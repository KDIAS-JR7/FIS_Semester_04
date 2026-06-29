# Permission change
> Chmod +/- (r/w/x) fileName

- Chmod command can be used to add/remove permission levels for files and direcctories
- r, w and x can be used to modify read / write and exec permissions
 ![[exec.png]]
- The level of execution is given from left to right as,
	1. user
	2. group
	3. others
- **chmod +x** gives execution permission to all three groups
- Meanwhile **chmod -x** removes exec permission globally.
- Permission can also be changed for a specific user type,
- *chmod g+ example.sh* gives exec permission just for the user.
# Variables
- variables can be defined as **variableName=value
- The variable value can be of any type. This type can be defined using 
	1. single / double quotes for string variables
	2. no quotations for integer
- Ex:*name="jr7"*.  defines the variable name with string value jr7
## Printing variables
- variables 