import httplib2
import time

while True:
	h = httplib2.Http(".cache")
	(resp, content) = h.request("http://203.150.107.224/server-status?auto", "GET")
	raw_content = content.decode("utf-8")
	new_content = raw_content.splitlines()

	localtime = time.localtime()
	result = time.strftime("%d-%m-%Y,%I:%M:%S", localtime)

	print (result)
	print (new_content[13])
	print (new_content[14])
	print (new_content[19])
	print (new_content[20])
	print (new_content[21])
	print (new_content[22])
	print (new_content[23])
	print (new_content[24])
	print (new_content[25])
	print ()
	time.sleep(300)
	
'''
28-07-2021,07:45:20
Total Accesses: 3
Total kBytes: 5
CPUChildrenSystem: 0
CPULoad: .0128535
Uptime: 389
ReqPerSec: .00771208
BytesPerSec: 13.162
BytesPerReq: 1706.67
DurationPerReq: 1.33333
'''