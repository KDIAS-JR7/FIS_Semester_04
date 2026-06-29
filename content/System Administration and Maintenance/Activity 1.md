# System Setup: Infrastructure Choices for a Small Business

When setting up the IT infrastructure for a small company (such as a startup or local office in Colombo), a system administrator must balance **cost, performance, reliability, and scalability**. Instead of buying random hardware, the infrastructure is broken down by operational roles.

---

## 1. Types of Computers the Company Needs

A typical small business requires a mix of client machines (for everyday employee tasks) and server infrastructure (to handle centralized data and network services).

### A. End-User / Client Devices
These are the computers used daily by employees to perform their specific job functions.

* **Standard Office Desktops / Laptops**
    * *Target Audience:* HR, Finance, Operations, and Administrative staff.
    * *Specifications:* Mid-range processors (Intel i5 / AMD Ryzen 5), 8GB–16GB RAM, and fast SSD storage (256GB–512GB). 
    * *Note:* Laptops are highly preferred in regions like Colombo to ensure business continuity during power disruptions, acting as a built-in UPS.
* **High-Performance Workstations**
    * *Target Audience:* Software developers, UI/UX designers, or data analysts if the company scales into technical services.
    * *Specifications:* High-end processors (Intel i7/i9 or Apple M-series chips), 32GB+ RAM, dedicated graphics cards (GPUs), and 1TB+ NVMe SSDs.

### B. Core Server Infrastructure
Even a small company needs centralized systems to manage files, user accounts, and security baselines.

* **Domain Controller (Identity Server)**
    * *Purpose:* Handles user authentication and centralizes access management (e.g., Active Directory or OpenLDAP). It ensures that when an employee logs in, their permissions are validated globally.
* **Network Attached Storage (NAS) / File Server**
    * *Purpose:* Provides a local, centralized repository for company data, collaborative files, and local backups. It prevents data from being scattered across individual employee laptops.
* **Network Infrastructure Devices**
    * While not strictly "computers," these are specialized computing appliances vital to the setup:
        * **Firewall/Router:** (e.g., pfSense device or Cisco router) to secure the office network perimeter.
        * **Managed Network Switch:** To handle wired local area network (LAN) traffic efficiently.

---

> [!TIP]
> **Physical Hardware vs. Virtualization (On-Premises)**
> Instead of buying separate physical server boxes for the Domain Controller, File Server, and Security tools, modern sysadmins use a single, robust physical server running a **Hypervisor** (like VMware ESXi or Proxmox VE). This allows you to split one powerful computer into multiple "Virtual Machines" (VMs), saving space, electricity, and hardware costs.

---

## 2. Infrastructure Checklist 

When deploying this hardware locally, a system administrator must account for environment-specific factors:

| Component                                | Purpose / Requirement                                                      | Why it Matters                                                                            |
| :--------------------------------------- | :------------------------------------------------------------------------- | :---------------------------------------------------------------------------------------- |
| **Uninterruptible Power Supplies (UPS)** | Backup battery power for all servers and critical network switches.        | Protects expensive server hardware from grid power fluctuations and sudden outages.       |
| **Dedicated Cooling (AC)**               | A small, dedicated server closet or rack with continuous cooling.          | High ambient humidity and heat can drastically shorten the lifespan of server components. |
| **Structured Cabling**                   | Cat6 ethernet cables running from a central patch panel to employee desks. | Ensures high-speed, stable local connections free from wireless interference.             |

---
## 2. Operating System Selection & Management

Choosing the right operating systems (OS) dictates how software is deployed, how user accounts are managed, and what the long-term licensing costs will look like. 

### A. Client vs. Server OS Deployment Matrix

For a balanced, cost-effective infrastructure, a **Hybrid approach (Both Windows and Linux)** is often the industry standard.

