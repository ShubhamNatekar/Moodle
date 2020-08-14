import codecs
import re
import os
path = "hi/"
to_path="sn/"
count=0
def get(string,name):
    i=0;
    t=""
    with codecs.open(to_path+name,"a", encoding='utf-8') as f:
        f.seek(0)
        f.truncate()
        global count
        count+=1
        while i in range(len(string)):
            if string[i] == '=':
                i+=1
                while string[i]!=';':
                    t+=string[i]
                    i+=1
                f.write(t.strip(" ").strip("'") +"\n")
                t=""
            i+=1
        print(count,name,"file created")
        f.close()


def main(fname,name):    
    with codecs.open(path+fname, encoding='utf-8') as f:
        all_lines = ",".join(f.readlines()[27:])
        get(all_lines,name)
 
 
files = os.listdir(path)
for f in files:
    if '.php' in f:
        name,ext=f.split('.')
        if ext=='php':
          main(f,name)

print("all files created in 'sn' dir")       
