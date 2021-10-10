import http.client


conn = http.client.HTTPSConnection("notify-api.line.me")
payload = 'message=Hello%20OOOOOOOOOOOOOO'
headers = {
  'Content-Type': 'application/x-www-form-urlencoded',
  'Authorization': 'Bearer 7iZD4VDa5Fyh7aJmKTq5VAsQYUDHtSyHFhCuIdtEshG'
}
conn.request("POST", "/api/notify", payload, headers)
res = conn.getresponse()
data = res.read()
print(data.decode("utf-8"))