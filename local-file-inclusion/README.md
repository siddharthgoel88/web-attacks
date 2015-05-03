# Local file inclusion

### What is it?
This bug allows an attacker to expose a file existing locally on the server where the application is hosted. This mostly happens due to missing/buggy input validation. [Owasp] says that, it can also lead to:
- Code execution on the web server
- Code execution on the client-side such as JavaScript which can lead to other attacks such as cross site scripting (XSS)
- Denial of Service (DoS)
- Sensitive Information Disclosure

### Attack vector
<Need to fill info here>


[owasp]:https://www.owasp.org/index.php/Testing_for_Local_File_Inclusion