#include<stdio.h>
#include<unistd.h>
#include<sys/wait.h>
#include<signal.h>

int main(){
    pid_t pid = fork();

    if(pid < 0){
        printf("Fork Fail \n");
    }
    else if(pid == 0){
        printf("C: I am the child = %d\n", getpid());
        sleep(5);
        printf("C: Child completed \n");
    }
    else{
        printf("P: I am the parent. \n My child id is %d\n", pid);
        // Note: The original had kill(pid, SIGKILL); here, 
        // but it is usually commented out or omitted so the child can actually finish!
        wait(NULL);
        printf("Parent: Child terminated \n");
    }
    return 0;
}