import codecs
import re
import os
path = '.'
def get(string,name):
    i=0;
    sents=[]
    t=""
    with codecs.open("lp/"+name,"a", encoding='utf-8') as f:
        f.seek(0)
        f.truncate()
        while i in range(len(string)):
            if string[i] == '=':
                i+=1
                while string[i]!=';':
                    t+=string[i]
                    i+=1
                sents.append(t.strip(" ").strip("'"))
                print("--",t.strip(" ").strip("'"))
                f.write(t.strip(" ").strip("'"))
                t=""
            i+=1
        f.close()


def main(fname,name):    
    with codecs.open(fname, encoding='utf-8') as f:
        all_lines = ",".join(f.readlines()[27:])
        get(all_lines,name)
 
 
files = os.listdir(path)
for f in files:
    if '.' in f:
        name,ext=f.split('.')
        if ext=='php':
          main(f,name)

       
