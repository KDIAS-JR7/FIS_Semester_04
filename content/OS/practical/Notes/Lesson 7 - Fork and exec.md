The Fork system call is used for creating a new process in Linux, and Unix systems, which is called the _**child process**_, which runs concurrently with the process that makes the fork() call (parent process). After a new child process is created, both processes will execute the next instruction following the fork() system call.

The child process uses the same pc(program counter), same CPU registers, and same open files which use in the parent process. It takes no parameters and returns an integer value.

Below are different values returned by **fork().**

- **Negative Value**: The creation of a child process was unsuccessful, then it returns -1.
- **Zero**: Returned to the newly created child process.
- **Positive value**: Returned to parent or caller. The value contains the process ID of the newly created child process.

### **fork() vs exec()**

The fork system call creates a new process. The new process created by fork() is a copy of the current process except for the returned value. On the other hand, the exec() system call replaces the current process with a new program.

## Example 1

```c
#include<stdio.h>
#include<unistd.h>

int main()
{
    printf("Before fork \n");
    fork();
    printf("After fork \n");
    return 0;
}
```

- `#include<unistd.h>` is used for `for()` functions.
- Once this program executes, a new child process is created, totaling to 2 processes(parent + child).
- Since there's two processes, `After fork` is printed twice.
```bash
./fork_program
Before fork
After fork
After fork
```

>How the execution actually flows in Example 1:
                    [ printf("Before fork"); ]
                               |
                        ---> FORK() <---  (The program splits!)
                       /                \
         PARENT PROCESS                  CHILD PROCESS
               |                               |
    [ printf("After fork"); ]       [ printf("After fork"); ]
               |                               |
          (Terminates)                    (Terminates)
## Example 2

```c
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
    
        wait(NULL);
        printf("Parent: Child terminated \n");
    }
    return 0;
}
```

1. ` pid_t pid = fork();`
	- Here, we're using a special data type `pid_t` to store the pid variable. 
	- fork() creayes a child process, therefore the value stored in pid is 0.

2. ` if(pid < 0){printf("Fork Fail \n");}` 
>[!tip]
>If the child process creation was unsuccessful, the value assigned to pid is -1, which is lower than zero. This check allows us to spot if child process creation failed.

3.  `else if(pid == 0){`
	- Executes for the child process, since if a child was created pid == 0.

2. `printf("C: I am the child = %d\n", getpid());`
	- `getpid()` is used to get the process id of the child process 
3. `sleep(5);`
	- The child sleeps for 5 seconds.
4. ` printf("P: I am the parent. \n My child id is %d\n", pid);`
	- `pid` returns the process id of the child process.
5. `wait(NULL);`
	- The parent waits until the child process completes the 5 second sleep. The `#include<sys/wait.h>` inclusion is needed for this.

>[!note]
>`pid` returns the child process's process id from the parent's perspective
>`getpid` returns the child process's process id  from the child's perspective

>[!note]
>`getpid` returns the process id of the relevant process regardless of the process being parent/child.
>`pid` return the process id of the child process if there's any.
>`getppid` returns the parent process process id from the child process.

- The following code snippet is a modified version of the previous code,
```c
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
```
 - After running this code, we can see those functions is action;
 ```bash
  ./fork_program2
P: I am the parent.
 My child id is 184087
P: My own process id is: 184086
C: I am the child = 184087
C: My parent's process id is = 184086
C: Child completed
Parent: Child terminated
 ```
 - Now, what if we tried to get the child process id of a child that does not have children of it's own?
 ```c
 ---rest of the code---
 printf("C: I am the child = %d\n", getpid());
        printf("C: My parent's process id is = %d\n",getppid());
        //printf("C: I am a child process without child processes of my own. Therefore the my child process's id is: %d\n",pid());
        
        sleep(5);
        printf("C: Child completed \n");
 ---rest of the code---
 ```
- In the **Parent process**, `fork()` returns the actual, real-world Process ID (PID) of the new child so the parent can track it.
- In the **Child process**, `fork()` returns `0`. This `0` does _not_ mean the child has zero children of its own; it is simply a special flag from the operating system that tells the process: _"You are the newly created child."_ 
> [!note]
 If this child process calls `fork()` again later, it can easily create its own children, just like the parent did!

 ```bash
 ./fork_program2
P: I am the parent.
 My child id is 187268
P: My own process id is: 187267
C: I am the child = 187268
C: My parent's process id is = 187267
C: I am a child process without child processes of my own. Therefore my child process's id is: 0
C: Child completed
Parent: Child terminated
 ```

## Example 3
```c
#include<stdio.h>
#include<unistd.h>

int main(){
    printf("Before execution \n");
    execlp("ls", "ls", "-l", NULL);
    printf("Last line");
    return 0;
}
```

- This code snippet uses the exec() function in the form of `execlp`.
- `execlp` follows the following syntax.

>execlp("command/program to change to", "name of the final process", "arguments for the transformed process");

- The name of the process can be anything. However, it is recommended to use the same name as the new program for readability. But you cna indeed make it anything, as we'll see in the final example.
- In line 6, the process changes to ls with the argument -l.
- After the process transformed, it executes ls and terminates.
- Therefore the line 7 `last line` is never executed.
```bash
./fork_program3
Before execution
total 10892
drwxr-xr-x. 1 kaveesh kaveesh      80 Jun 27 10:18  22FIS0487
-rw-r--r--. 1 kaveesh kaveesh 4899709 May 22 15:29 'Assignment 1 (1).pdf'
-rw-r--r--. 1 kaveesh kaveesh     654 May 22 15:20 'Assignment 1.md'
-rw-r--r--. 1 kaveesh kaveesh 4899709 May 22 15:21 'Assignment 1.pdf'
--- aggregated output ----
drwxr-xr-x. 1 kaveesh kaveesh      30 Mar  6 15:37  tempD1
-rw-r--r--. 1 kaveesh kaveesh       0 May  8 13:23 'Untitled 1.md'
-rw-r--r--. 1 kaveesh kaveesh    3542 Mar 15 10:02  Untitled.md
```

## Example 4
- This final program incorporates everything until now.
```c
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

        // This line will NEVER run because the child turned into 'ip'
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
```
- Here, a child process is changing itself to `ip` with the argument `a`. As we can see, its using a very different name for itself as `bombastic_side_eye` , but this is completely acceptable and the program executes correctly.
- We can also see one one thing. After the child completes its execution, it ends. But the parent was just waiting for it. It never ended. SO, it's still alive.
```bash
 ./fork_program4
Parent: I am waiting for my child to finish listing files...
Child: I am about to transform into 'ip a'!
1: lo: <LOOPBACK,UP,LOWER_UP> mtu 65536 qdisc noqueue state UNKNOWN group default qlen 1000
	--- aggregated output ----
2: enp2s0: <BROADCAST,MULTICAST,UP,LOWER_UP> mtu 1500 qdisc fq_codel state UP group default qlen 1000
    --- aggregated output ----
3: wlp3s0: <BROADCAST,MULTICAST,UP,LOWER_UP> mtu 1500 qdisc noqueue state UP group default qlen 1000
    --- aggregated output ----
4: virbr0: <NO-CARRIER,BROADCAST,MULTICAST,UP> mtu 1500 qdisc noqueue state DOWN group default qlen 1000
   --- aggregated output ----
5: tailscale0: <POINTOPOINT,MULTICAST,NOARP,UP,LOWER_UP> mtu 1280 qdisc fq_codel state UNKNOWN group default qlen 500
   --- aggregated output ----
Parent: My child finished its job. I am still alive!
```
