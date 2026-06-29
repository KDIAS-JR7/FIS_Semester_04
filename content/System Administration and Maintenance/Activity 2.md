# Question a)

| **System**         | **Selected OS**                    | **Reason**                                                                                                                                                                                                                               |
| ------------------ | ---------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Employee computers | Windows 11 Pro                     | Windows is a market leader OS that most employees are familiar with. Windows Pro is recommended as Home cannot be bulk purchased, is a legal gray area and lacks key features that pro provides such as Active Directory of group policy |
| Web Server         | Ubuntu Server 24.0 LTS             | An extremely lightweight, headless server operating system with a massive community backing and enterprise level support from Canonical.                                                                                                 |
| File Server        | Specialized NAS OS (e.g., TrueNAS) | Dedicated, rich **Web GUI** out of the box to manage shares (SMB, NFS, AFP), user quotas, and disk health (SMART tests). They're also highly optimized specifically for file handling compared to regular Linux distributions.           |
# Question b)
## 1. Hardware Requirements & Compatibility
- **Legacy System Support:** Assess if the OS supports older, existing hardware that the company might have acquired to minimize startup capital.
- **Minimum vs. Recommended Specs:** Verify if the budget-friendly machines the company can afford will perform sufficiently under normal daily workloads, rather than just meeting the bare minimum booting requirements.
- **Hardware Security Guardrails:** Identify strict hardware requirements (e.g., **Windows 11 requiring a Trusted Platform Module (TPM) 2.0 chip** and specific CPU generations).
- **Processor Architecture:** Ensure the OS installer matches the hardware architecture (**x86_64** for standard Intel/AMD office desktops and servers, or **ARM64** for specialized low-power devices or specific server chips).
## 2. Storage Configurations
- **Installation and Update Footprint:** Account for both the baseline installation size and the buffer space required for future system updates (e.g., Windows updates notoriously require significant disk overhead).
- **File System Support:** Determine which native file systems the OS supports (e.g., Windows is largely restricted to **NTFS** and **FAT32**, whereas Linux distros flexibly support **EXT4, BTRFS, and XFS** out of the box).    
- **RAID & Redundancy:** Check if the OS natively supports software RAID configurations (crucial for protecting data on File and Web servers against single-drive failures).
- **Network Storage Integration:** Ensure the OS can seamlessly mount and interact with Network Attached Storage (NAS) protocols like SMB or NFS.
## 3. RAM (Memory) Efficiency
- **Minimum vs. Optimal Thresholds:** Identify the minimum RAM required to run the OS versus the realistic amount needed to run enterprise applications smoothly.
- **Idle Memory Overhead:** Evaluate how much RAM is consumed at idle by background processes and telemetry services (e.g., Windows telemetry and indexing services vs. a bare, headless Linux server).
- **Memory Architecture Support:** Ensure the OS can fully utilize hardware optimizations like **Dual-Channel or Quad-Channel memory configurations** to maximize throughput.
## 4. Network Requirements
- **Out-of-the-Box Driver Support:** Verify if the OS installation media includes generic drivers for common network interface cards (NICs) and Wi-Fi chipsets so machines can connect to the network immediately upon installation.
- **Bandwidth & Data Cap Management:** Check for native features to enforce network usage limits or Quality of Service (QoS) controls—crucial for managing data consumption in locations with limited or metered bandwidth.
# Question c)
## 1. User Account Management
- **Separation of Privileges:** Establish strict boundary lines between administrative and daily use. Standard employees are assigned **Standard User Accounts** to prevent accidental system changes or unauthorized software execution. Dedicated **Administrator Accounts** are reserved strictly for the SA team.
- **Disable Root User & Mandate `sudo`:** On Linux-based infrastructure (Web and File servers), disable direct login for the root user. SAs must use personal accounts and elevate their privileges temporarily using `sudo` for administrative tasks, which creates a clean, identifiable audit trail.
## 2. Enterprise Password Security Policies
- **Passphrases over Passwords:** Mandate long, complex passphrases (e.g., combining multiple random words and symbols) which provide significantly higher entropy and resistance to brute-force attacks than standard short passwords.
- **Prohibit Credential Sharing:** Enforce strict policy and technical barriers against sharing individual accounts or corporate Wi-Fi keys. Sharing credentials creates an accounting and tracking nightmare, destroying audit trails.
- **Secure Password Storage (No Rainbow Tables):** System passwords must be cryptographically **hashed and salted** using secure algorithms to protect the password database file from offline cracking attempts.
- **Controlled Self-Service & Rate Limiting:** Establish a secure identity verification process for account lockouts. Implement strict rate-limiting on login attempts to thwart automated brute-force attacks.
- **Emergency Revocation Protocol:** Maintain a centralized system (such as Active Directory/Entra ID) capable of triggering a forced password reset or instant account revocation across all platforms simultaneously in the event of an active cyber threat.
## 3. Access Control & File Permissions
- **Principle of Least Privilege (PoLP):** Permissions must be granted strictly based on an employee's job function (e.g., printing staff do not need write access to accounting file shares).
- **Separation of Duties (SoD):** Ensure no single user account has absolute control over an entire multi-stage process. Dividing read ($r$), write ($w$), and execute ($x$) permissions across different server environments prevents rogue code deployment and malicious insider threats.
- **Siloed Administrative Access:** Administrative tools and configurations must remain explicitly separate from daily productivity files and environments.
## 4. Advanced Network Infrastructure Settings
- **WPA3 Enterprise over WPA2-PSK:** Avoid standard Pre-Shared Keys (PSK) where everyone uses the same Wi-Fi password. Deploy **WPA3 Enterprise backed by a RADIUS server**, requiring every user to authenticate with their individual domain credentials.
- **Layer 2 VLAN Segmentation:** Divide the network into distinct logical zones using Virtual Local Area Networks (VLANs). This keeps standard employee data traffic separated from server traffic, containing potential network infections.
- **Isolated Management VLAN:** Restrict all infrastructure management protocols (e.g., SSH, HTTPS control panels) strictly to a dedicated, heavily firewalled **Management VLAN**. Block these administration services entirely on all general employee data VLANs to eliminate internal attack vectors.
# Question d)
## 1. Software Updates & Patch Management
- **Automated Patch Deployment:** Mandate and automate security updates across all endpoints using configuration management and orchestration tools (e.g., **Ansible**, Windows Update for Business, or specialized MDM solutions).
- **Stability Over Bleeding-Edge:** Prioritize long-term stability and security over new features. Strictly adhere to **Long-Term Support (LTS)** software releases for server infrastructure to ensure predictable lifecycles and minimal breaking changes.
- **Staging Environment Verification:** Before deploying any major system updates company-wide, patches should be thoroughly vetted in a staging or testing environment to prevent widespread operational disruption.
## 2. Enterprise Backup Strategy
- **The 3-2-1 Backup Rule:** * Maintain at least **3** copies of critical company data (1 primary operational copy and 2 backup copies).
    - Store the backups across **2** different types of media (e.g., the local NAS file server and internal backup drives).
    - Keep at least **1** copy completely **offsite** or securely isolated in the cloud to protect against physical disasters (fire, theft, floods) or local ransomware attacks.
