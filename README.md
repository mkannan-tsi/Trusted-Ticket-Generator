# Trusted-Ticket-Generator
PHP Script to generate a ticket to redeem a view on Tableau Server from a trusted web server

Place this script in the web root folder of the trusted web server, and generate a request from a client that can access the same. Your request must have the following parameters -
1. server - Tableau Server URL
2. username - Tableau Server username
3. target_site - Site ID (if it is not Default)
