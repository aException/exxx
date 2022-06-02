import numpy as np
import pandas as pd
import matplotlib.pyplot as plt
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LinearRegression
sales={'id':[101,102,103,104,105,106,107,108,109,110],
       'Name':['aa','bb','','vv','bb','mm','kk','ll','uu','pp'],
       'age':[11,22,22,3,44,55,66,77,99,123],
        'address':['aa','kk','zz','qq','pp','zz','az','yz','pkmkb','ckmkb'],
        'purchases':[100,200,321,300,400,500,600,700,765,800]}
df=pd.DataFrame(sales)
A=df['id']  #independent variables
B=df['purchases']    #dependent variables
from sklearn.model_selection import train_test_split
X_train,X_test,y_train,y_test=train_test_split(A,B,test_size=1/3,random_state=0)
from sklearn.model_selection import LinearRegression
regressor=LinearRegression()
regressor.fit(X_train,y_train)
y_pred=regressor.predict(X_test)
plt.scatter(X_train,y_train,color='Green') #plot for the train data
plt.plot(X_train,regressor.predict(X_train),color='red')
plt.xlabel(A)
plt.ylabel(B)
plt.show()

plt.scatter(X_test,y_test,color='Green') #plot for the test data
plt.plot(X_train,regressor.predict(X_train),color='red')
plt.xlabel(A)
plt.ylabel(B)
plt.show()