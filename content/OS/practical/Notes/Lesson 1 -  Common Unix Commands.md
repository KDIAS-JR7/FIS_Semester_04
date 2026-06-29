# Common Unix Commands
- You can enter any command after the `$` sign and see the output on the terminal.
- Generally, commands follow this syntax:

```
command [OPTIONS] arguments
```
## PS
- You can determine your shell type using the `ps` command
~~~bash
┌─[kaveesh@fedora] - [~/Documents/University/University notes/2nd Year/4th semester/Obsidian/FIS smester 4/OS/practical/Notes/Scripts] - [Sat Jun 27, 10:22]
└─[$] <> ps
    PID TTY          TIME CMD
  21005 pts/2    00:00:00 zsh
  21078 pts/2    00:00:00 ps
~~~
- As the command output shows, I am currently using z shell. For `bash` shell users the output will be bash.
## date
- `date`: Displays the current date
~~~bash
┌─[kaveesh@fedora] - [~/Documents/University/University notes/2nd Year/4th semester/Obsidian/FIS smester 4/OS/practical/Notes/Scripts] - [Sat Jun 27, 10:26]
└─[$] <> date
Sat Jun 27 10:30:36 AM +0530 2026
~~~
## pwd
- `pwd`: Displays the present working directory.
~~~zsh
  ┌─[kaveesh@fedora] - [~/Documents/University/University notes/2nd Year/4th semester/Obsidian/FIS smester 4/OS/practical/Notes/Scripts] - [Sat Jun 27, 10:30]
└─[$] <> pwd
/home/kaveesh/Documents/University/University notes/2nd Year/4th semester/Obsidian/FIS smester 4/OS/practical/Notes/Scripts
~~~
## Touch
- `touch` allows us to create files 
~~~zsh
┌─[kaveesh@fedora] - [~/Documents/University/University notes/2nd Year/4th semester/Obsidian/FIS smester 4/OS/practical/Notes/Scripts] - [Sat Jun 27, 10:32]
└─[$] <> touch file1.txt file2.txt file3.txt
~~~
## ls
- `ls`: Lists the contents of the current directory.
~~~zsh
─[kaveesh@fedora] - [~/Documents/University/University notes/2nd Year/4th semester/Obsidian/FIS smester 4/OS/practical/Notes/Scripts] - [Sat Jun 27, 10:33]
└─[$] <> ls
file1.txt  file2.txt  file3.txt
~~~

- ls can be extended further
### ls -l
- `ls -l` extends the ls command to show more details( use a long listing format)
~~~zsh
 ls -l
total 0
-rw-r--r--. 1 kaveesh kaveesh 0 Jun 27 10:33 file1.txt
-rw-r--r--. 1 kaveesh kaveesh 0 Jun 27 10:33 file2.txt
-rw-r--r--. 1 kaveesh kaveesh 0 Jun 27 10:33 file3.txt
~~~
### ls -a
- `ls -a` do not ignore entries starting with `.` 
- Useful to look at hidden files as hidden files start with `.`
~~~zsh
┌─[kaveesh@fedora] - [~/Documents/University/University notes/2nd Year/4th semester/Obsidian/FIS smester 4/OS/practical/Notes/Scripts] - [Sat Jun 27, 10:35]
└─[$] <> ls -a
.  ..  file1.txt  file2.txt  file3.txt
~~~

### ls -la
- A combination of -l and -a. This allows us to use long listing format while also showing entries starting with `.`
~~~zsh
┌─[kaveesh@fedora] - [~/Documents/University/University notes/2nd Year/4th semester/Obsidian/FIS smester 4/OS/practical/Notes/Scripts] - [Sat Jun 27, 10:35]
└─[$] <> ls -la
total 0
drwxr-xr-x. 1 kaveesh kaveesh 54 Jun 27 10:33 .
drwxr-xr-x. 1 kaveesh kaveesh 36 Jun 27 10:22 ..
-rw-r--r--. 1 kaveesh kaveesh  0 Jun 27 10:33 file1.txt
-rw-r--r--. 1 kaveesh kaveesh  0 Jun 27 10:33 file2.txt
-rw-r--r--. 1 kaveesh kaveesh  0 Jun 27 10:33 file3.txt
~~~
## echo
- `echo`: Prints a string of text, or value of a variable to the terminal.
~~~zsh
┌─[kaveesh@fedora] - [~/Documents/University/University notes/2nd Year/4th semester/Obsidian/FIS smester 4/OS/practical/Notes/Scripts] - [Sat Jun 27, 10:35]
└─[$] <> echo Never gonna give you up!
Never gonna give you up!
~~~
## man 
- `man` lets us view the manual for any command.
Ex: Here's the manual for ls command
~~~zsh
LS(1)                                                                                    User Commands                                                                                    LS(1)

