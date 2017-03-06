# Project 5 - Encryption

Time spent: 6 hours spent in total

## User Stories

The following **required** functionality is completed:

1\. Symmetric Encrypt/Decrypt
  * [X]  Required: Repair the symmetric encrypt and decrypt code

2\. Encrypted Message 1
  * [X]  Required: Decrypt the government message
    <br/>Decrypted Message: I heard about your current situation. Do you know who hacked APEX? -- The Chairman
  * [X]  Required: Encrypt a response and include in this README
    <br/>hyzpKFHLhGdFEljoHt4rE7jRxIefJ3Jzhf56ZaFGI1sw1Mpe7VF6t/Ap0mfx8SP48+T9uJpxbSvRAMu12B93nw==

3\. Generate Public-Private Keys
  * [X]  Required: Repair the key generator code
  * [X]  Required: Generate keys for "johnsteed" and add him to the Agent Directory

4\. Asymmetric Encrypt/Decrypt
  * [X]  Required: Repair the asymmetric encrypt and decrypt code

5\. Create/Verify Signature
  * [X]  Required: Repair the create and verify signature code
  
6\. Encrypted Message 2
  * [X]  Required: Decrypt the message
    <br/>Decrypted Message: Cannot access APEX from this location. Send new agent codename and public key so I can contact. Encrypt response to protect codename. Include signature to verify identity and message integrity. -- sydneybristow (VALID)
  * [X]  Required: Verify the message
  * [X]  Required: Include a response message in this README
    <br/>To: sydneybristow
    <br/>From: agent99
    <br/>Subject: Encrypted and Signed Response
    <br/>Body:
    <br/>       <br/>eHdRB0crImq6y2zdaZmjRlkspA9/Iaun5zIf2qtyAI/jpntFtpNn6/PKTWJdi35O160YCT6fUmcEuLLiXcVz0GYWKJBSye3hZA0OEhP/L2+Y++VZ8BlbVIwPcte5bsIJokuH8yD+IBdacDcHVgbLNU6qcMSdq85Ja85KQRjYUXR8HoDqFLhGyuQZZELM8fjgyDO0yQ0ZFDtY99laO8JIfUVsu/K3ZxHKi2j4MoYePakF7Q0R7yj6C6rVS8BzOVrMwTj9dFbC7uEdr7dSpjm81i6wYYMr50kVdn2HD4cPIhg20uUf/fJLi7J3TksF/noxlznWJflWzyPsGxtuIganlQ==<br/>
  <br/>The public key is:  
  <br/>-----BEGIN PUBLIC KEY----- 
  MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAmlti5rcUMe35U29WncQM/sEIc8qwQbRrBKaxa2A1MqW2tk9QC/4JHVRsloAFf030ywh8SNV3EZTBS9xmJyS0b19KKF6E8djnLjoLSCYSSfqQu+M1SgLiEFxyvnyByo26hZ14/k/vI+S/VahId9S3A4/GDvHOCxRtKBcDdr/3O1cYr73n8S2Jv/D3MZx8l47S1/pfTZrd4aS6wREZUkbtSYcI6zg2bJdHcbLfgb+t8af9cvV6B179MRglv204WweVPBSzS8f1sq9YDF8llBRHsjXx3xaRwhNZgzxuLnjfd5xN8I1P028tk0tKatBb0+Y745ZISpXSd3lrOPNA48k3wwIDAQAB
  -----END PUBLIC KEY-----</br>
    <br/>Signature:<br/>feJuyQ31n4iAo8JvHbuftBs3aBLK2Psjh+1Ges/f1GA+//VJgbWPeH4JtwXGBFqBfqsIjJBa3Mtma7E/C4bPw8LVVNxnLvrUcIhndVd8aT29AFnKnO9xTDcgP1cb3wma4g+Fp/O6GG2aifffk2C25HkysMKVbu2+6AlzB0dxCDuw8cPgDC25qdPwn9sNuKnJcf7+hwcemwAZnUwNMZApooQGeolpjsvaZ5Tk6FftDjmZ/NoiqHRd61Eoh0brbQ65v2fSBuSPbEMculY648nnrKi/c+YE0Ri9QxD8hLB/nAWkmNOcUWTtr9/ZNlKe9O7gZZdzoa9OMC7FIigdZn8mfw==<br/>

7\. Agent Messages
  * [X]  Required: Repair the dropbox code
  * [X]  Required: Repair the messages area
  * [X]  Required: Display encrypted messages for all agents
  * [X]  Required: Messages indicate whether the message signature is valid
  * [X]  Required: Your messages are automatically decrypted

8\. Identify the Double Agent
  * [X]  Required: Decrypt as many email messages as possible
    <br/>email_01: The SQL injection we discussed is in place. Just search for an agent. (VALID)
    <br/>email_03: Today I was able to sneak several XSS vulnerabilities onto one of the encrypt/decrypt pages. (VALID)
    <br/>email_05: Let me know before you go inside. I'll create a distraction. - Austin (INVALID)
    <br/>email_06: Let me know before you go inside. I'll create a distraction. - Natasha (VALID)
  * [X]  Required: Identify the double agent: Natasha

The following objectives are **optional**:

* Bonus Objective 1\.
  * [X]  Track down the bugs in the code and fix them.
       <br/>1 SQL bug found in function find_agent_by_id() in query_functions.php (Escape Strings)
       <br/>6 XSS bugs found in symmetric_encryption.php (Sanatize Output)

* Bonus Objective 2\.
  * [ ]  Write a report of your discoveries (longer than 300 characters).
  * [ ]  Compose a secure email for sending over an insecure network.
  * [ ]  Include the email with your encrypted report in this README.

* Bonus Objective 3\.
  * [ ]  Add a "Create/Verify Checksum" section to the Encryption Tools area.

* Advanced Objective 1\.
  * [X]  Add support for other symmetric algorithms.
       <br/>Support for AES-256-CBC, AES-128-CBC, AES-192-CBC, DES-EDE3-CBC

## Video Walkthrough

Here's a walkthrough of implemented user stories:

<img src='apex/apex_week5.gif' title='Video Walkthrough' width='' alt='Video Walkthrough' />

GIF created with [LiceCap](http://www.cockos.com/licecap/).

## Notes

Describe any challenges encountered while building the app.

## License

    Copyright [2017] [Matthew Blumen]

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.