| Environment | OS Selection | Primary Reason for Choice |
| :--- | :--- | :--- |
| **End-User (Standard)** | **Windows 11 Professional** | High user familiarity, out-of-the-box compatibility with office productivity suites (Microsoft 365), and easy peripheral management (printers, scanners). |
| **End-User (Technical)** | **Linux (Ubuntu/Fedora)** or **macOS** | Preferred if the company employs software developers, as Unix-based environments align better with modern backend development pipelines. |
| **Core Infrastructure** | **Windows Server** | Ideal for running **Active Directory (AD)** to handle centralized user authentication and group policies smoothly across Windows clients. |
| **Application & Web** | **Linux Server (Ubuntu Server / Rocky Linux)** | Open-source (no licensing fees), highly secure, lightweight, and the absolute standard for hosting databases, web applications, and internal tools. |

---

### B. System Administrator Management Strategies

No matter which OS you choose, a sysadmin must manage them efficiently using three core strategies:

1. **Centralized Authentication:** Instead of creating local user accounts on every single computer, the sysadmin links Windows and Linux machines to a central identity provider (like Windows Active Directory or an open-source LDAP server). This allows employees to log into any computer in the office with a single set of credentials.

2. **Automated Patch Management:**
   Operating systems must be kept up to date to protect against security vulnerabilities. Sysadmins use tools like **WSUS (Windows Server Update Services)** or Linux automation scripts to test and push updates to all office computers overnight, ensuring business hours aren't disrupted.

3. **Remote Management & Headless Servers:**
   Production Linux servers do not use a graphical interface (GUI); they are managed entirely via text commands over **SSH (Secure Shell)**. Windows servers are frequently managed remotely using **PowerShell** or Remote Desktop (RDP). This allows the IT team to maintain systems without physically sitting in front of the machine.
---
## 3. User & Access Management

Managing who can log into the network and what files they are allowed to see is a core pillar of system administration. It protects sensitive company data while ensuring employees have the tools they need to do their jobs.

---

### A. Account Provisioning Lifecycle
When an employee joins the small Colombo company, their account must follow a standardized security pipeline:

1. **Request & Verification:** The HR department formally requests an account, providing the employee's official full name, role, and department.
2. **Centralized Creation:** The sysadmin creates a single, unique identity in the central directory (e.g., Active Directory or cloud identity provider). 
    * *Standard Naming Convention:* e.g., `firstinitial.lastname@company.com` (e.g., `j.perera@company.com`).
3. **Role-Based Provisioning:** Instead of assigning permissions individually, the user account is added to a specific **Security Group** based on their department (e.g., `Finance_Dept`, `HR_Team`).
4. **Onboarding & Initial Login:** The user is given a temporary, one-time password and is strictly required to change it immediately upon their very first login.

---

### B. Principal of Least Privilege (PoLP) & Admin Access
A fundamental rule of system administration is the **Principle of Least Privilege (PoLP)**. This states that users should only have the minimum level of access necessary to complete their daily tasks.

* **Who gets Administrator Access?**
    * Only the designated IT/Sysadmin team will have full administrative privileges (e.g., `Domain Admin` or `root` access). 
    * Regular employees (even the CEO) **never** run daily tasks with administrative accounts.
* **Why Control Access?**
    * **Blast Radius Reduction:** If an employee opens a malicious email and downloads ransomware, the virus can only infect files that the user has permission to change. If they lack admin rights, the virus cannot lock down the entire operating system or spread across the network.
    * **Accidental Damage Prevention:** It prevents non-technical staff from accidentally deleting critical system files, altering network configurations, or installing unapproved, insecure software.
    * **Accountability & Auditing:** If a file is modified or deleted, system logs can pinpoint exactly which account performed the action, ensuring clear accountability.

---

### C. Access Control Models
- Sysadmins use structured models to enforce security boundaries across the company's file servers and applications:
> [User Account] ──> Assigned to ──> [Role/Group] ──> Grants ──> [Permissions to Files]
####  1.Role-Based Access Control (RBAC):
Permissions are tied directly to job functions (Roles), not individuals. If an intern in the Finance department leaves and a new one joins, you simply add the new user to the `Finance_Intern` group. They automatically inherit the correct read/write permissions for the expense sheets.  
####  2.Attribute-Based Access Control (ABAC):  
A more advanced model where access is granted based on contextual attributes (e.g., *Time of day*, *IP address/Location*, or *Device compliance*). For example, a sysadmin can configure the system so that the `Finance_Dept` group can only access financial databases if they are logging in from inside the Colombo office network during regular working hours (9:00 AM – 5:00 PM).

