#Create ‘student’ Data set having 5 columns namely: RollNo,
# Name, Gender, Age ,Class. Build a logistic
# regression model that can predict whether on the given parameter a student will TY class or not.

import numpy as np
import pandas as pd
import matplotlib.pyplot as plt
import seaborn as sn
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LogisticRegression
from sklearn import metrics
student={'rollno':[101,102,103,104,105],'name':['aa','bb','cc','dd','ee'],
         'gender':['male','male','male','male','male'],'age':[41,50,29,33,43],
         'class':['ty','sy','fy','ty','fy']}
df=pd.DataFrame(student)
print(df)
X=df[['rollno']]
Y=df['age']
X_train,X_test,y_train,y_test=train_test_split(X,Y,test_size=0.25,random_state=0)
regressor=LogisticRegression()
regressor.fit(X_train,y_train)
y_pred=regressor.predict(X_test)
confusion_matrix=pd.crosstab(y_test,y_pred,rownames=['Actual'],colnames=['Predicted'])
sn.heatmap(confusion_matrix,annot=True)
print("Accuracy Is:",metrics.accuracy_score(y_test,y_pred))
plt.show()