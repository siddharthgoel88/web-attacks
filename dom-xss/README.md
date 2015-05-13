# DOM Based XSS

### What is it?
This is a special kind of XSS attack in malicious code/script in not injected into the page/application. Instead it is a client side attack in which the malicious code/script runs on the client side on the page loaded by the server and server never gets to know it. The fact that server never gets to know about
this makes this attack more dangerous. Currently a major section of the websites are affected by this vulnerability.

### Diagram
Need to add diagram !!

### Attack vector
Need to fill info here !!

### How to Prevent it?
- Safe coding is the only elegant way to prevent this attack. Avoid the use of following HTML rendering methods :-
    - element.innerHTML
    - element.outerHTML
    - document.write()
    - document.writeln()
- Do not pass the user input or any untrusted source of data to eval().

#### Sources
- https://www.owasp.org/index.php/DOM_based_XSS_Prevention_Cheat_Sheet
