````markdown
# Student Learning Style Classification Using Decision Tree Algorithm

This project is a group project developed for **CSC649 Special Topics in Computer Science**. The project focuses on classifying students' learning styles using a **Decision Tree algorithm**.

The system predicts a student's learning style based on the **VAK learning style model**, which consists of **Visual**, **Auditory**, and **Kinesthetic** learning styles. Through this system, students can answer learning-preference questions and receive a predicted learning style result.

---

## Project Title

**Student Learning Style Classification Using Decision Tree Algorithm**

---

## Course Information

**Course Code:** CSC649  
**Course Name:** Special Topics in Computer Science  
**Faculty:** Faculty of Computer and Mathematical Sciences  
**University:** Universiti Teknologi MARA  

---

## Project Overview

Students have different learning preferences. Some students understand better by looking at diagrams, charts, and visual materials. Some students learn better by listening to explanations, lectures, or discussions. Other students learn better through hands-on activities, experiments, and practical tasks.

However, many students are not fully aware of their suitable learning style. When students use study methods that do not match their learning preferences, learning may become less effective. This can affect their motivation, understanding, participation, and academic performance.

This project aims to develop a simple learning style classification system using a Decision Tree machine learning model. The system classifies students into one of the VAK categories based on their answers to learning-style-related questions.

The Decision Tree algorithm is used because it is easy to understand, simple to implement, and suitable for classification tasks. It can also show decision rules clearly, which makes it useful for educational data analysis.

---

## Learning Style Categories

The system classifies students into three main learning style categories:

### 1. Visual Learner

Visual learners understand information better through:

- Diagrams
- Charts
- Pictures
- Mind maps
- Written notes
- Visual examples

### 2. Auditory Learner

Auditory learners understand information better through:

- Listening to lectures
- Group discussions
- Audio notes
- Verbal explanations
- Reading aloud

### 3. Kinesthetic Learner

Kinesthetic learners understand information better through:

- Hands-on activities
- Experiments
- Role-playing
- Practical tasks
- Physical involvement in learning

---

## Problem Statement

Many students do not know which learning style suits them best. Because of this, they may use study methods that are not suitable for their strengths. For example, a kinesthetic learner may struggle if they only rely on reading notes, while an auditory learner may learn better through discussion or listening.

Another problem is the lack of simple tools that can automatically predict students' learning styles. Many students need to identify their own learning preferences manually, which can be confusing and inaccurate.

This project helps solve the problem by using a machine learning model to classify students into Visual, Auditory, or Kinesthetic learning styles. The result can guide students to choose study methods that match their learning preferences.

---

## Project Objectives

The objectives of this project are:

1. To collect and prepare the VAK learning-style dataset by cleaning, organizing, and selecting relevant attributes for analysis.

2. To apply data preprocessing techniques such as data cleaning, attribute selection, label encoding, and normalization to prepare the dataset for machine learning analysis.

3. To design, train, and optimize a Decision Tree classification model to automatically predict students' learning styles based on survey attributes.

4. To evaluate the performance of the classification model using accuracy, precision, recall, and confusion matrix.

---

## Scope of the Project

The scope of this project includes:

- Using an existing VAK learning-style dataset.
- Cleaning and preparing the dataset before model training.
- Selecting meaningful features from the dataset.
- Applying preprocessing techniques such as label encoding and normalization.
- Developing a Decision Tree classifier.
- Predicting students' learning styles as Visual, Auditory, or Kinesthetic.
- Evaluating the model using suitable performance metrics.
- Developing a simple application or GUI where users can answer learning-preference questions and receive the predicted learning style.

This project does not include:

- Real-time data collection.
- User account registration or login.
- External system deployment.
- Integration with university learning management systems.
- Deep learning or other complex machine learning algorithms.

---

## System Features

The main features of the system are:

- Web-based user interface.
- Learning-style questionnaire.
- Prediction using a trained Decision Tree model.
- Classification into Visual, Auditory, or Kinesthetic learning style.
- Result display page.
- Simple PHP and Python integration.
- Dataset-based machine learning prediction.

---

## Technologies Used

The technologies used in this project include:

- PHP
- Python
- HTML
- CSS
- Machine Learning
- Decision Tree Algorithm
- Scikit-learn
- Pandas
- NumPy
- Pickle / Joblib

---

## Machine Learning Algorithm

The algorithm used in this project is:

