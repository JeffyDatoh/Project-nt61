import httplib2
import time

while True:
	h = httplib2.Http(".cache")
	(resp, content) = h.request("http://203.150.107.224/server-status", "GET")
	raw_content = content.decode("utf-8")
	new_content = raw_content.splitlines()

	localtime = time.localtime()
	result = time.strftime("%d-%m-%Y,%I:%M:%S", localtime)


	data13= new_content[13].split(': ')
	data14= new_content[14].split(': ')
	data19= new_content[19].split(': ')
	data20= new_content[20].split(': ')
	data21= new_content[21].split(': ')
	data22= new_content[22].split(': ')
	data23= new_content[23].split(': ')
	data24= new_content[24].split(': ')
	data25= new_content[25].split(': ')


	f = open("pulldata-score.txt", mode="a+")
	f.write(result+"\n")
	f.write(data13[1]+"\n")
	f.write(data14[1]+"\n")
	f.write(data19[1]+"\n")
	f.write(data20[1]+"\n")
	f.write(data21[1]+"\n")
	f.write(data22[1]+"\n")
	f.write(data23[1]+"\n")
	f.write(data24[1]+"\n")
	f.write(data25[1]+"\n")
	f.write("\n")
	f.close()

	print (result)
	print (data13[1])
	print (data14[1])
	print (data19[1])
	print (data20[1])
	print (data21[1])
	print (data22[1])
	print (data23[1])
	print (data24[1])
	print (data25[1])

	time.sleep(300)
