# Unvalidated redirects and forwards 

### What is it?
[OWASP] says that it is linking to a destination without proper validation that leads to unauthorized page. Attacker might redirect victim to phishing webpage and steal the credentials.

### Attack vector
Need to fill info here !!

### How to Prevent it?
- From security perspective, redirects should not be used in websites.
- If redirects are necessary, then try providing the direct links instead of calculating the destination.
- If direct links also could not be used, then do the manipulation on server-side with proper validation.
- Users of a website should pay attention to the URL before clicking.

### Sources
https://www.owasp.org/index.php/Top_10_2013-Top_10
http://www.slideshare.net/ShaneStanley/a10-unvalidated-redirects
https://www.owasp.org/index.php/Top_10_2010-A10-Unvalidated_Redirects_and_Forwards

[OWASP]:https://www.owasp.org/index.php/Top_10_2013-Top_10

