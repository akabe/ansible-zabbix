# ansible-zabbix

Launch Zabbix server and agent by ansible

```
pip install zabbix-api
ansible-playbook --private-key ~/.ssh/your-key.pem zabbix.yml
```

hosts:

```
[zabbix-server]
10.0.0.1

[zabbix-agent]
10.0.0.2
```
