`{'role': 'assistant', 'content': "**Blocking YouTube on a Cisco Switch for VLAN 10 using Named ACLs**\n\n**Step 1: Enable the Switch Command Line Interface (CLI)**\n`  
`\n1. Connect to the switch using a console cable or remotely through SSH.\n2. Log in to the switch with your username and password.\n3. Enter enable mode by typing t`  
`he command enable and press Enter.\n4. Enter the enable password by typing password and press Enter (if you have set a password).\n\n**Step 2: Create a New VLAN`  
`(if not already created)**\n\n1. Create a new VLAN (VLAN 10) by typing the command vlan 10 and press Enter.\n2. Description the VLAN by typing name VLAN-10 and p`  
`ress Enter.\n\n**Step 3: Create a Named Access Control List (ACL)**\n\n1. Create a new named ACL by typing the command ip access-list extended BLOCK-YOUTUBE and pr`  
`ess Enter.\n2. Enter the command permit udp any any eq 53 to allow DNS traffic to pass through (if you want to allow DNS traffic).\n3. Enter the command deny tcp`  
`any any eq 443 to block YouTube traffic (HTTPS).\n4. Enter the command deny tcp any any eq 5228 to block YouTube traffic (COMET Protocol).\n5. Enter the command `  
`deny tcp any any eq 443 to block YouTube traffic (HTTPS) again (to ensure it's blocked).\n6. Enter the command deny udp any any eq 1935 to block YouTube traffic (`  
`RTMPE protocol).\n7. Enter the command deny udp any any eq 1937 to block YouTube traffic (RTMPT protocol).\n8. Enter the command deny udp any any eq 443 to block`  
`YouTube traffic (RTMP protocol).\n9. Enter the command deny udp any any eq 232 to block other YouTube traffic.\n10. Enter the command deny tcp any any eq 80 to`  
`block YouTube traffic (HTTP).\n\n**Step 4: Apply the Named ACL to VLAN 10**\n\n1. Go to VLAN configuration mode by typing the command vlan 10 and press Enter.\n2.`  
`Apply the named ACL by typing the command ip access-group BLOCK-YOUTUBE in and press Enter.\n\n**Step 5: Verify the Configuration**\n\n1. Verify the VLAN configura`  
`tion by typing the command show vlan and press Enter.\n2. Verify the named ACL by typing the command show ip access-list extended BLOCK-YOUTUBE and press Enter.\`  
`n\n**Step 6: Save the Configuration**\n\n1. Save the configuration by typing the command copy running-config startup-config and press Enter.\n\n**Note:** Make sure`  
`to replace the IP addresses with the actual IP addresses of the YouTube servers. Also, be aware that blocking YouTube traffic may not be effective due to its extens`  
`ive use of multiple protocols and ports.\n\n**Example Output:**\n\n``\nVLAN 10\n  Name: VLAN-10\n  VLAN ID: 10\n\nip access-list extended BLOCK-YOUTUBE\n     permit`  
`udp any any eq 53\n     deny tcp any any eq 443\n     deny tcp any any eq 5228\n     deny tcp any any eq 443\n     deny udp any any eq 1935\n     deny udp any any e`  
`q 1937\n     deny udp any any eq 443\n     deny udp any any eq 232\n     deny tcp any any eq 80\n\nvlan 10\n  ip access-group BLOCK-YOUTUBE in\n``\n\n**Verify the C`  
`onfiguration:**\n\n``\nshow vlan\n\nVLAN 10\n  Name: VLAN-10\n  VLAN ID: 10\n\nshow ip access-list extended BLOCK-YOUTUBE\n\nip access-list extended BLOCK-YOUTUBE\n`  
    `permit udp any any eq 53\n     deny tcp any any eq 443\n     deny tcp any any eq 5228\n     deny tcp any any eq 443\n     deny udp any any eq 1935\n     deny ud`  
`p any any eq 1937\n     deny udp any any eq 443\n     deny udp any any eq 232\n     deny tcp any any eq 80\n``"}`