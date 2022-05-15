#!/usr/bin/env python3
#вывод в таблицу
import cgi,os
import cgitb; cgitb.enable()
form = cgi.FieldStorage()         # извлечь данные из формы
print("Content-type: text/html\r\n\r\n")  # плюс пустая строка
print("""
<html>
  <head>
    <meta harset=UTF-8" />
    <title>Zvuko-обработка</title>
    <link type="text/css" rel="stylesheet" href="\\styles\\style.css"/>
  </head>
  <body>""")

html1 = """
<h1>Анкета пользователя</h1>
<table border =2> <tr>
"""
print (html1)
# печать заголовка таблицы
ll = ['Имя','Опыт работы','Должность', 'Программа','Комментарий']
for head in ll:
    ss = '<td>'+head+'</td>'
    print ( ss)
print ('</tr> <tr>')

data = ['','','','',''];    i=0
for field in ('name', 'experience', 'job', 'program', 'comment'):
    if not field in form:
        data[i] = '(unknown)'
    else:
        if not isinstance(form[field], list):
            data[i] = form[field].value
        else:
            values = [x.value for x in form[field]]
            data[i] = ' and '.join(values)
    i+=1
for el in data:
   print ('<td> %s </td>'% el)

print ('</tr> </table>')


myfile = open("data//data.txt", "a")
myfile.write("%s\n" % " ")
with myfile:
 for item in data:
    myfile.write("%s\n" % item)
myfile.close()

print("""</body>
       </html>""")