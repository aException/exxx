#Create employee dataset having 5 columns namely:empid,ename,age,salary,Purchased
#Build a polynomial model that can predict whether on thegiven parameter a person will buy a car or not

import numpy as np
import matplotlib.pyplot as plt
import pandas as pd
employee={'eid':[1,2,3,4,5],'ename':['aa','bb','cc','dd','ee'],'age':[29,33,45,65,58],
          'salary':[100000,200000,130000,150000,140000],'purchase':[1300000,2000000,1450000,2300000,2100000]}
df=pd.DataFrame(employee)
A=df['salary']
B=df['purchase']
degree=2
poly_fit=np.poly1d(np.polyfit(A,B,degree))
ab=np.linspace(0,250000,500000)
plt.plot(ab,poly_fit(ab),c='r',linestyle='-')
plt.title('Polynomial')
plt.xlabel('[100000,200000,130000,150000,140000]')
plt.ylabel('[1300000,2000000,1450000,2300000,2100000]')
plt.grid(True)
plt.scatter(A,B)
plt.show()