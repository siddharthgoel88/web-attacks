# HTTP Parameter Tampering

### What is it?
This vulnerability allows tampering of the parameters which are sent between client and server for the attacker's advantage. In this bug, user input validation / restriction only happens (if happens) on the client side and server side validation is missing. This allows the attacker to manipulate the data and send the tampered data to the server.

### Attack vector
<Need to fill info here>

### How to prevent it?
- Only way to prevent it is by doing a server side validation of the input.
