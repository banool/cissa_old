#!/usr/bin/env python3

import os
import sys

def printUsage():
    print(sys.argv[0] + ": 'to bak' or 'to normal'")
    sys.exit(1)

if len(sys.argv) == 2:
    arg = sys.argv[1]
else:
    printUsage()
if arg == "to bak":
    to_bak = True
    to_normal = False
elif arg  == "to normal":
    to_normal = True
    to_bak = False
else:
    printUsage()

for i in os.listdir():
    if os.path.isdir(i):
        if i.split(".")[-1] == "bak" and to_normal:
            #if to_normal:
            newName = "".join(i.split(".")[:-1])
        else:
            continue
        if to_bak:
            newName = i + ".bak"
        command = """ mv "{}" "{}" """.format(i, newName)
        print(command)
        os.system(command)