---
## 4. Security Plan

A robust security plan establishes a strong defense-in-depth strategy. It ensures that if one layer of security fails, other layers are in place to prevent a total data breach.

---

### A. Data Protection Strategies
Data exists in different states, and a sysadmin must secure it across all of them:

* **Data at Rest (Storage Encryption):**
    * All company laptops and server drives must use full-disk encryption (e.g., **BitLocker** for Windows, **LUKS** for Linux). If an employee’s laptop is physically stolen at a coffee shop in Colombo, the data remains unreadable without the encryption key.
* **Data in Transit (Network Encryption):**
    * Any data moving across networks must be encrypted using secure protocols. 
    * Employees working remotely must connect via a **Virtual Private Network (VPN)** with TLS/AES encryption to access internal office servers. Web traffic must strictly use HTTPS rather than HTTP.

---

### B. Password Rules & Identity Security
Passphrases are the first line of defense against brute-force attacks. Modern industry baselines (aligned with NIST guidelines) focus on complexity and multi-layer verification:

* **Complexity Requirements:** Passwords must be at least 12–14 characters long and include a mix of uppercase letters, lowercase letters, numbers, and special characters. 
* **The Death of Mandatory Expiry:** Modern security standards advise *against* forcing users to change passwords every 90 days unless a breach is suspected. Forcing regular changes often leads to users picking weaker, predictable variations (e.g., `Password2026!` becoming `Password2026?`).
* **Multi-Factor Authentication (MFA):** * **Mandatory Policy:** MFA must be enabled for all corporate accounts (Email, VPN, and Admin portals). Even if an attacker successfully steals or guesses an employee's password, they cannot gain access without the secondary token (e.g., a code from Google Authenticator or a hardware key).

---

### C. Basic Security Measures (The Baseline)
Beyond passwords and encryption, a sysadmin enforces structural security policies to keep the network clean:
>[Internet] ──> [Firewall / Perimeter] ──> [Endpoint Antivirus] ──> [User Education]

1. **Endpoint Protection (EDR/Antivirus):** Every desktop, laptop, and server must run centrally managed endpoint detection and response (EDR) software. This allows the IT team to monitor malware threats across the entire company from a single dashboard. 
2. **Network Perimeter Defense:** Deploying a dedicated firewall to block unapproved incoming traffic from the internet and isolating sensitive corporate networks (like Finance) from guest Wi-Fi networks using **VLANs** (Virtual Local Area Networks).
3. **Software Vulnerability Management:** Regularly scanning local systems for outdated software and unpatched vulnerabilities, ensuring third-party applications (like web browsers and PDF readers) are kept up to date automatically.
---
## 5. Backup & Recovery

Data loss can ruin a small business. Whether it is caused by a hardware failure, ransomware, or a sudden power surge, a system administrator must ensure that data can be restored quickly with minimal disruption to operations.

---

### A. What Data to Back Up?
Not everything needs to be backed up (e.g., operating system files can easily be reinstalled). [cite_start]A sysadmin focuses on critical, irreplaceable corporate data[cite: 38]:

* **Core Business Data:** Financial sheets, accounting records, HR databases, and legal documents.
* **User Data:** Employee project files, shared network folders, and local repository mirrors.
* **System Configurations:** Configuration files for routers, firewalls, and server setup states (Active Directory databases, network configurations).

---

