import sys
orig_stdout = sys.stdout
pytho = open('next.py', 'w')
print ('==> Tbadel 6 Project coded by Khalid <==' + '\n')

number = set()
el = 'Khalid'

while (el != 'end' and el != 'End' and el != 'END'):
  number.add(el)
  el = str(input('Type Element(s) then Type End :'))
else:
  number=list(number)
  number.remove("Khalid")
  number.sort()
  
while True:
    try:
         
        
        boxs = int(input('Inter boxs :'))
        break
    except ValueError:
        print("Oops!  That was no valid number.  Try again...")

#

sys.stdout = pytho
print ('\n#\n#\n#\n')

print ('''import sys
orig_stdout = sys.stdout
f = open('out.txt', 'w')
''')
print ('number = ',end='')
print (number)
print ('boxs = ',end='')
print (boxs)

print('\n'+'\n'+'\n'+'\n')


space = ' '
print ('def boxs' + str(boxs) +'():')
print (3*space + r"print ('Number of possibilities is ' , len(number)**int(boxs) , '\n...')")
for i in range(0,boxs):
  print( (i+3) *space + r'for n' + str(i+1) + r' in range(0,len(number)):')

print ( (boxs+3) *space + 'sys.stdout = f')
print ( (boxs+3) *space + 'print ( number[n1]',end = '')
for i2 in range(2,boxs+1):
  print (  ('+number[n' + str(i2)) + ']' ,end = '')
print (' )')
print( (boxs+3) *space + 'sys.stdout = orig_stdout')
print ('\n#\n#\n#\n')
print( 3*space + "print ('We are Finish')")
print('\n'+'\n'+'\n'+'\n')

print ('boxs'+ str(boxs) +'()')

sys.stdout = orig_stdout

#

pytho.close()
import next

