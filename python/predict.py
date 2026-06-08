import sys
import joblib
import numpy as np
import os

# Absolute path to this folder
BASE_DIR = os.path.dirname(os.path.abspath(__file__))

# Load trained model
model_path = os.path.join(BASE_DIR, "model.pkl")
model = joblib.load(model_path)

# Get inputs from PHP
inputs = list(map(float, sys.argv[1:]))

# Convert to array
data = np.array(inputs).reshape(1, -1)

# Predict
prediction = model.predict(data)[0]

# Map output
label_map = {
    0: "Visual",
    1: "Auditory",
    2: "Kinesthetic"
}

print(label_map[prediction])
