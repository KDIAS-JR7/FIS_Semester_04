# By Question number
## Q1)
*The Child process must instantly print its own Process ID and its parent's Process ID using the format:
[Child] My PID is X, and my Parent's PID is Y.*
~~~c
printf("[Child] My PID is %d, and my Parent's PID is %d.\n", getpid(), getppid());
~~~
## Q2)
*The child process must then simulate a slow data-transmission delay by suspending its execution for
exactly 4 seconds. After waking up, it must print [Child] Data transmission finished. Exiting.*
~~~c
sleep(4);
~~~
## Q3)
*The Parent process must immediately print its own Process ID using the format: [Parent] Monitoring
Active. PID: X.*
~~~c
printf(" [Parent] Monitoring. Active. PID: %d.\n", getpid());
~~~
## Q4)
*The parent must not run ahead; it must explicitly block and pause execution until the child process
finishes its execution to prevent creating a Zombie process.*
~~~c
printf(" [Parent] Monitoring. Active. PID: %d.\n", getpid());

wait(NULL);
~~~
## Q5)
*Once the parent detects the child has exited, it should print [Parent] Child process reaped successfully.
Application exiting.*
~~~c
printf(" [Parent] Child process reaped successfully. Application exiting.\n");
~~~

# Complete Program
~~~c
#include<stdio.h>

#include<unistd.h>

#include<sys/wait.h>

int main() {

pid_t pid = fork();

if (pid == 0) {

printf("[Child] My PID is %d, and my Parent's PID is %d.\n", getpid(), getppid());

sleep(4);

printf(" [Child] Data transmission finished. Exiting.\n");

}

else {

printf(" [Parent] Monitoring. Active. PID: %d.\n", getpid());

wait(NULL);

printf(" [Parent] Child process reaped successfully. Application exiting.\n");

}

return 0;

}
~~~
![[Pasted image 20260609154053.png]]

# Compilation
~~~bash
┌─[kaveesh@fedora] - [~/Documents/University/University notes/2nd Year/4th semester/Obsidian/FIS smester 4/OS/practical] - [Tue Jun 09, 15:37]  
└─[$] <> gcc group1.c -o group_1
~~~
# Output 
![[Pasted image 20260609154832.png]]
~~~bash
./group_1  
[Parent] Monitoring. Active. PID: 11660.  
[Child] My PID is 11661, and my Parent's PID is 11660.  
[Child] Data transmission finished. Exiting.  
[Parent] Child process reaped successfully. Application exiting.
~~~