- **Frequent, Automated Intervals:** Configure automated incremental backups at regular, frequent intervals (e.g., hourly for database transactions, nightly for standard file shares).
- **System Snapshots:** Utilize native file system snapshot features (such as ZFS snapshots on the File Server) for instantaneous point-in-time recovery points before making infrastructure changes.
- **Rigorous Recovery Testing:** Routinely audit backup integrity, drive health, and recovery procedures. _A backup is only as valuable as its ability to be successfully restored._
## 3. Endpoint Protection & Information Security
- **Mandatory Antivirus/EDR:** Enforce the installation of continuously updated Endpoint Detection and Response (EDR) or Antivirus software on all corporate machines and any personal devices allowed under a Bring Your Own Device (BYOD) policy.
- **End-to-End Encryption:** Ensure data is strongly encrypted **at rest** (using BitLocker on laptops and self-encrypting drives on servers) and **in transit** using secure cryptographic protocols (**TLS/HTTPS, SSH**).
- **MITM Prevention via Digital Certificates:** Utilize robust cryptographic protocols and digital certificates to establish trusted connections, explicitly preventing Man-in-the-Middle (MITM) attacks during network transmissions.
## 4. Continuous System Monitoring & Auditing
- **AAA Infrastructure Deployment:** Implement a centralized **Authentication, Authorization, and Accounting (AAA)** framework (such as RADIUS or TACACS+) to govern who can access network resources, what actions they can perform, and maintain precise audit trails for accountability.
- **Proactive Network Monitoring:** Deploy enterprise monitoring solutions (such as **SolarWinds, Zabbix, or Prometheus/Grafana**) to monitor network health, bandwidth consumption, CPU/RAM utilization on servers, and disk health metrics, allowing the SA team to remediate hardware issues before they cause downtime.
# Question e)
## 1. Server Services
- **Definition:** Background programs or daemons running on central host systems that listen for, process, and respond to incoming requests from other devices across the network. They are built to manage shared resources, host data, and handle heavy computational workloads.
- Enterprise Examples:
    - **Web Servers (e.g., NGINX, Apache HTTP Server):** Listen for HTTP/HTTPS requests from network clients and serve web pages, applications, or API responses.
    - **DHCP Servers (Dynamic Host Configuration Protocol):** Automatically manage, assign, and distribute IP addresses and network configuration parameters to client devices entering the network infrastructure.
