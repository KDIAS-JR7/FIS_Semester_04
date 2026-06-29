Communication over the internet relies on a set of rules that define how data is sent, received, and processed between devices. These rules, known as web protocols, ensure reliable and secure data exchange, with key protocols like HTTP, HTTPS, TCP/IP, FTP, and DNS handling most online communication. The process of web communication is:

- DNS protocol translates domain names into IP addresses
- TCP/IP protocol handles the routing and delivery of data across networks
- HTTP/HTTPS protocol manages the exchange of web page content between the client and the server
>[!note]
>Protocols are sets of rules that define how data is sent, received, and processed between devices.

## **Working of Web Protocols Behind Websites**

Web protocols function like different departments in a company, each specializing in specific tasks to ensure that data gets from point A to point B efficiently and securely. Whether you’re accessing a website, sending a file, or resolving a domain, each step relies on a specific protocol.

## Popular Protocols
### 1. HTTP (Hyper Text Transfer Protocol)

[HTTP](https://www.geeksforgeeks.org/blogs/http-full-form/) Protocol is used to transfer hypertexts over the internet and it is defined by the www(world wide web) for information transfer.  It’s the protocol that allows web browsers to request web pages from servers and display them to users.

However, HTTP is Internet meaning data transmitted over HTTP can be intercepted by malicious actors. It is used to share text, images, and other multimedia files on the [World Wide Web](https://www.geeksforgeeks.org/computer-networks/world-wide-web-www/).
![[HTTP-.gif]]
When a user enters a website [URL](https://www.geeksforgeeks.org/javascript/what-is-url-uniform-resource-locator/), the client sends an HTTP request to the server asking for the webpage or specific data. The server then processes this request and sends back an HTTP response containing the required content. This entire exchange happens over a TCP (Transmission Control Protocol) connection, which ensures that the data is sent reliably and in the correct order. HTTP is the communication protocol that makes this client-server interaction possible, allowing users to access web content.

### 2. HTTPS

**HTTPS (HyperText Transfer Protocol Secure)** is the secure version of HTTP. It works the same way as HTTP by allowing your browser to request and receive web pages from a server, but with one important difference — it **encrypts** the data being exchanged. This means any information sent between your browser and the website (like passwords, credit card details, or personal data) is kept private and safe from hackers. HTTPS uses [**SSL**](https://www.geeksforgeeks.org/computer-networks/secure-socket-layer-ssl/)**/**[**TLS**](https://www.geeksforgeeks.org/computer-networks/transport-layer-security-tls/) encryption to protect the connection, making it the preferred and trusted protocol for secure websites, especially for online shopping, banking, or login pages.

![[HTTPS-gif.gif]]
The secure communication process in HTTPS involves the following key steps:

- **TCP Connection**: First, a stable [TCP](https://www.geeksforgeeks.org/computer-networks/what-is-transmission-control-protocol-tcp/) connection is established between the client and the server to start communication.
- **Public Key**: The server sends its public key to the client. This key is part of an [SSL certificate](https://www.geeksforgeeks.org/computer-networks/ssl-certificate/) and is used to safely exchange information without exposing it to attackers.
- **Session Key**: The client then generates a session key and encrypts it using the server's public key. This ensures that only the server can decrypt and access the session key.
- [**Data Encryption**:](https://www.geeksforgeeks.org/computer-networks/what-is-data-encryption/) Once the session key is exchanged, all data transferred between the client and server is encrypted. This keeps personal information, passwords, and other sensitive data safe from hackers.

### 3. TCP (Transmission Control Protocol)

[**TCP (Transmission Control Protocol)**](https://www.geeksforgeeks.org/computer-networks/what-is-transmission-control-protocol-tcp/)is a communication protocol that ensures reliable, ordered, and error-checked delivery of data between devices over a network. It breaks data into packets, sends them to the destination, and reassembles them in the correct order.

> **For Example :** If you are sending large file to a friend. TCP divides file into small packets and send them over the internet. If some packets get lost along the way TCP reassembled them in the correct order. If any packets get lost or arrive out of order, TCP retransmits them to ensure data integrity.
 
![[TCP.gif]]

TCP (Transmission Control Protocol) establishes a reliable connection between a client (like your computer) and a [**server**](https://www.geeksforgeeks.org/computer-networks/what-is-server/) using a method called the three-way handshake.

1. SYN (Synchronize): The client starts the process by sending a SYN message to the server, asking to start a connection.
2. SYN + ACK (Acknowledge): The server receives the SYN request and responds with a SYN-ACK message, which means it agrees to the connection and acknowledges the client’s request.
3. ACK (Acknowledge): The client replies with an ACK message, confirming the connection.

### 4. **IP (Internet Protocol**

The[**Internet Protocol (IP)**](https://www.geeksforgeeks.org/computer-networks/what-is-internet-protocol-ip/) is the foundational communication protocol that enables devices to send and receive data across the internet and other networks. It acts like a digital postal system, assigning unique addresses (IP addresses) to devices and ensuring data packets are correctly routed from source to destination.
![[How-does-IP-addressing-work.png]]
- The sender device (IP: `192.16.00.12`) initiates communication by encapsulating data into a packet, including both its source IP address and the destination IP address.
- The packet is then forwarded to the internet, which serves as the medium responsible for routing the packet based on the destination IP (`192.00.00.75`).
- Routing protocols and network infrastructure interpret the destination IP and determine the most efficient path for delivering the packet.
- Upon reaching the destination, the recipient device (IP: `192.00.00.75`) identifies the packet as intended for it and proceeds to process the received data.
- This process ensures accurate and efficient data delivery between networked devices, forming the core functionality of the Internet Protocol.

### **5.** DNS (Domain Name System)

[**DNS (Domain Name System)**](https://www.geeksforgeeks.org/computer-networks/domain-name-system-dns-in-application-layer/) is like the internet’s phonebook. It translates easy-to-remember domain names like [`www.geeksforgeeks.org`](https://www.geeksforgeeks.org/) into IP addresses like `142.250.77.206`, which computers use to identify each other on the network. Without DNS, we’d have to remember long strings of numbers to visit websites. It plays a key role in connecting users to websites quickly and accurately, making browsing the web smooth and user-friendly.
![[How-DNS-Works-gif-ezgifcom-optimize-1.gif]]
To translate a domain name like [`geeksforgeeks.org`](https://www.geeksforgeeks.org/) into its corresponding IP address. When a user types a website URL into their browser, the system first checks the local cache, OS cache, or router cache to see if the IP address is already stored. If not found, it moves to the host files, and if still unresolved, the request is sent to a DNS resolver. The resolver contacts a root server, which directs it to the TLD server for [`geeksforgeeks.org`](https://www.geeksforgeeks.org/) . The TLD server then points to the authoritative nameserver for [`geeksforgeeks.org`,](https://www.geeksforgeeks.org/) which finally returns the IP address. The resolver provides this IP to the user's system, which then contacts the real server to load the website. This entire process happens in milliseconds, ensuring a smooth browsing experience.

### **6. FTP (File Transfer Protocol**

[**FTP (File Transfer Protocol)**](https://www.geeksforgeeks.org/computer-networks/file-transfer-protocol-ftp-in-application-layer/)is a standard network protocol used to transfer files between a client and a server over the internet or a local network. It allows users to upload, download, delete, or manage files on a remote server. FTP is commonly used for website management, [file sharing,](https://www.geeksforgeeks.org/operating-systems/what-is-file-sharing/) and data backup. However, it does not encrypt data, making it less secure compared to modern alternatives like [SFTP](https://www.geeksforgeeks.org/computer-networks/sftp-file-transfer-protocol/) or FTPS.
![[FTP.gif]]

FTP uses two separate connections: the Control Channel and the Data Channel. The Control Channel is used to send commands (like login requests or file operation instructions), while the Data Channel handles the actual transfer of files (uploading or downloading). This separation allows efficient and organized file management over a network. A common use case is uploading website files to a server or downloading backups from it.

## Working of Web Protocols

When you type a website address in the [web browser](https://www.geeksforgeeks.org/computer-networks/web-browser/):

1. First, DNS translates the domain into an IP address.
2. A TCP connection is established between your device and the server.
3. An HTTP or HTTPS request is made to the server for the website’s content.
4. If the site is secure, data is encrypted via SSL/TLS.
5. The server responds with the requested content, which is displayed in your browser.
