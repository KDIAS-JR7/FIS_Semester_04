#! /bin/bash
for ((i=1;i<=4;i++))
    do
	for ((j=1;j<=4;j++))
        do
		if (( i==1 || i==4 || j==1 || j==4 ))
            then
			echo -n "+ "
		else
			echo -n "  "
		fi
	done
	echo
done