```text
Decision Tree Classifier
````

The Decision Tree algorithm works by splitting data into branches based on selected attributes. Each branch represents a decision rule, and the final output represents the predicted learning style category.

The algorithm is suitable for this project because:

* It is easy to understand.
* It is suitable for classification problems.
* It can handle survey-based data.
* It produces clear decision rules.
* It can classify students into VAK categories effectively.

---

## Project Structure

```text
LEARNING-STYLE-SYSTEM/
│
├── assets/
│   ├── A.png
│   ├── bg.png
│   ├── K.png
│   └── V.png
│
├── dataset/
│   └── my_csv.csv
│
├── php/
│   ├── index.php
│   ├── result.php
│   ├── submit.php
│   └── test_exec.php
│
├── python/
│   ├── model.pkl
│   ├── predict.py
│   └── train_model.py
│
├── README.md
├── .gitignore
└── requirements.txt
```

---

## Folder Description

### assets/

This folder contains images and design assets used in the system interface.

### dataset/

This folder contains the dataset used to train the learning style classification model.

### php/

This folder contains the PHP files used for the web interface and system flow.

### python/

This folder contains the Python files used for model training and prediction.

---

## How the System Works

The system works through the following steps:

1. The user opens the web-based system.
2. The user answers learning-style questions.
3. The answers are submitted through the PHP form.
4. PHP sends the input data to the Python prediction script.
5. The trained Decision Tree model processes the input.
6. The model predicts the user's learning style.
7. The system displays the result as Visual, Auditory, or Kinesthetic.

---

## Model Evaluation

The model can be evaluated using the following performance metrics:

### Accuracy

Accuracy measures how many predictions are correctly classified compared to the total number of predictions.

### Precision

Precision measures how many predicted learning style results are actually correct.

### Recall

Recall measures how many actual learning style categories are correctly identified by the model.

### Confusion Matrix

The confusion matrix shows the number of correct and incorrect predictions for each learning style category.

---

## How to Run the Project

### 1. Clone the Repository

```bash
git clone https://github.com/your-username/student-learning-style-classification.git
```

Replace `your-username` with your actual GitHub username.

---

### 2. Move the Project to Local Server

Move the project folder into your local server directory.

For Laragon:

```text
C:\laragon\www\
```

For XAMPP:

```text
C:\xampp\htdocs\
```

---

### 3. Install Python Requirements

Open the terminal inside the project folder and run:

```bash
pip install -r requirements.txt
```

---

### 4. Train the Model

Go to the Python folder:

```bash
cd python
```

Run the training file:

```bash
python train_model.py
```

This will train the Decision Tree model and generate the model file:

```text
model.pkl
```

---

### 5. Run the System

Start Laragon or XAMPP.

Then open the system in your browser:

```text
http://localhost/LEARNING-STYLE-SYSTEM/php/index.php
```

---

## Example System Flow

```text
User answers questions
        ↓
PHP receives input
        ↓
Python prediction file is executed
        ↓
Decision Tree model predicts learning style
        ↓
Result is displayed to user
```

---

## Expected Output

The system will display one of the following results:

```text
Visual Learner
```

or

```text
Auditory Learner
```

or

```text
Kinesthetic Learner
```

---

## Group Members

| Student ID | Name                                          | Group      |
| ---------- | --------------------------------------------- | ---------- |
| 2024629622 | Nurainaa Balqis Binti Mohd Adly Hafez Hedayat | CDCS2305B1 |
| 2023657196 | Nur Adlina Balqis Binti Jaafar                | CDCS2305B1 |
| 2023436364 | Ariena Shafiera Binti Muhd Azamli             | CDCS2305B2 |
| 2023269214 | Nur Aliya Syazwani Binti Mohd Asmika          | CDCS2305B2 |

---

## Prepared For

**Dr. Wan Safra Diyana Binti Wan Abdul Ghani**

---

## Submission Date

**8 December 2025**

---

## Academic Purpose

This project is developed for academic purposes as part of the CSC649 Special Topics in Computer Science group project.

The prediction result is intended to help students understand their possible learning style. It should be used as a learning support tool and not as a fixed or final assessment of a student's ability.

---

## Disclaimer

This system is a simple machine learning-based learning style classification project. The result depends on the dataset, selected attributes, and the trained Decision Tree model. The system is not intended to replace professional educational assessment but to provide basic guidance for students to understand their learning preferences.

---

## References

This project is based on the topic of learning style classification, educational data mining, and machine learning classification methods. The references are included in the full group project proposal document.

```

This README follows your proposal details, including the title, objectives, scope, group members, and Decision Tree focus. :contentReference[oaicite:0]{index=0}
```
