with open("pulldata.txt", mode="r") as f:
    for line in f.readlines():
        with open("pulldata-new.txt", mode="a+") as new_file:
            #new_file.write(line)
            new_line=line.split(': ')
            new_file.write((new_line[-1]))