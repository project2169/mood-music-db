from flask import Flask, render_template
import tensorflow as tf
import numpy as np
from tensorflow.keras.preprocessing import image 
import random
import pandas as pd
from resizer import detect_faces

import dlib
from PIL import Image
import skimage
from skimage import io
import cv2
import os

df = pd.read_csv('song_test.csv')

agemodel = tf.keras.models.load_model('best_model.h5')
moodmodel = tf.keras.models.load_model('best_mood_model.h5')
gendermodel = tf.keras.models.load_model('best_gender_model.h5')
app = Flask(__name__)


@app.route('/')
def h():
	return render_template('home.html')

@app.route('/predict', methods=['POST'])
def home():
	path='../local_stg'
	for i in os.listdir(path):
    
    	# Load image
	    img_path = path+'/'+i
	    dummy = io.imread(img_path)

	    # Detect faces
	    detected_faces = detect_faces(dummy)

	    # Crop faces 
	    for n, face_rect in enumerate(detected_faces):
	        
	        face = Image.fromarray(dummy).crop(face_rect)
	    
	        face.save('../moodmodel/local_stg/output.jpg')     # cropped is the folder in which the cropped faces will be saved.

	path1='../moodmodel/local_stg/output.jpg'

	img=cv2.imread(path1)

	width=200
	height=200

	imgR=cv2.resize(img,(width,height))
	print(imgR.shape)

	cv2.imwrite('../moodmodel/local_stg/output.jpg', imgR)

	cv2.waitKey(0)
	img_pred = image.load_img('../moodmodel/local_stg/output.jpg', target_size=(48, 48))
	img_pred = image.img_to_array(img_pred)
	img_pred = np.expand_dims(img_pred, axis=0)
	age_rslt = agemodel.predict(img_pred)
	mood_rslt = moodmodel.predict(img_pred)
	gender_rslt = gendermodel.predict(img_pred)
	print(gender_rslt)
	r1=np.argmax(gender_rslt)
	print(r1)

	if r1 == 0:
		gendervalue = "Female"
		maxgender_rslt = max(gender_rslt[0])
		print(gendervalue)
		print(maxgender_rslt)
		user_male_data = 0
		user_female_data = maxgender_rslt
	elif r1 == 1:
		gendervalue = "Male"
		maxgender_rslt = max(gender_rslt[0])
		print(gendervalue)
		print(maxgender_rslt)
		user_female_data = 0
		user_male_data = maxgender_rslt

	r2=np.argmax(mood_rslt)
	print(r2)

	if r2 == 0:
		moodvalue = "Happy"
		maxmood_rslt = max(mood_rslt[0])
		print(moodvalue)
		print(maxmood_rslt)
		user_neutral_data = 0
		user_happy_data = maxmood_rslt
	elif r2 == 1:
		moodvalue = "Neutral"
		maxmood_rslt = max(mood_rslt[0])
		print(moodvalue)
		print(maxmood_rslt)
		user_happy_data = 0
		user_neutral_data = maxmood_rslt


	r3=np.argmax(age_rslt)
	print(r3)

	if r3 == 0:
		agevalue = random.randint(1, 10)
		print(agevalue)
	elif r3 == 1:
		agevalue = random.randint(11, 20)
		print(agevalue)
	elif r3 == 2:
		agevalue = random.randint(21, 30)
		print(agevalue)
	elif r3 == 3:
		agevalue = random.randint(31, 40)
		print(agevalue)
	elif r3 == 4:
		agevalue = random.randint(41, 50)
		print(agevalue)
	elif r3 == 5:
		agevalue = random.randint(51, 60)
		print(agevalue)
	elif r3 == 6:
		agevalue = random.randint(61, 100)
		print(agevalue)

	user_test_arr = [user_neutral_data, user_happy_data, agevalue, user_male_data, user_female_data]
	print(user_test_arr)

	result =[]
	for x in range(74):
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

		distance = np.linalg.norm(np.array(user_test_arr) - np.array(arr_test))
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
	datanew = "S:/Mood Music/MoodMusic/music player/dark-light-musicplayer-master/index.html";
	dir = '../local_stg'
	for f in os.listdir(dir):
		os.remove(os.path.join(dir, f))
    	
	
	return render_template('song_temp.html', data=song)

if __name__ == "__main__":
	app.run(debug=True)