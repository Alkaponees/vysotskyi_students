from flask import Flask, render_template, request
import mysql.connector

app = Flask(__name__)
@app.route("/")
def home():
    return render_template("index.html")
@app.route("/main_menu")
def main_menu():
    return render_template("index.html")
# MySQL configuration
mysql_config = {
    'host': 'localhost',
    'user': 'vysotskyi',
    'password': 'Vys0tsky!',
    'database': 'vysotskyi_students'
}
conn = mysql.connector.connect(**mysql_config)
cursor = conn.cursor()

# Route to display the insert form
@app.route('/insert-form')
def insert_form():
    return render_template('insert.html')

# Route to handle the insert form data
@app.route('/insert', methods=['POST'])
def insert_data():
    name = request.form['name']
    institute = request.form['institute']
    phone = request.form['phone']
    course = request.form['course']
    gender = request.form['gender']
    query = "INSERT INTO users (name,phone,institute,course,gender) VALUES (%s, %s, %s, %s, %s)"
    values = (name,phone,institute,course,gender)
    cursor.execute(query, values)
    conn.commit()
    return "Data inserted successfully"

# Route to display the update form
@app.route('/update-form')
def update_form():
    return render_template('update.html')

# Route to handle the update form data
@app.route('/update', methods=['POST'])
def update_data():
    name_1 = request.form['name_1']
    name = request.form['name']
    institute = request.form['institute']
    phone = request.form['phone']
    course = request.form['course']
    gender = request.form['gender']
    query = "UPDATE users SET name = %s, phone = %s ,institute=%s ,course =%s,gender=%s WHERE name = %s"
    values = (name, phone, institute,course,gender,name_1)
    cursor.execute(query, values)
    conn.commit()
    return "Data updated successfully"

# Route to display the delete form
@app.route('/delete-form')
def delete_form():
    return render_template('delete.html')

# Route to handle the delete form data
@app.route('/delete', methods=['POST'])
def delete_data():
    name = request.form['name']
    institute = request.form['institute']
    query = "DELETE FROM users WHERE name = %s AND institute = %s"
    values = (name,institute)
    cursor.execute(query, values)
    conn.commit()
    return "Data deleted successfully"

# Route to display the select data table
@app.route('/select')
def select_data():
     if request.method == "POST":
        # get the name(s) from the form
        names = request.form.getlist("name")

        # build the SQL query
        query = "SELECT * FROM student WHERE name IN (%s)"
        placeholders = ", ".join(["%s" for _ in range(len(names))])
        query = query % placeholders

        # execute the query
        cursor = conn.cursor()
        cursor.execute(query, tuple(names))
        rows = cursor.fetchall()

        # render the template with the results
        return render_template("select.html", rows=rows)

     else:
        # render the form
        return render_template("select_form.html")

if __name__ == '__main__':
    app.run(host="0.0.0.0",port=5000,debug=True)
