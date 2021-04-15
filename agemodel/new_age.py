import os
import pathlib
import numpy as np
import random
import tensorflow as tf
from tensorflow.keras.layers.experimental.preprocessing import Rescaling
from tensorflow.keras.layers import Conv2D, MaxPooling2D, Flatten, Dense, Dropout, BatchNormalization, InputLayer
from tensorflow.keras.optimizers import Adam
from tensorflow.keras.losses import CategoricalCrossentropy
from tensorflow.keras.callbacks import TensorBoard, ModelCheckpoint
from tensorflow.keras.preprocessing.image import ImageDataGenerator
from tensorflow.keras.preprocessing import image
from tensorflow.keras import backend as k

model = tf.keras.models.load_model('best_model.h5')

img_pred = image.load_img('output.jfif', target_size=(48, 48))
img_pred = image.img_to_array(img_pred)
img_pred = np.expand_dims(img_pred, axis=0)
rslt = model.predict(img_pred)
print(rslt)

r1=np.argmax(rslt)
print(r1)

if r1 == 0:
	agevalue = random.randint(1, 10)
	print(agevalue)
elif r1 == 1:
	agevalue = random.randint(11, 20)
	print(agevalue)
elif r1 == 2:
	agevalue = random.randint(21, 30)
	print(agevalue)
elif r1 == 3:
	agevalue = random.randint(31, 40)
	print(agevalue)
elif r1 == 4:
	agevalue = random.randint(41, 50)
	print(agevalue)
elif r1 == 5:
	agevalue = random.randint(51, 60)
	print(agevalue)
elif r1 == 6:
	agevalue = random.randint(61, 100)
	print(agevalue)