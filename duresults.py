import requests
from bs4 import BeautifulSoup as bs
soup=bs(src,"html.parser")
soup1=soup.find_all('div',class_="block")[1]          
soup2=soup1.find_all('a') 
for i in soup2:
     link=i["href"]
     src2=requests.get(link).text
     soup3=bs(src2,"html.parser")
     soup4=soup3.find_all("div",class_="content-inner grid_12")[1].find_all("a")[0]
     linkf=soup4["href"]
     file1.write('\n%s'%linkf) 
     file1.close()