### B. Backup Frequency & Strategy (The 3-2-1 Rule)
To guarantee data survival, sysadmins follow the industry-standard **3-2-1 Backup Strategy**:
* **3:** Keep at least **three (3) copies** of your data (1 primary operational copy, 2 backup copies). 
* **2:** Store the backups on **two (2) different types of media** (e.g., internal server storage and an external Network Attached Storage device). 
* **1:** Keep at least **one (1) backup copy offsite** (e.g., securely uploaded to cloud storage or moved to a separate physical location outside the Colombo office). 
* **Backup Frequency:**  **Incremental Backups (Daily):** Only backs up the files that have changed since the previous day. This saves bandwidth and storage space. 
* **Full Backups (Weekly):** A complete copy of all chosen data is taken once a week (usually over the weekend when network activity is low). 
--- 
### C. Disaster Recovery: What If the System Crashes?
When a critical server crashes, the sysadmin initiates a **Disaster Recovery (DR)** plan based on two core metrics: 
#### 1. Recovery Point Objective (RPO) 
* *Definition:* The maximum acceptable amount of data loss measured in time. *
* *Example:* If your RPO is 24 hours, and your system crashes at 4:00 PM, restoring the backup from 12:00 AM last night is acceptable because you only lost 16 hours of data. 
#### 2. Recovery Time Objective (RTO) 
-  *Definition:* The maximum acceptable downtime before the system must be fully online and operational again. 
- *Example:* If the RTO for the company email server is 2 hours, the IT team must repair or restore the system within that window to avoid disrupting business operations. #### 3. Recovery Action Plan 
- **Isolate the Failure:** Disconnect the crashed server or infected machine from the local network immediately to prevent problems (like malware) from spreading. 
- **Failover / Redundancy:** If using virtualization, spin up a replica Virtual Machine (VM) from the previous night's backup onto a secondary backup host server. 
- **Verify Integrity:** Before opening access back up to employees, test the restored data to ensure it is not corrupted and that permissions remain intact.
---
## 6. Documentation

Documentation is the foundation of institutional knowledge in IT. If a system administrator is unavailable, or if a team scales, clear documentation prevents the company's infrastructure from becoming a mystery.

---

### A. Critical Records a Sysadmin Must Keep
An IT team should document the infrastructure across three distinct layers:

* **Network Topologies and Hardware Inventories:**
    * High-level maps showing how routers, firewalls, and switches connect to each other.
    * An asset management log tracking every physical laptop, desktop, server, and UPS (including serial numbers, purchase dates, and asset tags).
* **Standard Operating Procedures (SOPs):**
    * Step-by-step guides for repeatable tasks. Examples include: *How to onboard a new employee*, *How to provision a Linux server*, or *How to safely shut down the server rack during scheduled power maintenance*.
* **Configuration Records & Credential Vaulting:**
    * Records of IP address allocations (Static IPs vs. DHCP pools), domain name registries, and software licenses.
    * Secure, encrypted password management logs (never stored in plain text) for master administrative accounts and service tokens.

---

### B. Why Documentation is Vital
Good documentation transforms IT from a chaotic, reactive department into a structured, proactive business unit.

* **Minimizing Downtime (The "Bus Factor"):**
    * If the primary system administrator is unavailable or leaves the company, another team member can step in and fix a broken system immediately using the documentation, rather than spending hours reverse-engineering the setup.
* **Consistency and Error Reduction:**
    * Following an explicit SOP ensures that tasks are done exactly the same way every time. This eliminates human error—such as forgetting to apply a critical security setting when setting up a new laptop.
* **Audit and Compliance:**
    * When the company undergoes security audits or applies for certifications (like ISO 27001), documented proof of how user access is managed and how backups are performed is mandatory.
---
## 7. Ethics in System Administration

System administrators hold the "keys to the kingdom." Because they have root and administrative access, they can theoretically bypass security controls to view any file or monitor any network traffic. This immense power requires strict adherence to professional ethical standards.

---

### A. What a System Administrator Should NEVER Do
An ethical sysadmin must maintain clear professional boundaries and must never abuse their elevated privileges:

* **Unauthorized Snooping:** Looking through employees' personal files, emails, chat logs, or browsing histories out of curiosity or personal interest. Accessing data should only ever occur during an official, authorized investigation.
* **Privilege Escalation for Personal Gain:** Altering financial records, changing performance evaluations, or creating hidden "backdoor" admin accounts to maintain access if they leave or are terminated.
* **Information Leaking:** Sharing internal company data, intellectual property, proprietary source code, or upcoming business plans with outside entities or competitors.
* **Sabotage / Retaliation:** Intentionally breaking configurations, disabling backups, or locking out other administrators due to personal or professional disputes with management.

---

