
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
