# What is an OS?
- An OS is a software that connects the hardware and software components to perform operations within the computer.
---
# Why do we need an OS?
- Convenience for users
- Efficient use of hardware
- Resource management
- Program execution
- System security
---
# User convenient / friendly OS
- Provides GUI
- Provides CLI
- Easy interaction with systems
---
# OS resources
- Processor(CPU)
- Main Memory(RAM)
- Secondary Memory(HDD/SSD)
- Input Devices
- Output Devices
## RAM vs ROM
![[Difference-Between-RAM-and-ROM.png]]
## HDD vs SSD
![[hddSSD.png]]

---
# Core functions of an OS
- Control Hardware resources
- Provide services to Applications
## Memory Management
- Allocating memory for programs.
- Deallocate memory after use.
- Tracking memory use.
### Key Functions
- Keeps track of which memory locations are free and which are currently occupied.
- Allocate free memory to a process when needed.
- Protect one process's memory from another.
- Supports virtual memory(Using secondary memory as replacement RAM)
	Ex: SWAP memory
![[Memory-Hierarchy-Design-768.png]]
![[process_swapping.jpg]]
## Device Management
- Controls all I/O devices
- OS communicate with devices using device drivers
### Key Functions
- Allocate devices to processes
- Manage device drivers
- Handling buffering, caching and spooling
- Resolve device conflicts 
## Process Management
- Process Management handles;
	CPU allocation to processes
	Process execution and termination
	Scheduling of tasks
### Key Functions
- Create or delete processes
- Schedule processes using algorithms
- Perform context switching
- Support multitasking
	Ex: 
### 5 Stages of Process Management
#### 1. Start
#### 2. Ready
#### 3. Running
#### 4. Wait
#### 5. Terminate
![[processManStages.jpg]]
## File Management
- Organize and control storage on disks
- Files are logical units of information stored permanently
- Creation and deletion of files
- Directory management
- File access permissions
- Read/Write/Update Operations
### 3 File management software
- File naming
- Batch document scanning
- Folder organization
- Robust reporting
- Quick searching
- Network/cloud file sharing
- Administrative tools
## Security Management
- Security protects system resources from;
	1. Unauthorized access
	2. Malicious attacks
	3. Accidental damage
- Essential for multi-user systems
- User authentication(username & password)
- Authentication and access control
- Data protection and encryption
- Auditing and logging
## Error detecting and error handling
- Errors occur due to;
	1. Hardware failures
	2. Software bugs
	3. User mistakes
- OS must ensure system stability
- Detect CPU, memory, I/O errors
- Logs error details
- Take corrective action
## Co-ordination between Users, Software and Hardware
- OS as a coordinator
- OS acts as an intermediary between;
	1. Users
	2. Application software
	3. Hardware
## Job accounting / scheduling
- Job accounting tracks;
	1. Resource usage by user and processes
	2. CPU time, memory usage, I/O operations
- Important for **System Monitoring and billing**.
- Maintain logs of resource usage
- Helps in performance analysis
- Support fair resource allocation
- Useful in multi-user
## Context Switching