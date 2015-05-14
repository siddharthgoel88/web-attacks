# Remote file inclusion

### What is it?
This bug is conceptually very similar to Local file inclusion. In this bug an attacker can include a remote file into an application which was actually not the intention of the application. Main reason for this vulnerability is using user input data for including of a file.

RFI might result to :-
- Cookie and sensitive information stealing
- Phishing attack and stealing of user credentials

### Attack vector
<Need to fill info here>

### How to prevent it?
- Best way is by NOT using the input parameter from client/user to include a file.
- Input validation is another approach. Whitlisting approach should be taken instead of blacklisting.

