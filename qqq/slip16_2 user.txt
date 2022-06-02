import numpy as np
import pandas as pd
import matplotlib.pyplot as plt
import seaborn as sn
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LogisticRegression
from sklearn import metrics
user={'user_id':[101,102,103,104,105],'gender':['male','male','male','male','male'],'age':[41,50,29,33,43],'estimated_salary':[50000,10000,40000,30000,66000],'purchased':[100000,200000,150000,300000,125000]}
df=pd.DataFrame(user)
print(df)
X=df[['age','estimated_salary']]
Y=df['purchased']
X_train,X_test,y_train,y_test=train_test_split(X,Y,test_size=0.25,random_state=0)
regressor=LogisticRegression()
regressor.fit(X_train,y_train)
y_pred=regressor.predict(X_test)
confusion_matrix=pd.crosstab(y_test,y_pred,rownames=['Actual'],colnames=['Predicted'])
sn.heatmap(confusion_matrix,annot=True)
print("Accuracy Is:",metrics.accuracy_score(y_test,y_pred))
plt.show()