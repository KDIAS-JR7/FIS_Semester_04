## HyperText Transfer Protocol (HTTP)

Being a stateless application-layer protocol, HTTP does not retain session information between requests, which limits its ability to handle complex client-server interactions without additional mechanisms like cookies or sessions.

- HyperText Transfer Protocol (HTTP) is a protocol used which transfer hypertext over the Web.
- HTTP has been the most widely used protocol for data transfer over the Web.
- Hyper-text exchanged using HTTP goes as plain text which makes it less secure.
- The web server delivers data to the user in the form of web pages when the user initiates an HTTP request.
- Connection between the web browser and the server ends after the transaction is finished. This makes HTTP a stateless protocol

![[HTTP-.gif]]

## How HTTP Works: Step-by-Step Process

Here’s how HTTP works when you visit a website:

1. **Open Web Browser**: First, you open your web browser and type a website URL (e.g., `www.example.com`).
2. **DNS Lookup**: Your browser asks a [Domain Name System (DNS)](https://www.geeksforgeeks.org/computer-networks/domain-name-system-dns-in-application-layer/) server to find out the IP address associated with that URL. Think of this as looking up the phone number of the website.
3. **Send HTTP Request**: Once the browser has the website’s IP address, it sends an HTTP **request** to the server. The request asks the server for the resources needed to display the page (like text, images, and videos).
4. **Server Response**: The server processes your request and sends back an HTTP **response**. This response contains the requested resources (like HTML, CSS, JavaScript) needed to load the page.
5. **Rendering the Web Page**: Your browser receives the data from the server and displays the webpage on your screen.

After the page is loaded, the connection between the browser and server is closed. If you request a new page, a new connection will be made.

>[!tip]
>Since HTTP is a stateless protocol, for each HTTP request, a new connection is made.

## Understanding HTTP Request and Response

### 1. HTTP Request Structure

A client sends a request to trigger an action or fetch a resource from a server. It contains four key parts: 

#### 1. Request Line (Start-line)

This is always the first line of the message. It contains three pieces of information separated by spaces: 

- **Method**: The action to perform (e.g., `GET` to fetch data, `POST` to send data).
- **Path**: The target URL or resource locator on the server (e.g., `/index.html` or `/api/v1/users`).
- **HTTP Version**: The specification protocol version being used (typically `HTTP/1.1`).
#### 2. Request Headers 

These are case-insensitive key-value pairs that supply metadata about the client or how the message should be processed.
- `Host`: The domain name of the server (e.g., `example.com`, required in HTTP/1.1).
- `User-Agent`: Information about the browser or app making the request.
- `Authorization`: Credentials or bearer tokens used to verify the user.
- `Accept`: The content types that the client can understand (e.g., `application/json`). 
#### 3. Empty Line

A completely blank line indicating that the metadata sections are finished. Everything after this line is parsed as the message body.

#### 4. Request Body (Optional)

The raw data payload being sent to the server. It is generally used with `POST`, `PUT`, or `PATCH` methods and is absent in `GET` and `DELETE` requests. It can contain form inputs, files, or JSON text. 
```http
POST /api/users HTTP/1.1
Host: example.com
User-Agent: Mozilla/5.0
Authorization: Bearer abc123xyz
Content-Type: application/json
Content-Length: 43

{
  "name": "Alice",
  "role": "Developer"
}

```
### 2. HTTP Response Structure

A server sends a response back to the client detailing the result of the request execution.

#### 1. Status Line (Start-line)

This line summarizes the outcome of the request. It contains three pieces of information:
- **HTTP Version**: The protocol version the server supports (e.g., `HTTP/1.1`).
- **Status Code**: A 3-digit number categorized by response types (e.g., `200` for success, `404` for not found).
- **Reason Phrase**: A short, human-readable text explaining the code status (e.g., `OK`, `Not Found`

#### 2. Response Headers

Metadata sent by the server to instruct the client on how to handle the incoming data payload.

- `Content-Type`: Specifies the media type of the body resource (e.g., `text/html`, `application/json`).
- `Content-Length`: The precise size of the response body in bytes.
- `Set-Cookie`: Sends state or session keys to store inside the browser.
- `Server`: Details about the software running on the host system.

#### 3. Empty Line

A critical blank space separating the response headers from the raw response data. 

#### 4. Response Body (Optional)

The requested resource or an error statement from the host system. It can deliver data formats like plain text, HTML source code, images, video buffers, or structured documents. 

```http
HTTP/1.1 200 OK
Date: Tue, 30 Jun 2026 15:09:00 GMT
Server: Apache/2.4.41
Content-Type: application/json
Content-Length: 31

{
  "status": "user_created"
}
``````

![[httpReqResponse.png]]

## What is HTTP Status Code?

**HTTP Status codes** are three-digit numbers that servers use to tell your browser what happened with the request you sent. 
HTTP status codes are categorized into five sections those are listed below:

- Informational responses (100–199)
- Successful responses (200–299)
- Redirects (300–399)
- Client errors (400–499)
- Server errors (500–599)
### 1. [Informational](https://www.geeksforgeeks.org/computer-networks/http-status-codes-informational-responses/) **(1xx)**
These codes just give you information (e.g., 100 Continue means the request is still being processed).
### 1. [Successful](https://www.geeksforgeeks.org/computer-networks/http-status-codes-successful-responses/)**(2xx)**
1. These codes tell you everything went fine (e.g., 200 OK means the request was successful).
- 202 Accepted: the request was accepted but may not include the resource in the response.
- 204 No Content: there is no message body in the response.
- 205 Reset Content: indicates to the client to reset its document view.
- 206 Partial Content: indicates that the response only contains partial content.
### 2. [Redirection](https://www.geeksforgeeks.org/computer-networks/http-status-codes-redirection-responses/)**(3xx)**
These codes tell the browser to take additional action (e.g., 301 Moved Permanently means the requested page has moved to a new address).

- 301 Moved Permanently: the resource is now located at a new URL.
- 303 See Other: the resource is temporarily located at a new URL.
- 304 Not Modified: the server has determined that the resource has not changed and the client should use its cached copy. This relies on the fact that the client is sending ETag

>[!note]
>(Entity Tag) information that is a hash of the content. The server compares this with its own
computed ETag to check for modifications.
### 3. [Client Error](https://www.geeksforgeeks.org/html/http-status-codes-client-error-responses/) **(4xx)**
These codes indicate that there was a problem with your request (e.g., 404 Not Found means the page doesn’t exist).

- 400 Bad Request: the request was malformed.
-  401 Unauthorized: request requires authentication. The client can repeat the request with the Authorization header. If the client already included the Authorization header, then the credentials were wrong.
-  403 Forbidden: server has denied access to the resource.
- 405 Method Not Allowed: invalid HTTP verb used in the request line, or the server does not support that verb.
- ### 4. [Server Error](https://www.geeksforgeeks.org/computer-networks/http-status-codes-server-error-responses/) **(5xx)**
These codes tell you that something went wrong on the server side (e.g., 500 Internal Server Error means the server had an issue processing the request).

- 501 Not Implemented: the server does not yet support the requested functionality.
- 503 Service Unavailable: This could happen if an internal system on the server has failed or the server is overloaded. Typically, the server won't even respond, and the request will time out.
