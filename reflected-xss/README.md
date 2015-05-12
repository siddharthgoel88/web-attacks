# Reflected XSS

### What is it?
As the name suggests, in this attack the attack payload goes to the server through the victim's browser as request and in response returns a page which contains the malicious script. The attack payload hence runs of the victim's browser and sends sensitive information (mostly cookies) to the attacker.

The attacker can be very innovative in sending that malicious link to the victim. So of the famous channels are phishing e-mails, advertisements on malicious
 websites, etc.

### Diagram
Need to all diagram !!

### Attack vector
Need to fill info here !!

### How to Prevent it?
- Sanitize input and output.
- XSS auditor of different browser try to detect it stop. But no browser does it full-proof. Check out [this].
- The most common use-case of XSS is to steal cookie. You can make your cookies as [HTTP-ONLY] which will avoid Javascript from access the cookie.

[this]:http://blog.securitee.org/?p=37
[HTTP-ONLY]:https://www.owasp.org/index.php/HttpOnly
