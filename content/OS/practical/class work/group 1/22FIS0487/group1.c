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
