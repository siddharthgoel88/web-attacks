# Local file inclusion

### What is it?
This bug allows an attacker to expose a file existing locally on the server where the application is hosted. Main reason for this vulnerability is using usr input data for including of a file. [Owasp] says that, it can also lead to:
- Code execution on the web server
- Code execution on the client-side such as JavaScript which can lead to other attacks such as cross site scripting (XSS)
- Denial of Service (DoS)
- Sensitive Information Disclosure

### Attack vector
<Need to fill info here>

### How to prevent it?
- Best way is by NOT using the input parameter from client/user to include a file.
- Input validation is another approach. But this is not the advisable approach because there may be corner cases which might be missed in the validation.

[owasp]:https://www.owasp.org/index.php/Testing_for_Local_File_Inclusion
