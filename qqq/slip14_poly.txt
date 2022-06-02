#Consider a data X=[2,4,9,11,19 and Y=[2,1,13,20,44,74]]
#Build a Simple polynomial regression model that can predict whether a data will plot or not.
import numpy as np
import matplotlib.pyplot as plt
x=[2,4,9,11,15,19]
y=[2,1,13,20,44,74]
degree=2
poly_fit=np.poly1d(np.polyfit(x,y,degree))
ab=np.linspace(0,26,100)
plt.plot(ab,poly_fit(ab),c='r',linestyle='-')
plt.xlabel('X')
plt.ylabel('Y')
plt.axis([0,25,0,100])
plt.grid(True)
plt.scatter(x,y)
plt.show()
print(poly_fit(14))