### B. Best Practices for Handling Private & Sensitive Data
To protect both the company and the employees, private data must be handled using structured, transparent framework rules:
>[Data Access Request] ──> Requires ──> [Written Approval] ──> Logged by ──> [Audit Trail]

1. **Enforce Two-Man Rules & Clear Approvals:** A sysadmin should never look into an employee's account or data simply because a manager asked them verbally. There must be a formal, written ticket from HR or legal council detailing the business justification before any monitoring or access is granted. 
2. **Establish the Zero-Knowledge Principle:** Whenever possible, systems should be designed so that even the sysadmins cannot see the raw data. For example, password databases should be securely hashed, and sensitive databases (like HR salaries) should be encrypted so that only the HR software can decrypt and display the figures, not the database administrator. 
3. **Maintain Strict Audit Logging:** Every time an administrator account accesses a sensitive server, runs a privileged command, or modifies a security policy, that action must be automatically recorded in an immutable, tamper-proof central log server. This ensures accountability and proves that the IT team is operating ethically.
---
## 8. Automation 

Automation is the practice of replacing manual, repetitive tasks with scripts or software tools. Instead of managing computers one by one, a sysadmin writes instructions once and lets the system execute them automatically.

---

### A. What Tasks Can Be Automated?
Any task that is predictable, repetitive, and time-consuming is a prime candidate for automation:

* **User Management (Onboarding/Offboarding):**
    * Instead of clicking through menus to create email addresses, set up folders, and assign security groups for a new employee, a script can read an employee's name from an HR file and provision everything in seconds.
* **System Patching and Software Updates:**
    * Scheduling automated cron jobs (in Linux) or Scheduled Tasks (in Windows) to download and install security updates at 2:00 AM every Tuesday so the business is never interrupted.
* **Log Rotation and System Cleanups:**
    * Automatically deleting temporary files or archiving old system log files to an external storage drive when the main server drive gets more than 85% full.
* **Infrastructure Provisioning (Configuration Management):**
    * Using tools like **Ansible** or **PowerShell** to configure settings across 20 new office computers simultaneously, rather than sitting at each machine individually.

---

### B. Why Automation is Useful
Automation shifts a sysadmin's role from "putting out fires" to scaling the business efficiently.

* **Elimination of Human Error:**
    * Even the best IT technician can miss a checkbox or misspell a username when setting up a computer manually. A script executes the exact same steps perfectly, every single time.
* **Massive Time and Resource Savings:**
    * Setting up 50 user accounts manually could take an entire workday. An automated script can complete the same task in less than two minutes, freeing up the IT team to focus on bigger projects.
* **Consistency and Standardization:**
    * It ensures every server and workstation in the company matches the exact same security configuration baseline, making the environment predictable and much easier to troubleshoot.
---
## 9. System Monitoring

Monitoring is the "nervous system" of IT infrastructure. It ensures that a system administrator is alerted to performance issues, hardware failures, or network bottlenecks *before* employees or customers notice a disruption.

---

### A. How We Check If Systems Are Working
Sysadmins use centralized software tools (such as **Zabbix**, **Prometheus**, or **Nagios**) to track data across three key layers:



* **1. Infrastructure & Host Metrics (The Hardware Health):**
    * **CPU and RAM Utilization:** Tracking usage percentages. Continuous spikes near 100% mean a server is under-provisioned or a process is malfunctioning.
    * **Storage Capacity:** Monitoring available disk space. If a mail server or log partition hits 100% capacity, the entire operating system will crash.
    * **Hardware Telemetry:** Monitoring server core temperatures, fan speeds, and the health status of redundant power supplies (UPS status).
* **2. Network Metrics (The Data Highway):**
    * **Bandwidth Saturation:** Tracking data download/upload rates to ensure local Colombo internet lines aren't overloaded.
    * **Packet Loss and Latency (Ping):** Measuring network responsiveness to ensure internal switches and routers are passing data cleanly without dropped connections.
* **3. Application & Service Availability:**
    * **Port and Service Status:** Verifying that critical background services (like Active Directory on port 389 or a web server on port 443) are actively running and accepting connections.
    * **HTTP Status Codes:** Checking internal web application portals to ensure they are returning healthy `200 OK` codes rather than `500 Internal Server Errors`.

