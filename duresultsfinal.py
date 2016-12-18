import requests
from bs4 import BeautifulSoup as bs
src=requests.get("http://www.du.ac.in/du/index.php?page=students-welfare").text
soup=bs(src,"html.parser")
soup1=soup.find_all('div',class_="block")[1]          
soup2=soup1.find_all('a') 
file1=open('undergradresults.txt','w+')
counter=0
for i in soup2:
     link=i["href"]
     src2=requests.get(link).text
     soup3=bs(src2,"html.parser")
     soup4=soup3.find_all("div",class_="content-inner grid_12")[1].find_all("a")[0]
     linkf=soup4["href"]
     file1.write('\nhttp://www.du.ac.in/du/%s'%linkf)
     counter=counter+1
     print counter
 
file1.close()
