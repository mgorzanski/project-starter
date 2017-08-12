<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>{% block title %}{% endblock %}</title>
    <link rel="stylesheet" href="{{ basedir }}/css/main.css">
</head>

<body>
    {% block content %}{% endblock %}
</body>
</html>