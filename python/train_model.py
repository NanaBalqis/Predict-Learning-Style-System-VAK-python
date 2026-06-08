import pandas as pd
import joblib

from sklearn.model_selection import train_test_split, GridSearchCV
from sklearn.tree import DecisionTreeClassifier
from sklearn.metrics import accuracy_score, confusion_matrix, classification_report

# 1. LOAD DATASET

df = pd.read_csv("../dataset/my_csv.csv")

print("Dataset loaded successfully")
print(df.head())
print(f"\nTotal rows: {df.shape[0]}")
print(f"Total columns: {df.shape[1]}")


# 2. DATA PREPROCESSING

# Encode Gender
df['Gender'] = df['Gender'].map({
    'Male': 0,
    'Female': 1
})

# Encode Target Variable (Learner)
df['Learner'] = df['Learner'].map({
    'V': 0,   # Visual
    'A': 1,   # Auditory
    'K': 2    # Kinesthetic
})

# Drop rows with missing values (safety)
df.dropna(inplace=True)

# Separate features and target
X = df.drop('Learner', axis=1)
y = df['Learner']

print("\nFeature columns:")
print(X.columns.tolist())

# 3. TRAIN–TEST SPLIT (80/20)

X_train, X_test, y_train, y_test = train_test_split(
    X,
    y,
    test_size=0.2,
    random_state=42,
    stratify=y
)

print("\nTrain size:", X_train.shape[0])
print("Test size:", X_test.shape[0])

# 4. GRID SEARCH (MODEL TUNING)

param_grid = {
    'criterion': ['gini', 'entropy'],
    'max_depth': [4, 6, 8, 10, 12],
    'min_samples_split': [5, 10, 20],
    'min_samples_leaf': [2, 5, 10]
}

dt = DecisionTreeClassifier(
    random_state=42,
    class_weight='balanced'
)

grid = GridSearchCV(
    estimator=dt,
    param_grid=param_grid,
    cv=5,
    scoring='accuracy',
    n_jobs=-1
)

print("\nTraining Decision Tree with GridSearchCV...")
grid.fit(X_train, y_train)

best_model = grid.best_estimator_

print("\nBest Parameters Found:")
print(grid.best_params_)

# 5. MODEL EVALUATION

y_pred = best_model.predict(X_test)

accuracy = accuracy_score(y_test, y_pred)
cm = confusion_matrix(y_test, y_pred)
report = classification_report(y_test, y_pred)

print("\n================ MODEL EVALUATION ================")
print(f"Accuracy: {accuracy:.4f}")
print("\nConfusion Matrix:")
print(cm)
print("\nClassification Report:")
print(report)

# 6. FEATURE IMPORTANCE (OPTIONAL)

feature_importance = pd.Series(
    best_model.feature_importances_,
    index=X.columns
).sort_values(ascending=False)

print("\nFeature Importance:")
print(feature_importance)

# 7. SAVE MODEL

joblib.dump(best_model, "model.pkl")
print("\nModel saved successfully as model.pkl")
