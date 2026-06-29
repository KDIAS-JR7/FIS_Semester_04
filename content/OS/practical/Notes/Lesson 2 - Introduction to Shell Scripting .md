- By naming convention, bash scripts end with `.sh`.
## Adding the Shebang
- Bash scripts start with a shebang. Shebang is a combination of bash # and bang ! followed by the bash shell path. This is the first line of the script. Shebang tells the shell to execute it via bash shell. Shebang is simply an absolute path to the bash interpreter.
- Below is an example of the shebang statement.
~~~zsh
#!/bin/bash
~~~
- You can find your bash shell path (which may vary from the above) using the command:
~~~zsh
which bash
~~~
Ex:
~~~zsh
┌─[kaveesh@fedora] - [~/Documents/University/University notes/2nd Year/4th semester/Obsidian/FIS smester 4/OS/practical/Notes/Scripts] - [Sat Jun 27, 12:12]
└─[$] <> which bash
/usr/bin/bash
~~~

- Or for `zsh`,
~~~zsh
┌─[kaveesh@fedora] - [~/Documents/University/University notes/2nd Year/4th semester/Obsidian/FIS smester 4/OS/practical/Notes/Scripts] - [Sat Jun 27, 12:12]
└─[$] <> which zsh
/usr/bin/zsh
~~~
## Creating a bash script
- You can create bash scripts with any text editor. Two popular cli text editors are `nano` and `vim`.
~~~zsh
nano script1.sh
~~~

~~~zsh
#!/bin/bash
echo "Today is " `date`

echo -e "\nenter the path to directory"
read the_path

echo -e "\n you path has the following files and folders: "
ls -l $the_path

~~~

- Line #1: The shebang (`#!/bin/bash`) points toward the bash shell path.
- Line #2: The `echo` command is displaying the current date and time on the terminal. Note that the `date` is in backticks.
- Line #4: We want the user to enter a valid path.
- Line #5: The `read` command reads the input and stores it in the variable `the_path`.
- line #8: The `ls` command takes the variable with the stored path and displays the current files and folders.

>[!note]
>In `nano`, use `ctrl+o` to write into the file and `ctrl+x` to exit out of `nano`
## Executing the bash script
- To make the script executable, assign execution rights to your user using this command:
~~~zsh
chmod u+x script1.sh
~~~

>[!tip]
>Use `u+x` to make the script only executable for your own user. `chmod +x` without `u` makes it executable for all users.

You can run the script using any of the mentioned methods:

- `sh script1.sh`
- `bash script1.sh`
- `./script1.sh`

~~~zsh
 ./script1.sh
Today is  Sat Jun 27 12:51:38 PM +0530 2026

enter the path to directory
/home/kaveesh/Documents

 you path has the following files and folders:
total 16092
drwxr-xr-x. 1 kaveesh kaveesh     418 May 25 20:19  AnsiblePlaybooks
drwx------. 1 kaveesh kaveesh       8 Dec 19  2025  AnyDesk
drwxr-xr-x. 1 kaveesh kaveesh    1278 Feb 23 18:44  CCNA
drwxr-xr-x. 1 kaveesh kaveesh      62 Dec 19  2025  CCNP
drwxr-xr-x. 1 kaveesh kaveesh     716 Dec 19  2025  cirtificates
drwxr-xr-x. 1 kaveesh kaveesh     528 Feb 25 17:36  code
-rw-r--r--. 1 kaveesh kaveesh  800272 Dec 19  2025  easy-backup.json
drwxr-xr-x. 1 kaveesh kaveesh      16 Mar 15 09:48  GeminiAPI
-rw-r--r--. 1 kaveesh kaveesh     206 Dec 19  2025  github-recovery-codes.txt
drwxr-xr-x. 1 kaveesh kaveesh      76 Jun  5 22:14 'Git Portfolio'
drwxr-xr-x. 1 kaveesh kaveesh      88 May 25 21:06  GNS3-Topology-JR7
drwxr-xr-x. 1 kaveesh kaveesh     470 Mar 30 22:11 'Hugging face'
-rw-r--r--. 1 kaveesh kaveesh    9962 Apr 10 16:58  hyprlandconfig
-rw-r--r--. 1 kaveesh kaveesh 2705696 Dec 27 20:30  import.json
drwxr-xr-x. 1 kaveesh kaveesh     132 Dec 19  2025  invoice
-rw-r--r--. 1 kaveesh kaveesh      81 Dec 19  2025 'jellyfin admin'
drwxr-xr-x. 1 kaveesh kaveesh     166 May 26 07:47  network-automation-showcase
-rw-r--r--. 1 kaveesh kaveesh   15929 May 12 20:35 'nightTab backup - 2026.05.12 - 20 35 47.json'
-rw-r--r--. 1 kaveesh kaveesh   15929 Jun 19 09:16 'nightTab backup - 2026.06.19 - 09 16 47.json'
drwxr-xr-x. 1 kaveesh kaveesh      18 May 31 22:25  Nmap
drwxr-xr-x. 1 kaveesh kaveesh      16 May 19 20:44  openvpn
-rw-r--r--. 1 kaveesh kaveesh    2473 Dec 19  2025  p1.m3u8
-rw-r--r--. 1 kaveesh kaveesh    6011 Dec 19  2025  p1.pls
drwxr-xr-x. 1 kaveesh kaveesh     600 Apr  8 19:02  results
-rw-r--r--. 1 kaveesh kaveesh 9923675 Apr  8 19:02  results.zip
-rw-r--r--. 1 kaveesh kaveesh     125 May 30 11:34  sabaraRename
-rw-r--r--. 1 kaveesh kaveesh 2970973 May 12 21:11  stylus-2026-05-12-21-11.json
drwxr-xr-x. 1 kaveesh kaveesh     304 Feb  6 10:56  University
drwxr-xr-x. 1 kaveesh kaveesh     130 Jan 13 20:24  Zoom
~~~

