import requests
import httplib2
import time

'''
h = httplib2.Http(".cache")
(resp, content) = h.request("http://203.150.107.224/server-status?auto", "GET")
raw_content = content.decode("utf-8")
new_content = raw_content.splitlines()
'''

localtime = time.localtime()
result = time.strftime("%d-%m-%Y,%I:%M:%S", localtime)



url = "https://notify-api.line.me/api/notify"

#payload='message= {}\n'.format(result,)
payload= 'message=\n\t\t\t!! Alert !!\n Date: 24-03-2021\n Time: 10:43:31\n Problem: มีจำนวน Request ผิดปกติ\n Total Accesses: 338 '
headers = {
  'Content-Type': 'application/x-www-form-urlencoded',
  'Authorization': 'Bearer QcArUmjT0giVZ3VeouoBRlef1aMCU7IUFTfUXxokaMV'
}

response = requests.request("POST", url, headers=headers, data=payload, encode='utf-8')

print(response.text)