NAME
       ls - list directory contents

SYNOPSIS
       ls [OPTION]... [FILE]...

DESCRIPTION
       List information about the FILEs (the current directory by default).  Sort entries alphabetically if none of -cftuvSUX nor --sort is specified.

       Mandatory arguments to long options are mandatory for short options too.

       -a, --all
              do not ignore entries starting with .

       -A, --almost-all
              do not list implied . and ..

       --author
              with -l, print the author of each file

       -b, --escape
              print C-style escapes for nongraphic characters

       --block-size=SIZE
              with -l, scale sizes by SIZE when printing them; e.g., '--block-size=M'; see SIZE format below

       -B, --ignore-backups
              do not list implied entries ending with ~

       -c     with -lt: sort by, and show, ctime (time of last change of file status information); with -l: show ctime and sort by name; otherwise: sort by ctime, newest first

       -C     list entries by columns

       --color[=WHEN]
 Manual page ls(1) line 1 (press h for help or q to quit)
~~~

## pwd
- `pwd` is used to print the current directory.
~~~zsh
┌─[kaveesh@fedora] - [~/Documents/University/University notes/2nd Year/4th semester/Obsidian/FIS smester 4/OS/practical/Notes/Scripts] - [Sat Jun 27, 10:49]
└─[$] <> pwd
/home/kaveesh/Documents/University/University notes/2nd Year/4th semester/Obsidian/FIS smester 4/OS/practical/Notes/Scripts
~~~
## cd

- `cd` is used to change into another directory
~~~zsh
┌─[kaveesh@fedora] - [~/Documents/University/University notes/2nd Year/4th semester/Obsidian/FIS smester 4/OS/practical/Notes/Scripts] - [Sat Jun 27, 10:49]
└─[$] <> pwd
/home/kaveesh/Documents/University/University notes/2nd Year/4th semester/Obsidian/FIS smester 4/OS/practical/Notes/Scripts
┌─[kaveesh@fedora] - [~/Documents/University/University notes/2nd Year/4th semester/Obsidian/FIS smester 4/OS/practical/Notes/Scripts] - [Sat Jun 27, 11:54]
└─[$] <> cd ..
┌─[kaveesh@fedora] - [~/Documents/University/University notes/2nd Year/4th semester/Obsidian/FIS smester 4/OS/practical/Notes] - [Sat Jun 27, 11:55]
└─[$] <> pwd
/home/kaveesh/Documents/University/University notes/2nd Year/4th semester/Obsidian/FIS smester 4/OS/practical/[[notes]]
~~~
- `..` is used to go to the previous directory.
- Directly typing `cd` will take you to the home directory
~~~zsh
┌─[kaveesh@fedora] - [~/Documents/University/University notes/2nd Year/4th semester/Obsidian/FIS smester 4/OS/practical/Notes/Scripts] - [Sat Jun 27, 11:56]
└─[$] <> pwd
/home/kaveesh/Documents/University/University notes/2nd Year/4th semester/Obsidian/FIS smester 4/OS/practical/Notes/Scripts
┌─[kaveesh@fedora] - [~/Documents/University/University notes/2nd Year/4th semester/Obsidian/FIS smester 4/OS/practical/Notes/Scripts] - [Sat Jun 27, 11:56]
└─[$] <> cd
┌─[kaveesh@fedora] - [~] - [Sat Jun 27, 11:57]
└─[$] <> pwd
/home/kaveesh
~~~

>[!tip]
>The `~` sign is used to denote that your're currently in the `home` directory
## su and sudo
- `su` is used to change into the `root` user. However, in most modern Linux systems, it is advised to disable the root user, and to use `sudo` instead. The root user has absolute control over the entire system and should root be compromised, the entire system will be compromised along with it.
~~~zsh
┌─[kaveesh@fedora] - [~/Documents/University/University notes/2nd Year/4th semester/Obsidian/FIS smester 4/OS/practical/Notes/Scripts] - [Sat Jun 27, 10:37]
└─[$] <> su
Password:
su: Authentication failure
~~~
- `sudo` or `superuser do` allows us to temporarily elevate our user into root status without needing to have a permanent root user.
>`sudo`  allows  a  permitted user to execute a command as the superuser or another user, as specified by the security policy.  The invoking user's real (not effective) user-ID is used to determine the user name with which to query the security policy. 