---

### B. The Alerting and Escalation Pipeline
Collecting data is only half the battle; the system must intelligently flag abnormalities.
>[Metric Threshold Breached] ──> [Trigger Alert] ──> [Sysadmin Notification] ──> [Auto-Resolution/Manual Fix]

1. **Thresholds & Triggers:** Sysadmins establish baselines. For example: *If a file server's storage capacity exceeds 90%, trigger a Warning. If it exceeds 95%, trigger a High Severity Alert.* 
2. **Notification Delivery:** Alerts are automatically pushed out via instant channels (like SMS, automated emails, or corporate chat apps like Slack/Teams) so the IT team is informed immediately, even outside office hours. 
3. **Log Aggregation:** Centralizing event logs (such as Windows Event Viewer records or Linux `/var/log` outputs) into a single system allows sysadmins to conduct root-cause analysis after an incident occurs.
---
## 10. Cloud Deployment Strategy

The final architecture choice for our Colombo-based business is deciding where our computing workload and data will physically sit: **On-Premises** (local physical servers in the office) vs. **The Cloud** (renting virtual servers from providers like AWS, Microsoft Azure, Google Cloud, or local Sri Lankan data centers like Dialog's Tier III facilities).

---

### A. Deployment Models Compared



| Factor | On-Premises Strategy | Cloud-Based Strategy |
| :--- | :--- | :--- |
| **Upfront Cost (CapEx)** | **High:** Requires buying expensive server hardware, physical racks, networking switches, and dedicated backup power supplies upfront. | **Zero:** No hardware to buy. Costs are operational (OpEx) based on a monthly subscription or pay-as-you-go model. |
| **Physical Maintenance** | **High:** The internal IT team is responsible for fixing broken drives, maintaining precision air conditioning, and managing local power backup issues. | **None:** The cloud provider manages the physical data center buildings, electricity, cooling, and hardware replacements. |
| **Scalability** | **Slow:** Scaling up means buying new physical RAM or storage drives, waiting for delivery, and manually installing them. | **Instant:** Server resources (CPU, RAM, Storage) can be upgraded or duplicated globally with a few clicks or script commands. |
| **Internet Dependency** | **Low:** Local employees can still access local file storage (NAS) and internal network tools even if the office internet completely goes down. | **Absolute:** If the office internet connection drops, work grinds to a halt since employees cannot reach external cloud applications. |

---

### B. Special Local Considerations for a Colombo Deployment
For a small business operating locally, unique environmental and economic factors affect this infrastructure choice:

1. **Power Grid Reliability:**
   * *Local Context:* Operating physical, on-premises servers requires robust, heavy-duty Uninterruptible Power Supplies (UPS) and potentially generator integration to ride out localized grid instability or scheduled maintenance power cuts. 
   * *Cloud Advantage:* Shifting core applications to the cloud passes the entire burden of power redundancy and 99.99% uptime to the massive industrial infrastructure of the cloud data centers.

2. **Foreign Exchange & Budget Predictability:**
   * *Local Context:* Global public clouds (like AWS or Azure) bill primarily in US Dollars (USD). For a local company earning revenue in Sri Lankan Rupees (LKR), fluctuating exchange rates can make monthly IT operational costs volatile and unpredictable.
   * *Strategic Fix:* A hybrid approach utilizing managed local cloud infrastructure providers or open-source software can help stabilize costs while keeping applications agile.

---

### C. A Hybrid Framework
Rather than choosing strictly one or the other, a small company benefits most from a **Hybrid Deployment Framework**:

* **Keep on Cloud:** Corporate Email, Collaborative Tools (e.g., Microsoft 365 / Google Workspace), and external Customer Web Portals. This ensures clients and remote workers can always access core services flawlessly from anywhere.
* **Keep On-Premises:** A lightweight local Network Attached Storage (NAS) box for fast daily workspace file sharing over the office LAN, paired with standard network routers/firewalls to keep local operational data secure, fast, and independent of internet bandwidth caps.
