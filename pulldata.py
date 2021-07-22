import httplib2
import time

while True:
	h = httplib2.Http(".cache")
	(resp, content) = h.request("http://203.154.82.59/server-status?auto", "GET")
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
	24-03-2021,10:05:00
	Total Accesses: 520
	Total kBytes: 4557
	CPULoad: .00701379
	Uptime: 8412
	ReqPerSec: .0618165
	BytesPerSec: 554.728
	BytesPerReq: 8973.78
	BusyWorkers: 1
	IdleWorkers: 49
'''