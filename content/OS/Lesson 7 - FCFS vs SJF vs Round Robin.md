# Question 1 - Arrival time Zero

| **Process** | **Burst Time** |
| ------- | ---------- |
| P1      | 5          |
| P2      | 3          |
| P3      | 4          |
## 1. FCFS
![[Q1FCFS.png]]
- Completion time = 12
- Turnaround time 
	1. p1 = 5-0 = 5
	2. p2 = 8-0 = 8
	3. p3 = 12-0 = 12
- Wait time
	1. p1 = 5-5 = 0
	2. p2 = 8-3 = 5
	3. p3 = 12 - 4 = 8
- Average wait time = 13/3 = 4.33
## 2. SJF
![[Q1SJF.png]]
- Execution order = p2,p3,p1
- completion time = 12
- Turnaround time
	1. p1 = 12-0 = 12
	2. p2 = 3-0 = 3
	3. p3 = 7-0 = 7
- Wait time
	1. p1 = 7-0 = 7
	2. p2 = 0-0 = 0
	3. p3 = 3-0 = 3
- Average wait time = 10/3 = 3.33
## 3. Round Robin
![[Q1RR.png]]
- Turnaround time
	1. p1 = 11-0 = 11
	2. p2 = 6-0 = 6
	3. p3 = 12-0 = 12
- Wait time
	1. p1 = 11-5 = 6
	2. p2 = 6-3 = 3
	3. p3 = 12-4 = 8
- Average wait time = 17/3 = 5.67
## Comparison

|                       | **FCFS** | **SJF** | **Round Robin** |
| --------------------- | -------- | ------- | --------------- |
| **Average wait time** | 4.33     | 3.33    | 5.67            |
- *SJF* provides the *lowest average wait time* while *Round Robin* has the *longest wait time*.
# Question 2 - With Arrival time

| **Process** | **AT** | **BT** |
| ----------- | ------ | ------ |
| P1          | 0      | 5      |
| P2          | 1      | 3      |
| P3          | 2      | 4      |
##  1. FCFS
![[Q1FCFS.png]]
- Turnaround time
	1. p1 = 5-0 = 5
	2. p2 = 8-1 = 7
	3. p3 = 12-2 = 10
- Wait time
	1. p1 = 5-5 = 0
	2. p2 = 7-3 = 4
	3. p3 = 10-4 = 6
- Average wait time = 10/3 = 3.33
## 2. SJF 
### SJF non - preempt
![[Q1FCFS.png]]
- Turnaround time
	1. p1 = 5-0 = 5
	2. p2 = 8-1 = 7
	3. p3 = 12-2 = 10
- Wait time
	1. p1 = 5-5 = 0
	2. p2 = 7-3 = 4
	3. p3 = 10-4 = 6
- Average wait time = 10/3 = 3.33
### SJF Preempt
![[Q2SJPpreempt.png]]
- Turnaround time
	1. p1 = 8-0 = 8
	2. p2 = 4-1 = 3
	3. p3 = 12-2 = 10
- Wait time
	1. p1 = 8-5 = 3
	2. p2 = 3-3 = 0
	3. p3 = 10-4 = 6
- Average wait time = 9/3 = 3
## 3. Round Robin
![[Q1RR.png]]
- Turnaround time
	1. p1 = 11-0 = 11
	2. p2 = 6-1 = 5
	3. p3 = 12-2 = 10
- Wait time
	1. p1 = 11-5 = 6
	2. p2 = 5-3 = 2
	3. p3 = 10-4 = 6
- Average wait time = 14/3 = 4.66
## Comparison

|                       | **FCFS** | **SJF non-preempt** | **SJF Preempt** | **Round Robin** |
| --------------------- | -------- | ------------------- | --------------- | --------------- |
| **Average wait time** | 3.33     | 3.33                | 3               | 4.66            |
- *SJF preempt* provides the *lowest average wait time* while *Round Robin* has the *longest wait time*.