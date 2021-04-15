import os
import pathlib
import numpy as np
import tensorflow as tf
from tensorflow.keras.layers.experimental.preprocessing import Rescaling
from tensorflow.keras.layers import Conv2D, MaxPooling2D, Flatten, Dense, Dropout, BatchNormalization, InputLayer
from tensorflow.keras.optimizers import Adam
from tensorflow.keras.losses import BinaryCrossentropy
from tensorflow.keras.callbacks import TensorBoard, ModelCheckpoint
from tensorflow.keras.preprocessing.image import ImageDataGenerator
from tensorflow.keras.preprocessing import image
from tensorflow.keras import backend as k

#Global Paths
ROOT = pathlib.Path('.')
TRAIN_DIR = os.path.join(ROOT, 'train')
VAL_DIR = os.path.join(ROOT, 'validation')
LOG_DIR = os.path.join(ROOT, 'logs')

#Datset params
BATCH_SIZE = 50
TOTAL_CLASSES = 2
AUTOTUNE = tf.data.experimental.AUTOTUNE

TRAIN_DS = tf.keras.preprocessing.image_dataset_from_directory(TRAIN_DIR, image_size = (48, 48), batch_size = BATCH_SIZE, label_mode = 'categorical')
TRAIN_DS = TRAIN_DS.cache().prefetch(buffer_size = AUTOTUNE)

VAL_DS = tf.keras.preprocessing.image_dataset_from_directory(VAL_DIR, image_size = (48, 48), batch_size = BATCH_SIZE, label_mode = 'categorical')
VAL_DS = VAL_DS.cache().prefetch(buffer_size = AUTOTUNE)

class Model:
    def __init__(self, optimizer, loss_fn):
        # This is just a random model I have created it can be modified or made more complex
        self.model = tf.keras.models.Sequential([
            InputLayer(input_shape = (48, 48, 3)),
            Rescaling(1 / 255.),
            Conv2D(64, 3, padding = "same", activation = "relu"),
            MaxPooling2D(pool_size=(2, 2)),
            Conv2D(128, 4, padding="same", activation="relu"),
            MaxPooling2D(pool_size=(2, 2)),
            Flatten(),
            Dense(TOTAL_CLASSES, activation = "sigmoid")
            ])
        self.model.compile(optimizer = optimizer, loss = loss_fn, metrics = ["accuracy"])
        print(self.model.summary()) 
    
    def fit(self, epochs):
        ts_board = TensorBoard(log_dir = LOG_DIR) # For tensorboard
        model_save = ModelCheckpoint("best_model.h5", monitor = 'loss', verbose = 1, save_best_only = True, mode = 'auto', period = 1) # To save the best model
        self.model.fit(TRAIN_DS, validation_data = VAL_DS, epochs = epochs, callbacks = [ts_board, model_save])
        self.model.save("best_gender_model.h5")
    
    def evaluate(self):
        self.model.evaluate(VAL_DS)
    
    def pred(self):
        img_pred = image.load_img('V:/Gender/validation/male/23.png', target_size=(48, 48))
        img_pred = image.img_to_array(img_pred)
        img_pred = np.expand_dims(img_pred, axis=0)
        rslt = self.model.predict(img_pred)
        print(rslt)
        
        r1=np.argmax(rslt)
        print(r1)

        if r1 == 0:
            print("Female")
        elif r1 == 1:
            print("Male")

if __name__ == "__main__":
    model = Model(Adam(learning_rate = 0.01), BinaryCrossentropy()) # Change optimizer and loss function here
    model.fit(epochs = 20) # Change number of epochs here
    model.evaluate()
    model.pred()