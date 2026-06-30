## What is URL **(Uniform Resource Locator)?** 

URL (Uniform Resource Locator) is often defined as a string of characters that is directed to an address. It provides a way to retrieve the presentation of the physical location by describing its network location or primary access mechanism. 

To locate a resource on the internet, use a Uniform Resource Locator or URL. It serves as both a resource reference and an access point. A unique resource—which could be an image, an HTML page, a CSS document, or anything else—is always displayed by a URL.

![[url.jpg]]

### Protocol

![url-protocol-thumbnail.png](https://hw-images.hostwinds.com/strapi-images/url_protocol_thumbnail_8b4e712fbb.png)

The Protocol, also known as scheme, is a set of rules that define how website resources and information are [transferred between the web server and browser.](https://www.hostwinds.com/blog/what-are-web-servers)

The most common URL protocol is HTTPS, which stands for Hypertext Transfer Protocol Secure. This lets us know that the website has been authenticated and contains an SSL/TLS certificate, which encrypts any information shared between the browser (user) and the website, such as passwords and credit card information.

A small number of sites do use HTTP, the non-secure protocol, which is not typically recommended. This doesn't necessarily indicate a nefarious website but the lack of encryption exposes the site and its users to potential cyber threats.

Other common URL protocols include [FTP (File Transfer Protocol)](https://www.hostwinds.com/blog/ftp-vs-sftp-whats-the-difference) for transferring files between a client and server, and SMTP (Simple Mail Transfer Protocol) used by mail servers to send emails.

### Subdomain

![url-subdomain-thumbnail.png](https://hw-images.hostwinds.com/strapi-images/url_subdomain_thumbnail_ea2dae8a8a.png)

The subdomain in a URL is used to distinguish specific resources from other types of content housed under the same root domain. For instance, "blog.example.com" and "shop.example.com" indicate that the "example.com" domain has a site dedicated to blog content and another to shopping.

Though they share a root domain, [search engines treat subdomains as separate entities](https://www.hostwinds.com/blog/what-is-a-subdomain-and-why-use-one), independent from the root domain's website. While not necessarily a bad thing, it is important to understand how subdomains work and their potential impact on SEO.

### Root Domain

![url-rootdomain-thumbnail.png](https://hw-images.hostwinds.com/strapi-images/url_rootdomain_thumbnail_99de30e3f3.png)

The root domain, also known as the second-level domain, is the main identity of a website. When paired with the top-level domain, it is 100% unique to a specific site and cannot be duplicated. For instance, there can be only one hostwinds.com, hostwinds.net, and hostwinds.ca.

To help preserve brand identity, many companies will purchase their root domain under several different top-level domains and redirect them to a single domain - hostwinds.net and hostwinds.ca both redirect to hostwinds.com.

### Top-Level Domain (TLD)

![url-top-level-domain-thumbnail.png](https://hw-images.hostwinds.com/strapi-images/url_top_level_domain_thumbnail_516cd99dcc.png)

Also known as the domain extension, the top-level domain indicates the purpose or type of entity behind the website and is the first stop of the [DNS process](https://www.hostwinds.com/blog/what-is-dns-how-does-it-work).

For example, the ubiquitous ".com" lets us know the website is for commercial purposes, while ".edu" indicates an academic institution.

Some TLDs have registration restrictions, meaning that in order for the entity to own it, they must meet specific criteria set by the registry - ".edu" websites can only be owned by accredited academic institutions, typically colleges and universities. Similarly, ".gov" is solely reserved for US government entities.

### Subdirectory

![url-subdirectory-thumbnail.png](https://hw-images.hostwinds.com/strapi-images/url_subdirectory_thumbnail_b78127234c.png)

A subdirectory, also called a subfolder, is used to organize and categorize content on a website, letting users and web crawlers know what section of the website they're on. It also indicates the type of content one can expect to see within that section.

For example, "hostwinds.com/blog"  tells us that we are in the blog subdirectory of the Hostwinds website, and we should expect this section to contain blog posts.

### Slug

![url-slug-thumbnail.png](https://hw-images.hostwinds.com/strapi-images/url_slug_thumbnail_113d40ab7d.png)

The URL slug usually follows the subdirectory, separated by a slash ("/"). It is typically in an easy-to-read format, helping users and search engines better understand the page's content.

For example, "hostwinds.com/blog/url-structure" lets us know the blog post on this page is about URL structure.

### Path

![url-path-thumbnail.png](https://hw-images.hostwinds.com/strapi-images/url_path_thumbnail_a1826f3826.png)

The URL path represents the portion of the web address after the top-level domain. It it includes the subdirectory and slug(s), giving the specific location of a page within the website's hierarchy.

For instance, in "example.com/products/electronics/phones," the path is "/products/electronics/phones," which tells us the "phones" page can be found in the "electronics" category of the "products" section of the website.

URL parameters and fragments are not part of a URL path. We'll explain those parts of the URL next.

## **What is URI (Uniform Resource Identifier)?**

Similar to URL, URI (Uniform Resource Identifier) is also a string of characters that identifies a resource on the web either by using location, name or both. It allows uniform identification of the resources. A URI is additionally grouped as a locator, a name or both which suggests it can describe a URL, URN or both. The term identifier within the URI refers to the prominence of the resources, despite the technique used. 

The former category in URI is URL, during which a protocol is employed to specify the accessing method of the resource and resource name is additionally laid out in the URL. A URL may be a non-persistent sort of the URI. A URN is required to exist globally unique and features a global scope.A string identifier that points to an online resource is called a URI, or uniform resource identifier. Any resource on the internet can be identified by this string of characters by either its name, its location, or both. Scheme, authority, path, query, and fragment are all contained in a URI. The most widely used URI systems include [ftp](https://www.geeksforgeeks.org/computer-networks/file-transfer-protocol-ftp-in-application-layer/), Idap, telnet, HTTPs, [HTTP (Hypertext Transfer Protocol)](https://www.geeksforgeeks.org/blogs/http-full-form/), etc.

### Syntax of URI

- **Scheme:** A scheme is the initial part of a Uniform Resource Locator (URI). It consists of a string of characters, which can be any combination of a letter, number, plus sign, or hyphen (_), and is followed by a colon (:). The most widely used protocols are irc, file, ftp, data, and http. It is necessary to register the schemes with IANA.
- **Authority:** Two slashes (//) come before the optional authority component. There are three smaller parts to it:
    - **user details:** It might have a colon (:) between the username and an optional password.
    - **host:** It has an IP address or a registered name on it. The IP address has to be put in square brackets [] around it.
    - **Path:** Optional
- **Port:** A series of path segments divided by a slash(/) make up this path. It is always supplied by the URI; however, the path may be null or empty.
- **Query:** It is an optional element that comes before the question mark (?). It has a non-hierarchical query string with data in it.
- **Fragment**: It is an optional element that comes before the hash(#) symbol. It is made up of a fragment identification that points the way to a backup resource.

![[uriL.jpg]]

## Difference Between URL and URI

Core Conceptual Differences

The core structural differences between these protocols are outlined in technical specifications like 
- **URI (Uniform Resource Identifier)**: This is the broad parent category. Its primary job is simply to **identify** an abstract or physical resource uniquely. It can do this by using a name, a location, or both.
- **URL (Uniform Resource Locator)**: This is a specialized subset of a URI. Its primary job is to **locate** a resource on the web. It achieves this by including the specific access protocol (like `http`, `https`, or `ftp`) and the network domain address. 

| Feature                  | URI (Uniform Resource Identifier)        | URL (Uniform Resource Locator)           |
| ------------------------ | ---------------------------------------- | ---------------------------------------- |
| **Relationship**         | The parent category (Superset)           | A specialized subtype (Subset)           |
| **Core Purpose**         | Uniquely identify a resource             | Pinpoint the address and access method   |
| **Protocol Requirement** | Optional (Can use names, IDs, or data)   | Mandatory (e.g., `https://` or `ftp://`) |
| **Usage Scope**          | Tech frameworks, XML namespaces, schemas | Web browsing, API requests, hyperlinking |
The Third Sibling: URN

To understand URIs completely, it helps to look at the **URN (Uniform Resource Name)**. A URI is an umbrella term that encompasses both URLs and URNs: 

1. **URL** gives you the resource's location (e.g., _where_ the house is).
2. **URN** gives you the resource's unique name regardless of location (e.g., _who_ lives there). 

Examples in Action

- **`https://www.example.com/index.html`**
    - **Is a URL**: Yes, it specifies the web location and the `https` protocol.
    - **Is a URI**: Yes, because all URLs are inherently URIs. 
- **`urn:isbn:0-486-27557-4`**
    - **Is a URL**: No, you cannot type this into a browser to directly download a physical book file.
    - **Is a URI**: Yes, it is a URN, which is a valid type of identifier. 
- **`mailto:support@example.com`**
    - **Is a URL**: No, it designates an interaction method but doesn't map to a static web address destination.
    - **Is a URI**: Yes, it uniquely identifies an email resource destination. 

## Domain Names
Domain names are read from right to left, structured in a hierarchical system (DNS) from the broadest categories to specific locations on a server. A standard domain address consists of three main levels, working from right to left: ==the **TLD**, the **SLD**, and the **Subdomain**==.

### 1. Top-Level Domain (TLD)

The TLD is the segment of the domain name located to the far right of the final dot. It categorizes the domain by its general purpose, organization type, or country.

- **Generic TLDs (gTLDs):** Open extensions that denote the purpose of the site (e.g., .com for commercial, .org for organizations, .net for networks).
- **Country-Code TLDs (ccTLDs):** Two-letter extensions designated for specific countries or territories (e.g., .lk for Sri Lanka, .uk for the United Kingdom).]
- **Sponsored/Restricted TLDs:** Extensions restricted to specific entities (e.g., .edu for educational institutions, .gov for government).]

### 2. Second-Level Domain (SLD)

The SLD sits immediately to the left of the TLD and is the specific name that an individual or organization registers (e.g., "google" in `google.com`). This acts as the unique identifier for your brand, business, or project on the internet.

### 3. Third-Level Domain (Subdomain)

The third-level domain—commonly known as a subdomain—sits to the left of the SLD and is separated by a dot. It acts as an extension of the main domain, used to navigate users to specific, dedicated sections of a website (e.g., "support" or "blog" in `support.example.com` or `blog.example.com`).

### 4. Root Domain vs. Fully Qualified Domain Name (FQDN)

- **Root Domain:** The combination of your SLD and TLD (e.g., `example.com`), functioning as the base address of your website.
- **FQDN:** The absolute, complete address including subdomains (e.g., `www.example.com`) that precisely locates a specific server or resource.