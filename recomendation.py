#from agemodel.new_age import agevalue

#print(agevalue)
import pandas as pd

df = pd.read_csv('song_test.csv')

#print(df)
#['Song Names', 'neutral', 'happy', 'age', 'male', 'female']
#import csv
import numpy as np

#with open('newsongdata.csv') as f:
    #reader = csv.reader(f)
    #data = list(reader)

#print(data)

modelarr = ['0.937', '0', '21', '0.99', '0']

#for x in data:
	#distance = np.linalg.norm(np.array(['0.937', '0', '21', '0.99', '0']) - np.array(x))
	#print(x)

#point_a = np.array([0, 0, 0])
#point_b = np.array([1, 1, 1])
#distance = np.linalg.norm(point_a - point_b)
#print(distance)

data = df['neutral'].tolist()
#print(data)


result =[]
for x in range(44):
	data1 = df['neutral'][x].tolist()
	#print(data1)
	data2 = df['happy'][x].tolist()
	#print(data2)
	data3 = df['age'][x].tolist()
	#print(data3)
	data4 = df['male'][x].tolist()
	#print(data4)
	data5 = df['female'][x].tolist()
	#print(data5)
	#x=x+1

	arr_test = [data1, data2, data3, data4, data5]
	#print(arr_test)

	distance = np.linalg.norm(np.array([0.937, 0, 21, 0.99, 0]) - np.array(arr_test))
	print(distance)
	result.append(distance)

rslt = sorted(result)
print(result)
sorted_rslt = rslt[0]
print(sorted_rslt)
test_index = result.index(sorted_rslt)
print("songs is: ")
song = df['Song Names'][test_index]
print(song)