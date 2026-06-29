#include<stdio.h>
#include<unistd.h>

int main(){
    printf("Before execution \n");
    execlp("ls", "ls", "-l", NULL);
    printf("Last line");
    return 0;
}