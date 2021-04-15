import dlib
from PIL import Image
import skimage
from skimage import io
import cv2
import os


def detect_faces(image):

    # Create a face detector
    face_detector = dlib.get_frontal_face_detector()

    # Run detector and get bounding boxes of the faces on image.
    detected_faces = face_detector(image, 1)
    face_frames = [(x.left()-10, x.top()-10,
                    x.right()+10, x.bottom()+20) for x in detected_faces]

    return face_frames

path='../local_stg'  # path of the folder in which the images are present 

for i in os.listdir(path):
    
    # Load image
    img_path = path+'/'+i
    image = io.imread(img_path)

    # Detect faces
    detected_faces = detect_faces(image)

    # Crop faces 
    for n, face_rect in enumerate(detected_faces):
        
        face = Image.fromarray(image).crop(face_rect)
    
        face.save('../moodmodel/local_stg/output.jpg')     # cropped is the folder in which the cropped faces will be saved.

path1='../moodmodel/local_stg/output.jpg'

img=cv2.imread(path1)

width=200
height=200

imgR=cv2.resize(img,(width,height))
print(imgR.shape)

cv2.imwrite('../moodmodel/local_stg/output.jpg', imgR)

cv2.waitKey(0)

