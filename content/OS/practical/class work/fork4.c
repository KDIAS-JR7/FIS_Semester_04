#include<stdio.h>
#include<unistd.h>
#include<sys/wait.h>

int main() {
    pid_t pid = fork(); // 1. The program splits

    if (pid == 0) {
        // 2. We are inside the Child Process
        printf("Child: I am about to transform into 'ip a' instead!\n");
        
        //execlp("ls", "ls", "-l", NULL); // 3. The Child shape-shifts!
        // first ls is the file to execute, second ls is argv[0], and "-l" is an argument to ls. NULL marks the end of arguments.
        // second ls is just a convention to indicate the name of the program being executed, it can be anything (ex:Banana)but usually matches the executable name.
        execlp("ip","Bombastic_Side_Eye","a",NULL);

        // This line will NEVER run because the child turned into 'ls'
        printf("Child: If you see this, something went wrong.\n"); 
    } 
    else {
        // 4. We are inside the Parent Process
        printf("Parent: I am waiting for my child to finish listing files...\n");
        
        wait(NULL); // 5. Parent waits until the child (now running 'ls') is done
        
        printf("Parent: My child finished its job. I am still alive!\n");
    }
    return 0;
}