# Remote Code Execution / Command Injection

### What is it?
This bug allows an attacker to run code or commands on the server on which the application is hosted. In most of the cases the reason for this vulnerability is use of unvalidated input (forms, cookie, HTTP header, etc.) from user to execute some command on the system shell on server-side.

### Attack vector
<Need to fill info here>

### How to prevent it?
- Special care should be taken for the parameters passed to system commands. Ideally user input should not be passed to system command. 
- If one needs to pass a user input to system command the data validation needs to be done. Also remember in security one should follow the approach of whitelisting instead of blacklisting.

##### Sources :
https://www.owasp.org/index.php/Command_Injection
https://www.owasp.org/index.php/PHP_Top_5
