
    
import pandas as pd
import numpy as np
import matplotlib.pyplot as plt
import joblib

#bankdata=pd.read_csv("/var/www/html/audio_features.csv")
#print(bankdata)

#X = bankdata.drop('Class', axis=1)
#y = bankdata['Class']

#from sklearn.model_selection import train_test_split
#X_train, X_test, y_train, y_test = train_test_split(X, y, test_size = 0.20)

from sklearn.svm import SVC
#svclassifier = SVC(kernel='linear')
#svclassifier.fit(X_train, y_train)

filename = '/var/www/html/finalized_model.sav'
#joblib.dump(svclassifier, filename);

#y_pred = svclassifier.predict(X_test)

#from sklearn.metrics import classification_report, confusion_matrix
#print(confusion_matrix(y_test,y_pred))
#print(classification_report(y_test,y_pred))

svclassifier=joblib.load(filename)

#Andersen
#print(svclassifier.predict([[-3.296090508,-29.17105933,-1.007285006,-1.365732046,1.414665719,1.248863183,0.838493806,-0.241041397,-0.430111557,0.245898061,0.380629933,0.585287614,0.254825985,-0.041688799,-3.296090508,-21.26623669,5.361545115,0.119991682,0.217134085,-0.514848429,-0.530024733,-0.853442389,-0.374985645,-0.437451155,-0.319972303,-0.249135577,-0.278991214,-0.356535915,0.028521787,0.028521787,16.2903276,0.650441932,0.358511618,0.003933192,1403.507967,882.6576956,15.79867614,-2.78592E-07,322.7887763,322.7887763,-0.278991214,-0.356535915]])[0])

#Andy Lu
#print(svclassifier.predict([[-5.4153709,-32.32711449,-1.064727074,-0.861327057,1.206807952,1.466852307,0.806540694,0.044980201,-0.139232633,0.239782274,0.491273913,0.593990761,0.162565292,0.069988805,-5.4153709,-24.21802555,4.519516445,0.785614845,0.349336964,-0.045802179,-0.65532286,-0.609364603,-0.828116076,-0.400084639,-0.403483356,-0.313073279,-0.243388939,-0.263006787,0.002017291,0.002017291,18.78698684,0.758934851,0.285548859,0.003477824,5072.367392,635.9774204,42.70370006,-2.12227E-08,298.2898814,297.1821987,-0.244965313,-0.2615681]])[0])

#Andy J
#print(svclassifier.predict([[-6.072303441,-33.63772525,-1.015066549,-0.916792233,1.151356901,1.23284318,0.902794351,0.215752353,0.099621932,0.305686756,0.545448612,0.59902757,0.269786977,-0.013996621,-6.072303441,-25.50632287,4.241637748,1.067572861,0.37897544,0.272916094,-0.522899887,-0.513328363,-0.768622076,-0.558376279,-0.560725725,-0.318563467,-0.203930552,-0.169418839,0.000453357,0.000453361,20.36936262,0.809755099,0.227322234,0.002806727,9745.715509,308.3815437,71.77429401,-3.86899E-09,201.4011001,201.9406302,-0.203239721,-0.17013349]])[0])

#Patrik
print(svclassifier.predict([[-4.042396993,-30.70641572,-1.251496733,-1.052361045,1.228091133,1.37046533,1.175194895,-0.090495475,-0.182776922,0.247280874,0.522905902,0.579829287,0.19484607,0.003627898,-4.042396993,-22.70228093,5.044429903,0.310205007,0.718475729,-0.355101223,-0.352958365,-0.808809863,-0.575513412,-0.704966379,-0.338626418,-0.184342202,-0.23567176,-0.294219195,0.014192126,0.014192126,18.95949775,0.764842903,0.283771026,0.004135907,2591.8553,647.1349735,25.41964437,-1.22142E-07,254.8586622,254.8586622,-0.23567176,-0.294219195]])[0])

#Kyle
#print(svclassifier.predict([[-3.632668168,-29.31209983,-1.180959809,-1.454209928,1.70037951,1.588308444,0.632057789,-0.125642643,-0.392004196,0.206064108,0.352833641,0.498698428,0.203512527,-0.145838727,-3.632668168,-21.45401598,5.265105535,-0.250323334,0.3851218,-0.4999078,-0.557672287,-1.18043044,-0.549317642,-0.302492257,-0.254805388,-0.280624659,-0.263288857,-0.320454224,0.009878932,0.009878932,15.51069043,0.643280615,0.378061296,0.003715198,729.6579032,1001.012573,11.47736403,-1.30669E-07,385.8405267,385.8405267,-0.263288857,-0.320454224]])[0])

