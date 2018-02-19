<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Models with Service Layer</title>
    </head>

    <body>
		<h1> Ini di modul backend HMVC, ini index</h1>
        {{posts}}
        {{posts2}}   
         {{posts3}}  
          {{posts4}}         
        {% for datas in dataa %}
        {% if loop.first %}
        <table border=1 align="center">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
        {% endif %}
            <tbody>
                <tr>
                    <td>{{ datas.iduser }}</td>
                    <td>{{ datas.name }}</td>
                    <td>{{ datas.username}}</td>
                </tr>
            </tbody>
        {% if loop.last %}
            </table>
        {% endif %}
        {% else %}
            No Data
        {% endfor %}
    </body>
</html>