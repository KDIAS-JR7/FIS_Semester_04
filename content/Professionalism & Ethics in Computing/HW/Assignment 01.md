# Windows Recall(2024-2026) - An ongoing case study on Privacy Violation

## 1)A brief introduction

- Windows Recall is a novel extension added to Microsoft Windows 11, introduced and compatible with the 'copilot+ PC' brand of new windows devices.

- The program periodically takes a screenshot of the users' current activity and stores them locally inside a separate SQLite database inside a hidden folder within the users' device.

- These screenshots are later used by the program to help users remember certain events such as web browsing activities by having Artificial Intelligence analyze them.

- However, this feature was considered a major violation of consumer privacy from the very moment it was revealed, resulting in push back, setbacks and restructuring multiple times, and yet, to this day it is a feature that many windows users see as a violation of their privacy and a security risk, rather than being a product that they're happy to use.

## 2)What went wrong

- Security issues

  -  As noted by many security researchers, windows recall has serious security vulnerabilities. Even though Microsoft claims that the screenshots are secure, multiple researchers have shown time and time again that this security can be easily breached. Ex: TotalRecall Reloaded is one such tool

- Opt-out rather than opt-in 

  - When introducing a new feature, especially one as controversial as Recall must be an *opt-in* feature, where only those who wants to use it will enable it. However, by design, Windows Recall was Opt-out; meaning users had to actively disable windows recall which was enabled without their consent.

- No guideline data collection 

  - Windows recall captures everything. Which includes screenshots of users banking details. This is a serious security threat, especially so as it is indeed proven that Recall has security vulnerabilities for data at rest.

## 3)Who was affected

- Direct users

  -  Users that actively used the service or users who bought a copilot+ PC and forgot to disable the opt-out feature.

- Third Parties 

  - Windows Recall has little to no guard rails. Therefore, third parties interacting with a Windows Recall user through a video conference platform risk having their data captured without their consent.

- Enterprises

  -  Due to the security vulnerabilities, Enterprises that enable Recall risk the threat of having their secrets exposed. Ex: Bring Your Own Device(BYOD) employees having Recall enabled.

## 4)Ethical Issues

1. Non-consensual nature Recall is enabled by default without user consent, therefore any screenshots it records before the user manages to disable it is a violation of the user's privacy.

2. Security Vulnerabilities Due to the security vulnerabilities present in Recall, it can once again cause privacy violations as well as lead to financial and emotional harm.

3. Lack of Accountability and Transparency Windows Recall source code is hidden by nature as it is proprietary software. Therefore, users have to believe Microsoft's claims at face value, without valid proof. Is it completely offline? Is data only processed on-device? This amount of transparency is not present in Recall.

## 5)Application of ACM principles

### Principle 1.2 Avoid harm - Violated

- Recall violates this principle as the vulnerabilities and nature of being opt-out, risks personal information, financial information  and mission critical information being leaked, resulting in emotional, financial and reputational harm.

### Principle 1.3 Be honest and trustworthy - Violated

- Microsoft did not disclose the issues and major vulnerabilities in Recall which were later discovered by third parties.

### Principle 1.6 Respect privacy - Violated

- Recall captures images of personal information, even from non consenting third parties automatically, violating privacy concerns.

## 6)Actions that should be taken

### Principle 1.2 Avoid harm

- Proactively work on increasing the security level of the product.

### Principle 1.3 Be honest and trustworthy

- Publicly disclose all capabilities and limitations upfront.

### Principle 1.6 Respect privacy

- Make the feature Opt-in by default, thereby respecting the user's consent and privacy.



# Bibliography

\[1\]

Wikipedia Contributors, “Windows Recall,” *Wikipedia*, Oct. 18, 2025.

\[2\]

Association for Computing Machinery, “ACM Code of Ethics and Professional Conduct,” *Association for Computing Machinery*, Jun. 22, 2018. [https://www.acm.org/code-of-ethics](https://www.acm.org/code-of-ethics)

\[3\]

K. Beaumont, “Recall: Stealing everything you’ve ever typed or viewed on your own Windows PC is now possible.,” *Medium*, Jun. 01, 2024. [https://doublepulsar.com/recall-stealing-everything-youve-ever-typed-or-viewed-on-your-own-windows-pc-is-now-possible-da3e12e9465e](https://doublepulsar.com/recall-stealing-everything-youve-ever-typed-or-viewed-on-your-own-windows-pc-is-now-possible-da3e12e9465e)

\[4\]

I. Williams, “Microsoft’s Recall tool is back and still has major security concerns — but the company denies any data risk,” *TechRadar*, Apr. 15, 2026. [https://www.techradar.com/computing/windows/microsofts-recall-tool-is-back-and-still-has-major-security-concerns-but-the-company-denies-any-data-risk](https://www.techradar.com/computing/windows/microsofts-recall-tool-is-back-and-still-has-major-security-concerns-but-the-company-denies-any-data-risk)

\[5\]

C. Quigley, “The ongoing controversy surrounding Microsoft’s Recall feature | SSLs.com Blog,” *SSLs.com Blog*, Aug. 23, 2025. [https://www.ssls.com/blog/the-ongoing-controversy-surrounding-microsofts-recall-feature/](https://www.ssls.com/blog/the-ongoing-controversy-surrounding-microsofts-recall-feature/) (accessed May 03, 2026).

z

