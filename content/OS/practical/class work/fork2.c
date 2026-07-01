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
        printf("C: My parent's process id is = %d\n",getppid());
        printf("C: I am a child process without child processes of my own. Therefore  my child process's id is: %d\n",pid);
        
        sleep(5);
        printf("C: Child completed \n");
    }
    else{
        printf("P: I am the parent. \n My child id is %d\n", pid);
        printf("P: My own process id is: %d\n",getpid());
        wait(NULL);
        printf("Parent: Child terminated \n");
    }
    return 0;
}