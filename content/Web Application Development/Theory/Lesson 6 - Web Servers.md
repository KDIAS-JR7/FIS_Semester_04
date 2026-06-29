System that stores and delivers web content to users over the internet is known as a web server, which primarily uses HTTP or HTTPS protocols. An HTTP server specifically focuses on handling HTTP requests and responses between the client and the server.

- Responds to browser requests by serving web resources.
- HTTP server is a type of web server focused on HTTP communication.
- Some web servers support additional protocols beyond HTTP.

## Working

When a user enters a URL, the browser sends an HTTP request to the web server, which processes it and returns the required resources to display the page.

![[web_broser_request_to_web_server.png]]
- **Client Request:** In the web browser, the user enters a URL.
- **DNS Resolution:** The browser contacts a [DNS](https://www.geeksforgeeks.org/computer-networks/domain-name-system-dns-in-application-layer/) server to obtain the IP address of the requested domain.
- **Establishing Connection:** Using the obtained IP address, the browser establishes a connection with the web server through TCP (and TLS in case of HTTPS).
- **Sending HTTP Request:** The browser sends an HTTP request (with headers and method like GET/POST) to the server.
- **Processing Request:** The web server receives the request, processes it, and may interact with backend services or databases.
- **Serving the Response:** The server sends back a response containing status codes and requested files ([HTML](https://www.geeksforgeeks.org/html/html-tutorial/), [CSS](https://www.geeksforgeeks.org/css/css-tutorial/), [JavaScript](https://www.geeksforgeeks.org/javascript/javascript-tutorial/), images).
- **Rendering the Web Page:** Based on the received data, the browser parses, executes scripts, and displays the web page to the user.

## Components of a Web Server
A web server consists of three core components: ==**hardware** (a powerful computer storing site files), an **operating system** (which manages resources), and **web server software** (which controls how users access these files)==. Together, they process incoming HTTP/HTTPS requests from clients (like web browsers) and deliver the requested content.

The main components that power a web server can be broken down into these three primary layers:

### 1. Hardware Layer

The physical foundation of a web server requires hardware optimized to handle multiple client requests continuously.

- **CPU & RAM:** Faster processors and large memory capacity are crucial for processing requests, running background applications, and maintaining speed during high traffic spikes.
- **Storage:** Large-scale, high-speed storage (typically SSDs) to hold all website files, databases, and media.
- **Network Interface Card (NIC):** A specialized hardware component that connects the physical computer to the internet so it can exchange data with clients globally. 

### 2. Operating System (OS)

The base software that manages all the technological resources of the physical machine.

- **Linux-based:** Common choices include distributions like Ubuntu, Debian, or CentOS.
- **Windows-based:** Uses Microsoft Windows Server editions.
- **Mac-based:** macOS is sometimes used for local development environments (like MAMP setups) but rarely for large-scale production. 

### 3. Web Server Software

The software responsible for understanding URLs and HTTP protocols, processing user requests, and delivering resources. 
- **HTTP Servers:** The core software that accepts requests and serves up files. Popular examples include [Apache HTTP Server](https://httpd.apache.org/), [Nginx](https://nginx.org/), and [LiteSpeed](https://www.litespeedtech.com/).
- **Application Servers:** Software that compiles results from scripting languages, handles business logic, and updates files to generate dynamic content before sending it to the browser.
- **Scripting Languages:** Tools (such as PHP, Python, or Ruby) that allow the server to dynamically generate content and handle interactions like user authentication or form processing.
- **Database:** Used to store persistent data and records. Common databases include MySQL, PostgreSQL, or MongoDB.

### 4. Supporting Components (Security & Optimization)

Modern web servers also utilize built-in infrastructure to protect data and improve delivery speed. 
- **SSL/TLS Encryption:** Certificates that encrypt the data transmitted between the browser and server to keep sensitive information secure (powering HTTPS). 
- **Web Application Firewall (WAF):** Security filters that protect the server from malicious traffic, such as DDoS attacks or hacking attempts. 
- **Load Balancers:** Tools that distribute incoming traffic evenly across multiple server instances to prevent downtime and overloading.
## Types

Web servers can be categorized based on their functionality, usage, and implementation. Below are some of the most common types:

![[types_of_web_servers.png]]

## Web Servers and Their Use Cases

Choosing the right web server depends on what you need for your website or application. Here’s a simple guide to help you decide:

- **Apache:** Reliable and customizable for general-purpose websites.
- **Nginx:** High-performance server for heavy traffic.
- **IIS:** Best for Windows and ASP.NET applications.
- **LiteSpeed:** Faster, secure alternative to Apache for PHP/WordPress.
- **Apache Tomcat:** Ideal for Java Servlets and JSP applications.
- **Node.js:** Suited for real-time apps using JavaScript.
- **Lighttpd:** Lightweight server for low-resource systems.
- **Jigsaw:** Used for testing and researching web standards.
## Web Server Architecture

Web server architecture refers to the structure and design of web servers, outlining how they handle incoming requests and deliver web content. There are two main approaches to web server architecture:

**1. Single-Tier (Single Server) Architecture:**

In a single-tier architecture, a single server is responsible for both processing requests and serving web content. This is suitable for small websites or applications with low traffic. However, it has limitations in terms of scalability and fault tolerance. If the server goes down, the entire service becomes unavailable.

![[single-server-arch-web-server.png]]
**2. Multi-Tier (Load-Balanced) Architecture:**

In a multi-tier architecture, multiple servers are used to distribute the workload and ensure high availability. This approach often involves load balancers that evenly distribute incoming requests across a cluster of web servers. Each server can serve web content independently, and if one server fails, the load balancer redirects traffic to healthy servers, ensuring uninterrupted service.
![[load-balancer-ser.png]]
## Built-In Web Server Capabilities

Web servers offer a range of features, including:

- **Content Hosting:** They store and serve web content, including HTML pages, images, videos, and other multimedia files.
- **Security:** Web servers implement various security mechanisms to protect against unauthorized access and cyberattacks.
- **Load Balancing:** Some web servers can distribute incoming traffic across multiple server instances to ensure optimal performance and availability.
- **Logging and Monitoring:** They provide tools to track and analyze server performance, user access, and error logs.
- **Caching:** Web servers can cache frequently accessed content to reduce server load and improve response times.

## Benefits of Web Servers

Using web servers offers several advantages, including:

- **Scalability:** Web servers can handle a large number of simultaneous connections, making them suitable for high-traffic websites.
- **Reliability:** They are designed for continuous operation and can recover from failures gracefully.
- **Security:** Web servers include security features to protect against common web threats like DDoS attacks and SQL injection.
- **Customization:** Web server configurations can be tailored to specific application requirements.

## Web Server Applications

Here, are some common applications of web server:

- **Hosting Websites:** The most common use of web servers is to host websites, making them accessible on the internet.
- **Web Applications:** Web servers provide the infrastructure for hosting web applications, enabling users to interact with software through a web interface.
- **File Sharing:** Some web servers are used for file sharing and collaboration, allowing users to upload and download files securely.
- **Content Delivery:** Content delivery networks (CDNs) use web servers to distribute content like images and videos to users worldwide, reducing load times.
- **API Hosting:** Web servers are used to host APIs (Application Programming Interfaces) that allow applications to communicate and exchange data over the internet.
## Situations Requiring Web Servers

You should consider using a web server when:

1. **Hosting a Website:** If you want to make your website accessible on the internet, you'll need a web server to store and serve your web pages.
2. **Building Web Applications:** Web servers can host web applications, providing the necessary infrastructure for users to access and interact with your software.
3. **Load Balancing:** When you anticipate high traffic or want to ensure fault tolerance, using a web server as a load balancer can distribute requests evenly across multiple servers.