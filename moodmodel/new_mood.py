import os
import pathlib
import numpy as np
import tensorflow as tf
from tensorflow.keras.layers.experimental.preprocessing import Rescaling
from tensorflow.keras.layers import Conv2D, MaxPooling2D, Flatten, Dense, Dropout, BatchNormalization, InputLayer
from tensorflow.keras.optimizers import Adam
from tensorflow.keras.losses import CategoricalCrossentropy
from tensorflow.keras.callbacks import TensorBoard, ModelCheckpoint
from tensorflow.keras.preprocessing.image import ImageDataGenerator
from tensorflow.keras.preprocessing import image
from tensorflow.keras import backend as k

model = tf.keras.models.load_model('best_mood_model.h5')

img_pred = image.load_img('output.jfif', target_size=(48, 48))
img_pred = image.img_to_array(img_pred)
img_pred = np.expand_dims(img_pred, axis=0)
rslt = model.predict(img_pred)
print(rslt)

r1=np.argmax(rslt)
print(r1)

if r1 == 0:
	moodvalue = "Happy"
	maxmood_rslt = max(rslt[0])
	print(moodvalue)
	print(maxmood_rslt)
elif r1 == 1:
	moodvalue = "Neutral"
	maxmood_rslt = max(rslt[0])
	print(moodvalue)
	print(maxmood_rslt)