## 2. Client Services
- **Definition:** Applications or protocol service layers running on an end-user's machine that initiate requests to a remote server and render or display the returned server output for the user.
- Enterprise Examples:
    - **Web Browsers (e.g., Google Chrome, Mozilla Firefox):** Act as the client interface that sends requests to Web Servers and renders the received HTML/CSS/JS code into a visual interface.
    - **Email Clients (e.g., Microsoft Outlook, Mozilla Thunderbird):** Use protocols like IMAP or POP3 to request, fetch, and display emails from centralized enterprise Mail Servers.
# Question f) 
## Possible Causes
- **User Input Error (Credential Mismatch):** Simple typos, active Caps Lock, or the employee using an expired/incorrect password.
- **Network Connectivity Failure:** If the workstation uses domain authentication (via Active Directory/RADIUS), a dropped network connection prevents the machine from communicating with the authentication server.
- **Authentication Server Daemon Failure:** The underlying service or process on the authentication server itself could be frozen, overloaded, or down.
- **Account Lockout:** The account may have been automatically locked due to too many consecutive failed login attempts (brute-force protection).
## Standard Operating Procedure (Steps for the Support Team)
- **Step 1: Verify Input & Account Status**
    - Instruct the user to double-check their typing, ensure Caps Lock is off, or attempt logging in on a different known-working system to rule out local hardware issues (like a broken keyboard).
    - Check the central management console to see if the user's account is flagged as "Locked" or "Expired" and unlock/reset it if necessary.
- **Step 2: Inspect Layer 1 & Layer 2 Network Connectivity**
    - Check the physical layer: verify if the Ethernet cable is securely plugged into both the workstation and the wall jack, or check if the Wi-Fi card is connected to the correct Enterprise SSID.
    - Use basic diagnostic commands (e.g., `ping` or `traceroute`) from a separate machine to verify if the local subnet can reach the authentication gateway.
- **Step 3: Audit Centralized Server Processes**
    - If multiple employees report the same issue simultaneously, immediately check the health metrics of the authentication server. Verify that the identity database services are active and running without errors.
## Final Solutions & Remediation
- **For Credential Issues:** Perform a verified password reset, provide the user with a secure temporary passphrase, and require a change upon next login. Educate users on password management.
- **For Network Issues:** Re-seat loose cables, replace damaged patch cords, or restart malfunctioning local network switches/Access Points to restore the authentication pathway.
- **For Server-Side Issues:** Restart the failed authentication daemon, patch the server software if a bug is identified, or scale server resources to handle authentication traffic spikes.
- **Post-Incident Action:** **Document the entire incident** in the IT ticketing system. Log the root cause, symptoms, and specific steps taken to fix it to accelerate resolutions for future occurrences.
# Question g)
Operating system maintenance is not just an IT chore; it is a foundational requirement for business continuity, risk management, and operational efficiency. Regular maintenance serves several critical functions:

- **Mitigating Cyber Security Risks:** The primary reason for OS maintenance is patch management. Flaws and vulnerabilities are discovered constantly; regular updates ensure these security holes are patched before threat actors can exploit them to breach the company network.
- **Ensuring Business Continuity & Stability:** Unmaintained operating systems suffer from performance degradation, memory leaks, and unresolved bugs that cause system crashes. Regular maintenance keeps servers and endpoints stable, maximizing system uptime and preventing costly operational downtime.
- **Hardware & Software Lifecycle Longevity:** Regular optimizations—such as disk defragmentation/TRIM commands, driver updates, and clearing system caches—keep existing hardware running efficiently for longer. This directly reduces capital expenditure by delaying the need for expensive hardware replacements.
- **Compliance and Data Integrity:** Many industries have strict regulatory compliance standards regarding data protection. Continuous maintenance, coupled with a rigorous backup schedule, ensures the organization complies with legal frameworks and protects sensitive customer and corporate data from loss or corruption.
- **Optimizing Employee Productivity:** When employee workstations are unpatched, sluggish, or plagued by unresolved OS glitches, overall productivity drops. Proactive maintenance ensures the technology serves the employees, rather than hindering them.