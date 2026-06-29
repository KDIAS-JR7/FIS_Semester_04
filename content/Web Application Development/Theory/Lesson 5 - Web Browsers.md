![[Browser.png]]
## What is a web browser?
>Application software that allows users to access, search, and view information on the World Wide Web by communicating with web servers is known as a web browser. It enables smooth navigation of websites by retrieving and displaying online content in an interactive format.

- Displays web pages with text, images, videos, and links in a user-friendly manner
- Sends and receives data using HTTP/HTTPS protocols to load websites securely
## A brief History

The first web browser, World Wide Web (later renamed Nexus), was created by Tim Berners-Lee in 1990. In 1993, Mosaic introduced graphical browsing, followed by Netscape in 1994 and Internet Explorer in 1995. Later, modern browsers like Firefox, Chrome, Safari, and Opera emerged with advanced features.

## Working of a Web Browser
![[browser_working.png]]
### **Step 1: URL Resolution**

The browser uses [DNS](https://www.geeksforgeeks.org/computer-networks/domain-name-system-dns-in-application-layer/) (Domain Name System) to resolve the domain name into an IP address, which identifies the server where the website is hosted.

### **Step 2: Sending HTTP Request**

The browser sends an [HTTP](https://www.geeksforgeeks.org/blogs/http-full-form/) (HyperText Transfer Protocol) request to the server to access the webpage associated with the URL. It requests resources like HTML, CSS, JavaScript, images, and media files.

### **Step 3: Server Response**

The [server](https://www.geeksforgeeks.org/computer-networks/what-is-server/) responds with the requested resources [(HTML](https://www.geeksforgeeks.org//html/html-tutorial/), images, etc.) along with an [HTTP](https://www.geeksforgeeks.org/blogs/http-full-form/) response code. For a successful request, the response code is typically **200 OK**.

### **Step 4: Rendering the Page**

The browser starts parsing the [HTML](https://www.geeksforgeeks.org//html/html-tutorial/) content, requesting additional resources such as [images,](https://www.geeksforgeeks.org/html/html-images/) stylesheets, and scripts as needed. [CSS](https://www.geeksforgeeks.org//css/css-tutorial/) is used to style the elements, and [JavaScript](https://www.geeksforgeeks.org/javascript/javascript-tutorial/) is executed to add interactivity.

### **Step 5: Displaying the Content**

After receiving and processing the content, the browser renders the page, displaying it to the user. Any user interaction (like clicks or scrolling) may trigger new requests or JavaScript actions.

Small text files stored by a web browser to save information about a user’s activity and preferences on a website are cookies

- Enhances user experience by remembering preferences and login sessions
- Enables personalization by tracking browsing behavior
- Supports targeted advertising by storing user interests
## Core Architecture of Web Browser

- The [User Interface](https://www.geeksforgeeks.org/web-templates/user-interface-ui/) sends the user’s request to the [Browser Engine](https://www.geeksforgeeks.org/techtips/web-browser-engine-definition-working/) , which manages the browsing process.
- The [Rendering Engine](https://www.geeksforgeeks.org/websites-apps/rendering-engines-used-by-different-web-browsers/) displays the webpage by interpreting HTML, CSS, and executing JavaScript for interactivity.
- [Networking](https://www.geeksforgeeks.org/computer-networks/basics-computer-networking/) **and UI** [Backend](https://www.geeksforgeeks.org/blogs/backend-development/) work together to fetch data from the internet and render visual elements on the screen.
![[web_browser.png]]

## **Commonly Used Terms in Browsers**

Here are some commonly used terms when working with web browsers:

1. [**URL (Uniform Resource Locator):**](https://www.geeksforgeeks.org/javascript/what-is-url-uniform-resource-locator/) The address used to access resources on the web (e.g., `https://www.geeksforgeeks.org/`).
2. [**DNS (Domain Name System):**](https://www.geeksforgeeks.org/computer-networks/domain-name-system-dns-in-application-layer/) A system that translates human-readable domain names (like `https://www.geeksforgeeks.org/`) into [IP addresses](https://www.geeksforgeeks.org/computer-science-fundamentals/what-is-an-ip-address/) that computers can understand.
3. [**HTTP (HyperText Transfer Protocol):**](https://www.geeksforgeeks.org/blogs/http-full-form/) The protocol used by browsers to communicate with web servers and retrieve web content.
4. [**HTTPS (HyperText Transfer Protocol Secure):**](https://www.geeksforgeeks.org//html/explain-working-of-https/) A secure version of HTTP that encrypts the communication between the browser and the server, ensuring data integrity and privacy.
5. [**IP Address:**](https://www.geeksforgeeks.org/computer-science-fundamentals/what-is-an-ip-address/) A unique numerical identifier assigned to each device connected to the internet, used for routing internet traffic to the correct destination.
6. **HTTP Response Code:** A code returned by the web server to indicate the status of the request (e.g., 200 OK for success, 404 for page not found).
## Functions of a Web Browser

- **Accessing the Internet**: A web browser has an address bar where users can write down the specific uniform resource locators of web pages they wish to visit and typing a URL or touching a link directs the browser to contact a host through an internet address using a Hypertext Transfer Protocol.
- **Rendering Web Pages**: Web browsers convert complex code written in languages that include HTML, CSS, JavaScript, and others into a noncomplex graphical user interface where a user can engage, browsers help in viewing the textual and the graphical constituents well in a single workable system both entertaining and functional.
- **Executing Web Applications**: Current generation web browsers have dynamic web app capabilities running allowing intensive programs such as gears like email, video, and working applications that previously needed to be stand-alone.
- **Handling User Input**: In the user's experience, browsers process user input such as search queries, form data, or clicks on hyperlinks, after that, they act on it either by retrieving a new one or dealing with an already existing page.
- **Security Features**: To avert people from harmful content, net browsers are fitted with several safety mechanisms such as the alarm about insecure sites, prohibition of detrimental downloads, and operational capabilities like incognito/private surfing.
## Security Features in Browsers

- **HTTPS Enforcement**: With a call to action, browsers ask or compel sites to switch to HTTPS which is security that stops exposure of any data transmitted between a user and the website.
- **Sandboxing**: This security method consists in containing the browser windows and its content and windows of the operating system, reducing effects of any infective content or code.
- **Incognito/Private Browsing**: The usefulness of this option cannot be overstated since most of the popular browsers offer the private browsing modes which saves neither history cookies nor any websites data after the active session is over, this protects against tracking but is less effective on anonymity.
- **Tracking Prevention**: Anti-tracking functions are built-in in browsers such as Firefox and Safari, as supplementary features that block people’s movement across sites for advertisement purposes with the use of third party cookies.
- **Phishing and Malware Protection**: Browsers are continually adding new phishing and malware webpages to their databases and will bring up warnings when a user is about to load a page which could be potentially harmful.

## RISK and THREATS
- **Cross-Site Scripting (XSS)** - Hacker injects malicious script into a legit webpage
- **Cross-Site Request Forgery (CSRF)** - Tricks your browser into doing something on another site
- **Tracking cookies** - Companies follow you across different websites to build a profile
- **Man-in-the-Middle** - On unsecured Wi-Fi, someone intercepts data between you and the site
- **Drive-by downloads** - Malware downloads without you clicking anything
- **Fake browser extensions** - Malicious add-ons that steal passwords or browsing history
## New and Emerging Features of Browsers

Broadly speaking, web browsers are being financed every day in accordance with new technologies and facilitating the users.

- **Progressive Web Apps (PWAs)**: It is a web application with the capabilities and characteristics of an installed application including the offline mode and being faster, such apps are increasingly supported in recent browser versions.
- **WebAssembly (Wasm)**: This is how developers simplify the running of complex and performance-driven operations within their web apps running applications driven by binary code, this is critical in gaming systems, video-editing apps, amongst other apps which require high concentration.
- **AI-Powered Browsing**: AI technology is also being utilized in some of web browsers to enable any predictions with recommendations also typing and tailoring to user.
- **Password Managers and Enhanced Privacy Tools**: Progressive password management systems as well as systems preventing cross-site tracking are getting incorporated in contemporary web browsers.

